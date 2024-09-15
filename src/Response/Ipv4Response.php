<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response;

use Jalno\RdapClient\Response\Abstracts\AbstractIpResponse;
use Jalno\RdapClient\Response\Definitions\IpDefinition;

class Ipv4Response extends AbstractIpResponse
{
    protected ?IpDefinition $definition;

    public function getVersion() : string
    {
        return 'ipv4';
    }
}
