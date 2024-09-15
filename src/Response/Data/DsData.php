<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArray;
use Jalno\RdapClient\Response\Data\Definitions\DsDataDefinition;
use function array_values;

class DsData extends AbstractRdapResponseDataRecursiveArray
{
    protected string $name = 'dsData';

    public function __construct(DsDataDefinition ...$data)
    {
        $this->values = array_values($data);
    }
}
