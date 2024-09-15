<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Definitions;

use Jalno\RdapClient\Response\Data\IpAddresses;
use Jalno\RdapClient\Response\Data\LdhName;

class NsDefinition extends AbstractResponseDefinition
{
    protected ?LdhName $ldhName = null;

    protected ?IpAddresses $ipAddresses = null;

    public function getLdhName(): ?LdhName
    {
        return $this->ldhName;
    }

    public function getIpAddresses(): ?IpAddresses
    {
        return $this->ipAddresses;
    }
}
