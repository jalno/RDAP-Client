<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data\Definitions;

use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataStringableEmptyNameInterface;
use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArrayEmptyName;
use Jalno\RdapClient\Response\Data\NonStandards\UnnamedStringData;
use Stringable;

class UnnamedRecursiveArrayEmptyNameData extends AbstractRdapResponseDataRecursiveArrayEmptyName
{
    public function __construct(string|Stringable ...$data)
    {
        $this->values = [];
        foreach ($data as $item) {
            if ($item instanceof RdapResponseDataStringableEmptyNameInterface) {
                $this->values[] = $item;
                continue;
            }
            $this->values[] = new UnnamedStringData($item);
        }
    }

    /**
     * @return array<UnnamedStringData|RdapResponseDataStringableEmptyNameInterface>
     */
    public function getValues(): array
    {
        return parent::getValues();
    }
}
