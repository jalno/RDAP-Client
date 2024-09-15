<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Interfaces\ResponseData;

interface RdapResponseDataStringableEmptyNameInterface extends RdapResponseDataStringableInterface
{
    public function getName(): void;
}
