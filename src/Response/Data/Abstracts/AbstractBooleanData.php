<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data\Abstracts;

use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataInterface;
use Jalno\RdapClient\Response\Traits\AllowedKeyDataTraits;

abstract class AbstractBooleanData implements RdapResponseDataInterface
{
    use AllowedKeyDataTraits;

    protected string $name;

    protected bool $values;

    public function __construct(bool $data)
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

    public function getValues(): bool
    {
        return $this->values;
    }

    public function jsonSerialize(): bool
    {
        return $this->getValues();
    }

    public function getPlainData(): bool
    {
        return $this->getValues();
    }
}
