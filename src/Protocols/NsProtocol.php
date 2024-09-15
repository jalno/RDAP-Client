<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Protocols;

use Jalno\RdapClient\Exceptions\MismatchProtocolBehaviorException;
use Jalno\RdapClient\Interfaces\RdapClientInterface;
use Jalno\RdapClient\Interfaces\RdapRequestInterface;
use Jalno\RdapClient\Interfaces\RdapResponseInterface;
use Jalno\RdapClient\Response\NsResponse;
use Jalno\RdapClient\Services\NsService;
use Exception;
use function get_class;
use function sprintf;

class NsProtocol extends AbstractRdapProtocol
{
    public function __construct(RdapClientInterface $client, ?NsService $service = null)
    {
        parent::__construct($client);
        if ($service) {
            $this->services = $service;
        }
    }

    public function setService(NsService $service): void
    {
        $this->services = $service;
    }

    /**
     * @throws Exception
     */
    public function getService(): NsService
    {
        return $this->services ??= NsService::fromURL(self::NS_URI, $this->client->getHttpClient());
    }

    /**
     * @return string
     * @link https://datatracker.ietf.org/doc/html/rfc7482#section-3.1.4
     */
    public function getSearchPath(): string
    {
        return '/nameserver';
    }

    public function createResponse(string $response, RdapRequestInterface $request): RdapResponseInterface
    {
        if ($request->getProtocol() !== $this) {
            throw new MismatchProtocolBehaviorException(
                sprintf(
                    'Protocol object "%s" from request is mismatch with protocol object "%s"',
                    get_class($request->getProtocol()),
                    $this::class
                )
            );
        }

        return new NsResponse($response, $request, $this);
    }
}
