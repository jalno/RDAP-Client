<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArray;
use Jalno\RdapClient\Response\Data\Definitions\PublicIdsDefinitions;
use function array_values;

class PublicIds extends AbstractRdapResponseDataRecursiveArray
{
    protected string $name = 'publicIds';

    protected ?array $allowedKeys = null;

    public function __construct(PublicIdsDefinitions ...$data)
    {
        $this->values = array_values($data);
    }
}
