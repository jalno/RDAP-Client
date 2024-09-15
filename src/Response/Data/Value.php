<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractArrayOrStringData;

class Value extends AbstractArrayOrStringData
{
    protected string $name = 'value';
}
