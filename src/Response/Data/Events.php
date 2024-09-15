<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArray;
use Jalno\RdapClient\Response\Data\Definitions\EventsCollection;
use function array_values;

class Events extends AbstractRdapResponseDataRecursiveArray
{
    protected string $name = 'events';

    protected ?array $allowedKeys = null;

    public function __construct(EventsCollection ...$data)
    {
        $this->values = array_values($data);
    }
}
