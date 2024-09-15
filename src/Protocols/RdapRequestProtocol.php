<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Protocols;

use Jalno\RdapClient\Exceptions\MismatchProtocolBehaviorException;
use Jalno\RdapClient\Exceptions\RdapRemoteRequestException;
use Jalno\RdapClient\Interfaces\RdapProtocolInterface;
use Jalno\RdapClient\Interfaces\RdapRequestInterface;
use Jalno\RdapClient\Interfaces\RdapResponseInterface;
use Jalno\Http\Exceptions\ResponseException;
use RuntimeException;
use function array_pop;
use function explode;
use function sprintf;
use function str_contains;
use function str_ends_with;

class RdapRequestProtocol implements RdapRequestInterface
{
    protected string $target;

    protected RdapProtocolInterface $protocol;

    protected ?RdapResponseInterface $response = null;

    private int $errorCode = 0;

    private string $errorMessage = '';
    private ?string $rdapSearchURL = null;

    public function __construct(string $target, RdapProtocolInterface $protocol)
    {
        $this->target = $target;
        $this->protocol = $protocol;
    }

    public function getProtocol(): RdapProtocolInterface
    {
        return $this->protocol;
    }

    public function getTarget(): string
    {
        return $this->target;
    }

    public function getErrorCode(): int
    {
        return $this->errorCode;
    }

    public function getErrorMessage(): string
    {
        return $this->errorMessage;
    }

    public function getRdapSearchURL(): ?string
    {
        return $this->rdapSearchURL;
    }

    public function withRdapSearchURL(string $url) : static
    {
        $obj = clone $this;
        $obj->errorCode = 0;
        $obj->errorMessage = '';
        $obj->rdapSearchURL = $url;
        $obj->response = null;
        $targetUrl = $url;
        if (str_contains($targetUrl, '?')) {
            [$targetUrl] = explode('?', $targetUrl, 2);
        }
        if (str_contains($targetUrl, '#')) {
            [$targetUrl] = explode('#', $targetUrl, 2);
        }
        $targetUrl = rtrim($targetUrl, '/');
        $targetUrl = explode('/', $targetUrl);
        // change the target
        $obj->target = array_pop($targetUrl);

        // validate target
        $path = array_pop($targetUrl);
        $searchPath = rtrim($this->getProtocol()->getSearchPath(), '/');
        if (!str_ends_with($searchPath, $path)) {
            throw new MismatchProtocolBehaviorException(
                'Target RDAP search path is mismatch'
            );
        }

        return $obj;
    }

    /**
     * @return RdapResponseInterface
     */
    public function getResponse(): RdapResponseInterface
    {
        if ($this->response) {
            return $this->response;
        }
        $this->rdapSearchURL ??= $this->getProtocol()->getFindURL($this->getTarget());
        if (!$this->rdapSearchURL) {
            throw new RuntimeException(
                sprintf('Could not get Rdap URL for %s', $this->getTarget())
            );
        }
        if ($this->errorCode !== 0 || $this->errorMessage !== '') {
            throw new RdapRemoteRequestException(
                $this->errorMessage,
                $this->errorCode
            );
        }
        try {
            $response = $this->getProtocol()->getClient()->getHttpClient()->get($this->rdapSearchURL);

            return $this->response = $this->protocol->createResponse($response->getBody(), $this);
        } catch (ResponseException $e) {
            throw new RdapRemoteRequestException(
                $e->getMessage(),
                $e->getCode(),
                $e
            );
        }
    }
}
