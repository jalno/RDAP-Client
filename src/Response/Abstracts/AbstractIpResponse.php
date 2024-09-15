<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Abstracts;

use Jalno\RdapClient\Response\Definitions\IpDefinition;

abstract class AbstractIpResponse extends AbstractResponse
{
    abstract public function getVersion() : string;

    public function getDefinition(): IpDefinition
    {
        return $this->definition ??= new IpDefinition($this);
    }
}
