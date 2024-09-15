<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data\Definitions;

use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataNamedInterface;
use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArrayEmptyName;

class DsDataDefinition extends AbstractRdapResponseDataRecursiveArrayEmptyName
{
    public function __construct(
        RdapResponseDataNamedInterface ...$values
    ) {
        foreach ($values as $value) {
            $this->values[$value->getName()] = $value;
        }
    }
}
