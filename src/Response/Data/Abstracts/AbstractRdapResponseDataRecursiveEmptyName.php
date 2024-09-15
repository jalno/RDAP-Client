<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data\Abstracts;

use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataInterface;
use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataRecursiveEmptyNameInterface;
use Jalno\RdapClient\Response\Traits\AllowedKeyDataTraits;

abstract class AbstractRdapResponseDataRecursiveEmptyName implements RdapResponseDataRecursiveEmptyNameInterface
{
    use AllowedKeyDataTraits;

    protected RdapResponseDataInterface $values;

    public function rootOnly() : bool
    {
        return false;
    }

    final public function getName(): void
    {
    }

    public function getValues(): RdapResponseDataInterface
    {
        return $this->values;
    }

    public function jsonSerialize(): RdapResponseDataInterface
    {
        return $this->getValues();
    }

    public function getPlainData()
    {
        return $this->getValues()->getPlainData();
    }
}
