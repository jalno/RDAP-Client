<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataString;
use Stringable;

class StartAddress extends AbstractRdapResponseDataString
{
    protected string $name = 'startAddress';

    public function __construct(string|Stringable $data)
    {
        $this->values = (string) $data;
    }
}
