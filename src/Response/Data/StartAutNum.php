<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractIntegerData;
use Stringable;
use function is_int;

class StartAutNum extends AbstractIntegerData
{
    protected string $name = 'startAutnum';

    public function __construct(string|Stringable|int $data)
    {
        $data = !is_int($data) ? (string) $data : $data;
        parent::__construct((int)$data);
    }
}
