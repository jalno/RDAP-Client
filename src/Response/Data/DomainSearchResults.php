<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArray;
use Jalno\RdapClient\Response\Data\Definitions\DomainDefinitionObjectClassName;
use function array_values;

class DomainSearchResults extends AbstractRdapResponseDataRecursiveArray
{
    protected string $name = 'domainSearchResults';

    public function __construct(DomainDefinitionObjectClassName ...$data)
    {
        $this->values = array_values($data);
    }
}
