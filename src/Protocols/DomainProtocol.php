<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Protocols;

use Jalno\RdapClient\Exceptions\MismatchProtocolBehaviorException;
use Jalno\RdapClient\Interfaces\RdapClientInterface;
use Jalno\RdapClient\Interfaces\RdapRequestInterface;
use Jalno\RdapClient\Interfaces\RdapResponseInterface;
use Jalno\RdapClient\Response\DomainResponse;
use Jalno\RdapClient\Services\DomainService;
use Exception;
use function get_class;
use function sprintf;

class DomainProtocol extends AbstractRdapProtocol
{
    public function __construct(RdapClientInterface $client, ?DomainService $service = null)
    {
        parent::__construct($client);
        if ($service) {
            $this->services = $service;
        }
    }

    public function setService(DomainService $service): void
    {
        $this->services = $service;
    }

    /**
     * @throws Exception
     */
    public function getService(): DomainService
    {
        return $this->services ??= DomainService::fromURL(self::DOMAIN_URI, $this->client->getHttpClient());
    }

    /**
     * @return string
     * @link https://datatracker.ietf.org/doc/html/rfc7482#section-3.1.3
     */
    public function getSearchPath(): string
    {
        return '/domain';
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

        return new DomainResponse($response, $request, $this);
    }
}
