<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data\Definitions;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArrayEmptyName;
use Jalno\RdapClient\Response\Data\EventAction;
use Jalno\RdapClient\Response\Data\EventActor;
use Jalno\RdapClient\Response\Data\EventDate;
use Jalno\RdapClient\Response\Data\Links;

class EventsCollection extends AbstractRdapResponseDataRecursiveArrayEmptyName
{
    protected array $allowedKeys = [
        'eventAction', // required
        'eventActor',
        'eventDate', // required
        'links',
    ];

    public function __construct(EventActor|EventAction|EventDate|Links ...$data)
    {
        $this->values = [
            'eventAction' => null,
            'eventActor' => null,
            'eventDate' => null,
            'links' => null,
        ];
        foreach ($data as $action) {
            $this->values[$action->getName()] = $action;
        }
        foreach ($this->values as $key => $value) {
            // skip required
            if ($value || $key === 'eventAction' || $key === 'eventDate') {
                continue;
            }
            unset($this->values[$key]);
        }
    }

    public function getAction() : ?EventAction
    {
        return $this->values['eventAction']??null;
    }

    public function getActor() : ?EventActor
    {
        return $this->values['eventActor']??null;
    }

    public function getDate() : ?EventDate
    {
        return $this->values['eventDate']??null;
    }

    public function getLinks() : ?Links
    {
        return $this->values['links']??null;
    }
}
