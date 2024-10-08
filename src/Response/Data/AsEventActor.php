<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArray;
use Jalno\RdapClient\Response\Data\Definitions\EventsCollection;
use function array_values;

class AsEventActor extends AbstractRdapResponseDataRecursiveArray
{
    protected string $name = 'asEventActor';

    protected ?array $allowedKeys = null;

    public function __construct(EventsCollection ...$data)
    {
        $this->values = array_values($data);
    }
}
