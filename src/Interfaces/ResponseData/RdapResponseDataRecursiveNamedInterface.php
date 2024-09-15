<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Interfaces\ResponseData;

interface RdapResponseDataRecursiveNamedInterface extends
    RdapResponseDataRecursiveInterface,
    RdapResponseDataNamedInterface
{
    public function getName() : string;

    public function getValues() : RdapResponseDataInterface|array;
}
