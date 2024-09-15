<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractIntegerData;

class KeyTag extends AbstractIntegerData
{
    protected string $name = 'keyTag';
}
