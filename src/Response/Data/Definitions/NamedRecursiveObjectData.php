<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data\Definitions;

use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataNamedInterface;
use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataStringableInterface;
use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveNamed;
use Jalno\RdapClient\Response\Data\NonStandards\ObjectData;

class NamedRecursiveObjectData extends AbstractRdapResponseDataRecursiveNamed
{
    public function __construct(
        RdapResponseDataNamedInterface|RdapResponseDataStringableInterface ...$data
    ) {
        $this->values = new ObjectData(...$data);
    }
}
