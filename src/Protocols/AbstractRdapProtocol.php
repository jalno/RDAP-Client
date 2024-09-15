<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Protocols;

use Jalno\RdapClient\Exceptions\RdapServerNotFoundException;
use Jalno\RdapClient\Interfaces\RdapClientInterface;
use Jalno\RdapClient\Interfaces\RdapProtocolInterface;
use Jalno\RdapClient\Interfaces\RdapRequestInterface;
use Jalno\RdapClient\Interfaces\RdapServiceInterface;
use function explode;
use function sprintf;
use function str_contains;

abstract class AbstractRdapProtocol implements RdapProtocolInterface
{
    protected string $name;

    protected RdapServiceInterface $services;

    public function __construct(protected RdapClientInterface $client)
    {
    }

    public function getClient(): RdapClientInterface
    {
        return $this->client;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getService(): RdapServiceInterface
    {
        return $this->services;
    }

    public function getFindURL(string $target): string
    {
        $normalize = $this->getService()->normalize($target);
        if (!$normalize) {
            $this->getService()->throwInvalidTarget($target);
        }
        $url = $this->getService()->getRdapURL($normalize);
        if (!$url) {
            throw new RdapServerNotFoundException(
                sprintf('Could not get Rdap URL for %s', $target)
            );
        }

        if (str_contains($url, '#')) {
            [$url] = explode('?', $url);
        }
        if (str_contains($url, '?')) {
            [$url] = explode('?', $url);
        }
        $path = trim($this->getSearchPath(), '/');
        return rtrim($url, '/') . "/$path/$normalize";
    }

    public function find(string $target): ?RdapRequestInterface
    {
        return new RdapRequestProtocol($target, $this);
    }
}
