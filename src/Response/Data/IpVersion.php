<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataString;
use Stringable;

class IpVersion extends AbstractRdapResponseDataString
{
    protected string $name = 'ipVersion';

    public function __construct(string|Stringable $data)
    {
        $this->values = (string) $data;
    }
}
