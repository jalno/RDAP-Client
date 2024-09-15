<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataString;
use Stringable;

class Label extends AbstractRdapResponseDataString
{
    protected string $name = 'label';

    public function __construct(string|Stringable $data)
    {
        $this->values = (string) $data;
    }
}
