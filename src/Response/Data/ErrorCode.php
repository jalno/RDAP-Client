<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataErrorCodeInterface;
use Jalno\RdapClient\Response\Data\Abstracts\AbstractIntegerData;

class ErrorCode extends AbstractIntegerData implements RdapResponseDataErrorCodeInterface
{
    protected string $name = 'errorCode';

    public function rootOnly(): bool
    {
        return true;
    }

    /**
     * Error code is 4xx & 5xx
     *
     * @return bool
     */
    public function isValid(): bool
    {
        return $this->values < 600
            && $this->values >= 400;
    }
}
