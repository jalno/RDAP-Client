<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArray;
use Jalno\RdapClient\Response\Data\Definitions\NameServersDefinition;
use function array_values;

class NameServers extends AbstractRdapResponseDataRecursiveArray
{
    protected string $name = 'nameservers';

    public function __construct(NameServersDefinition ...$data)
    {
        $this->values = array_values($data);
    }
}
