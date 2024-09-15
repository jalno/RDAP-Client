<?php
declare(strict_types=1);

namespace ArrayAccess\RdapClient\Interfaces;

use Jalno\Http\Client;

interface RdapClientInterface
{
    const IPV4 = 'ipv4';
    const IPV6 = 'ipv46';
    const DOMAIN = 'domain';
    const NS = 'ns';
    const ASN = 'asn';

    public function getHttpClient(): Client;

    public function setHttpClient(Client $client): void;
}
