<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveNamed;
use Jalno\RdapClient\Response\Data\Definitions\UnnamedRecursiveArrayEmptyNameData;
use Stringable;

class Ipv4 extends AbstractRdapResponseDataRecursiveNamed
{
    protected string $name = 'v4';

    public function __construct(string|Stringable ...$data)
    {
        $this->values = new UnnamedRecursiveArrayEmptyNameData(...$data);
    }
}
