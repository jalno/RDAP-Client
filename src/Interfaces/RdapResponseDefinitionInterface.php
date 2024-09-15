<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Interfaces;

use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataConformanceDataInterface;
use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataConformanceInterface;
use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataErrorCodeInterface;
use Jalno\RdapClient\Interfaces\ResponseData\RdapResponseDataObjectDataClassNameInterface;
use JsonSerializable;
use Stringable;

interface RdapResponseDefinitionInterface extends Stringable, JsonSerializable
{
    public function getRdapConformance(): ?RdapResponseDataConformanceInterface;

    public function getRdapConformanceData(): ?RdapResponseDataConformanceDataInterface;

    public function getObjectClassName(): ?RdapResponseDataObjectDataClassNameInterface;

    public function getErrorCode(): ?RdapResponseDataErrorCodeInterface;

    public function getRelatedRequest(): ?RdapRequestInterface;
}
