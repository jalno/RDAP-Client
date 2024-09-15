<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Definitions;

use Jalno\RdapClient\Response\Data\EndAutNum;
use Jalno\RdapClient\Response\Data\Port43;
use Jalno\RdapClient\Response\Data\StartAutNum;

class AsnDefinition extends AbstractResponseDefinition
{
    protected ?Port43 $port43 = null;

    protected ?StartAutNum $startAutnum = null;

    protected ?EndAutNum $endAutnum = null;

    public function getPort43(): ?Port43
    {
        return $this->port43;
    }

    public function getStartAutnum(): ?StartAutNum
    {
        return $this->startAutnum;
    }

    public function getEndAutnum(): ?EndAutNum
    {
        return $this->endAutnum;
    }
}
