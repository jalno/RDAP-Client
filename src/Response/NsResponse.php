<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response;

use Jalno\RdapClient\Response\Abstracts\AbstractResponse;
use Jalno\RdapClient\Response\Definitions\NsDefinition;

class NsResponse extends AbstractResponse
{
    protected ?NsDefinition $definition;

    public function getDefinition() : NsDefinition
    {
        return $this->definition ??= new NsDefinition($this);
    }
}
