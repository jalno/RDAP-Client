<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArray;
use Jalno\RdapClient\Response\Data\Definitions\NoticesDefinition;
use function array_values;

class Notices extends AbstractRdapResponseDataRecursiveArray
{
    protected string $name = 'notices';

    public function __construct(NoticesDefinition ...$data)
    {
        $this->values = array_values($data);
    }

    public function rootOnly() : bool
    {
        return true;
    }
}
