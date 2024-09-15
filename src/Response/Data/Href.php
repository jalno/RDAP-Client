<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataString;
use Stringable;

class Href extends AbstractRdapResponseDataString
{
    protected string $name = 'href';

    public function __construct(string|Stringable $data)
    {
        $this->values = (string) $data;
    }
}
