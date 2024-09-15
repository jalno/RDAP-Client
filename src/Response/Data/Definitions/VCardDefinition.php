<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data\Definitions;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArrayEmptyName;
use Jalno\RdapClient\Response\Data\NonStandards\EmptyObject;
use Stringable;

class VCardDefinition extends AbstractRdapResponseDataRecursiveArrayEmptyName
{
    protected array $allowedKeys = [
        'type',
        'label',
        'identifier',
        null
    ];

    public function __construct(
        string|Stringable $name,
        NamedRecursiveObjectData|EmptyObject $attribute,
        string|Stringable $typeValue,
        string|Stringable|array $value,
        string|Stringable|array ...$values
    ) {
        $this->values = [(string) $name];
        $this->values[] = $attribute;
        $this->values[] = (string) $typeValue;
        $this->values[] = $value instanceof Stringable ? (string) $value : $value;
        foreach ($values as $value) {
            $this->values[] = $value instanceof Stringable ? (string) $value : $value;
        }
    }
}
