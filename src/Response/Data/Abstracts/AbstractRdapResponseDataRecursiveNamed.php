<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data\Abstracts;

use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataInterface;
use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataRecursiveNamedInterface;
use Jalno\RdapClient\Response\Traits\AllowedKeyDataTraits;

abstract class AbstractRdapResponseDataRecursiveNamed implements RdapResponseDataRecursiveNamedInterface
{
    use AllowedKeyDataTraits;

    protected string $name;

    protected RdapResponseDataInterface $values;

    public function rootOnly() : bool
    {
        return false;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValues(): RdapResponseDataInterface
    {
        return $this->values;
    }

    public function jsonSerialize() : RdapResponseDataInterface
    {
        return $this->getValues();
    }

    public function getPlainData()
    {
        return $this->getValues()->getPlainData();
    }
}
