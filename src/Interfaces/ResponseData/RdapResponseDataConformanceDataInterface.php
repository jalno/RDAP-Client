<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Interfaces\ResponseData;

use IteratorAggregate;

interface RdapResponseDataConformanceDataInterface extends
    RdapResponseDataInterface,
    IteratorAggregate
{
    public function getValues() : array;
}
