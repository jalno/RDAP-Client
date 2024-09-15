<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data\Definitions;

use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataNamedInterface;
use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataStringableInterface;
use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArrayEmptyName;

class PublicIdsDefinitions extends AbstractRdapResponseDataRecursiveArrayEmptyName
{
//    protected array $allowedKeys = [
//        'type',
//        'identifier',
//    ];

    public function __construct(
        RdapResponseDataStringableInterface|RdapResponseDataNamedInterface ...$data
    ) {
        $this->values = [
            'type' => null,
            'identifier' => null,
        ];
        foreach ($data as $action) {
            $this->values[$action->getName()] = $action;
        }
    }
}
