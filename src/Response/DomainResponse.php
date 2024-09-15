<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response;

use Jalno\RdapClient\Response\Abstracts\AbstractResponse;
use Jalno\RdapClient\Response\Definitions\DomainDefinition;

class DomainResponse extends AbstractResponse
{
    protected ?DomainDefinition $definition;

    public function getDefinition(): DomainDefinition
    {
        return $this->definition ??= new DomainDefinition($this);
    }
}
