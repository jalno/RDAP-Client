<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data\Definitions;

use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataInterface;
use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataNamedInterface;
use Jalno\RdapClient\Response\Data\NonStandards\CustomNamedData;
use Jalno\RdapClient\Response\Data\NonStandards\CustomUnnamedArrayData;
use Jalno\RdapClient\Response\Data\NonStandards\CustomUnNamedData;
use function is_array;
use function is_iterable;

class RdapCustomConformanceData implements RdapResponseDataNamedInterface
{

    protected ?RdapResponseDataInterface $values = null;

    public function __construct(
        protected string $name,
        $data
    ) {
        if (is_array($data) || is_iterable($data)) {
            $values = [];
            foreach ($data as $key => $datum) {
                $values[] = new CustomNamedData($key, $datum);
            }
            $this->values = new CustomUnnamedArrayData(...$values);
            return;
        }
        $this->values = new CustomUnNamedData($data);
    }

    public function rootOnly(): bool
    {
        return false;
    }

    public function getAllowedKeys(): ?array
    {
        return null;
    }

    public function getValues(): ?RdapResponseDataInterface
    {
        return $this->values;
    }

    public function jsonSerialize(): ?RdapResponseDataInterface
    {
        return $this->getValues();
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPlainData()
    {
        return $this->getValues()?->getPlainData();
    }
}
