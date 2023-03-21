<?php

declare(strict_types=1);

namespace Isibia\BoltNetworks;

use Bolt\Extension\BaseExtension;

class Extension extends BaseExtension
{
    public function getName(): string
    {
        return 'Isibia Bolt Networks';
    }
}
