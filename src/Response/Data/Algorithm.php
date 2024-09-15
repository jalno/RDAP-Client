<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractIntegerData;

class Algorithm extends AbstractIntegerData
{
    protected string $name = 'algorithm';
}
