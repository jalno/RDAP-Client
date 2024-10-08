<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data\NonStandards;

use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataInterface;
use Jalno\RdapClient\Response\Traits\AllowedKeyDataTraits;
use stdClass;

class EmptyObject implements RdapResponseDataInterface
{
    use AllowedKeyDataTraits;

    protected object $data;

    public function __construct()
    {
        $this->data = new stdClass();
    }

    public function rootOnly() : bool
    {
        return false;
    }

    public function getName(): void
    {
    }

    public function getValues(): object
    {
        return clone $this->data;
    }

    public function jsonSerialize(): object
    {
        return $this->getValues();
    }

    public function getPlainData() : object
    {
        return $this->getValues();
    }
}
