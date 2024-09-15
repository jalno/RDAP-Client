<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArray;
use Jalno\RdapClient\Response\Data\Definitions\EntityDefinitionObjectClassName;
use function array_values;

class EntitySearchResults extends AbstractRdapResponseDataRecursiveArray
{
    protected string $name = 'entitySearchResults';

    public function __construct(EntityDefinitionObjectClassName ...$data)
    {
        $this->values = array_values($data);
    }
}
