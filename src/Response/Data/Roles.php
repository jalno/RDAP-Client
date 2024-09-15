<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveNamed;
use Jalno\RdapClient\Response\Data\Definitions\UnnamedRecursiveArrayEmptyNameData;
use Stringable;

class Roles extends AbstractRdapResponseDataRecursiveNamed
{
    protected string $name = 'roles';

    public function __construct(string|Stringable ...$data)
    {
        $this->values = new UnnamedRecursiveArrayEmptyNameData(...$data);
    }
}
