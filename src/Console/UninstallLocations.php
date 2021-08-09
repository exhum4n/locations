<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Console;

use Exhum4n\Components\Console\Uninstaller;

class UninstallLocations extends Uninstaller
{
    /**
     * @return string
     */
    protected function getSignature(): string
    {
        return 'locations:uninstall';
    }
}
