<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response;

use Jalno\RdapClient\Response\Abstracts\AbstractResponse;
use Jalno\RdapClient\Response\Definitions\AsnDefinition;

class AsnResponse extends AbstractResponse
{
    protected ?AsnDefinition $definition;

    public function getDefinition(): AsnDefinition
    {
        return $this->definition ??= new AsnDefinition($this);
    }
}
