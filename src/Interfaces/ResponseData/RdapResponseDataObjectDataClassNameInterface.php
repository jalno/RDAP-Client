<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Interfaces\ResponseData;

interface RdapResponseDataObjectDataClassNameInterface extends RdapResponseDataStringableInterface
{
    public function getName(): string;
}
