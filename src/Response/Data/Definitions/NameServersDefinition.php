<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data\Definitions;

use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataNamedInterface;
use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArrayEmptyName;
use Jalno\RdapClient\Response\Data\IpAddresses;
use Jalno\RdapClient\Response\Data\LdhName;
use Jalno\RdapClient\Response\Data\ObjectClassName;

class NameServersDefinition extends AbstractRdapResponseDataRecursiveArrayEmptyName
{
    public function __construct(
        RdapResponseDataNamedInterface ...$values
    ) {
        foreach ($values as $value) {
            $this->values[$value->getName()] = $value;
        }
        $this->values['objectClassName'] ??= new ObjectClassName('nameserver');
    }

    public function getLdhName() : ?LdhName
    {
        return $this->values['ldhName']??null;
    }

    public function getObjectClassName() : ObjectClassName
    {
        return $this->values['objectClassName'];
    }

    public function getIpAddresses() : ?IpAddresses
    {
        return $this->values['ipAddresses']??null;
    }
}
