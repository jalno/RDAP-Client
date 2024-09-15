<?php
declare(strict_types=1);

namespace ArrayAccess\RdapClient\Interfaces;

interface RdapRequestInterface
{
    public function __construct(string $target, RdapProtocolInterface $protocol);

    public function getProtocol() : RdapProtocolInterface;

    public function getTarget() : string;

    public function getResponse() : RdapResponseInterface;

    public function withRdapSearchURL(string $url) : static;
}
