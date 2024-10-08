<?php
declare(strict_types=1);

namespace Jalno\RdapClient\Response\Data;

use Jalno\RdapClient\Response\Data\Abstracts\AbstractRdapResponseDataRecursiveArray;
use function array_values;

class Links extends AbstractRdapResponseDataRecursiveArray
{
    protected string $name = 'links';

    public function __construct(
        Link...$links
    ) {
        $this->values = array_values($links);
    }

    /**
     * @return array<Link>
     */
    public function getLinks() : array
    {
        return $this->values;
    }
}
