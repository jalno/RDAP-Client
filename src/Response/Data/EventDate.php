<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractDateData;

class EventDate extends AbstractDateData
{
    protected string $name = 'eventDate';
}
