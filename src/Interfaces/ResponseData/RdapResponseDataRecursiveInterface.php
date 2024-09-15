<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Interfaces\ResponseData;

interface RdapResponseDataRecursiveInterface extends RdapResponseDataInterface
{
    public function getValues() : RdapResponseDataInterface|array;
}
