<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data\Definitions;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractObjectiveClassNameDataDefinition;
use Jalno\RdapClient\Response\Data\ObjectClassName;

class NameserverDefinitionObjectClassName extends AbstractObjectiveClassNameDataDefinition
{
    public function getObjectClassName(): ObjectClassName
    {
        return $this->values['nameserver'] ??= new ObjectClassName('nameserver');
    }
}
