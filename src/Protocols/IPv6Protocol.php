<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Protocols;

use Jalno\RdapClient\Exceptions\MismatchProtocolBehaviorException;
use Jalno\RdapClient\Interfaces\RdapClientInterface;
use Jalno\RdapClient\Interfaces\RdapRequestInterface;
use Jalno\RdapClient\Interfaces\RdapResponseInterface;
use Jalno\RdapClient\Response\Ipv6Response;
use Jalno\RdapClient\Services\Ipv6Service;
use Exception;
use function get_class;
use function sprintf;

class IPv6Protocol extends AbstractIPProtocol
{
    public function __construct(RdapClientInterface $client, ?Ipv6Service $service = null)
    {
        parent::__construct($client);
        if ($service) {
            $this->services = $service;
        }
    }
    public function setService(Ipv6Service $service): void
    {
        $this->services = $service;
    }

    /**
     * @throws Exception
     */
    public function getService(): Ipv6Service
    {
        return $this->services ??= Ipv6Service::fromURL(self::IPV6_URI, $this->client->getHttpClient());
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

        return new Ipv6Response($response, $request, $this);
    }
}
