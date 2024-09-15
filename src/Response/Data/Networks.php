<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArray;
use Jalno\RdapClient\Response\Data\Definitions\RemarksDefinition;
use function array_values;

class Networks extends AbstractRdapResponseDataRecursiveArray
{
    protected string $name = 'networks';

    public function __construct(RemarksDefinition ...$data)
    {
        $this->values = array_values($data);
    }
}
