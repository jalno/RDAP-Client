<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Traits;

use function is_array;

trait AllowedKeyDataTraits
{
    /**
     * @return ?array<string>
     */
    public function getAllowedKeys() : ?array
    {
        if (isset($this->allowedKeys) && is_array($this->allowedKeys)) {
            return $this->allowedKeys;
        }
        return null;
    }
}
