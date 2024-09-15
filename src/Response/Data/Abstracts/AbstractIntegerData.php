<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data\Abstracts;

use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataIntegerInterface;
use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataNamedInterface;
use Jalno\RdapClient\Response\Traits\AllowedKeyDataTraits;

abstract class AbstractIntegerData implements RdapResponseDataIntegerInterface, RdapResponseDataNamedInterface
{
    use AllowedKeyDataTraits;

    protected string $name;

    protected int $values;

    public function __construct(int $data)
    {
        $this->values = $data;
    }

    public function rootOnly() : bool
    {
        return false;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getValues(): int
    {
        return $this->values;
    }

    public function jsonSerialize(): int
    {
        return $this->getValues();
    }

    public function getPlainData() : int
    {
        return $this->getValues();
    }
}
