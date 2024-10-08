<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArray;
use Jalno\RdapClient\Response\Data\Definitions\RemarksDefinition;
use function array_values;

class Remarks extends AbstractRdapResponseDataRecursiveArray
{
    protected string $name = 'remarks';

    public function __construct(RemarksDefinition ...$data)
    {
        $this->values = array_values($data);
    }
}
