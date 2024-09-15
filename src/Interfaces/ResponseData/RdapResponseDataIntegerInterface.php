<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Interfaces\ResponseData;

interface RdapResponseDataIntegerInterface extends RdapResponseDataInterface
{
    public function getValues() : int;
}
