<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArray;
use Jalno\RdapClient\Response\Data\Definitions\VCardsDefinitions;

class VcardArray extends AbstractRdapResponseDataRecursiveArray
{
    protected string $name = 'vcardArray';

    public function __construct(VCardsDefinitions ...$definitions)
    {
        $this->values = ['vcard'];
        foreach ($definitions as $definition) {
            $this->values[] = $definition;
        }
    }

    public function rootOnly() : bool
    {
        return false;
    }
}
