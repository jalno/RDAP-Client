<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractBooleanData;

class ZoneSigned extends AbstractBooleanData
{
    protected string $name = 'zoneSigned';

    public function isSigned() : bool
    {
        return $this->values;
    }
}
