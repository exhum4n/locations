<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Providers;

use Exhum4n\Components\Providers\AbstractProvider;
use Exhum4n\Locations\Console\InstallLocations;
use Exhum4n\Locations\Console\UninstallLocations;

class LocationsServiceProvider extends AbstractProvider
{
    /**
     * {@inheritDoc}
     */
    public function register(): void
    {
        $this->registerInstallCommands();
        $this->registerUninstallCommands();
    }

    /**
     * Register installation command.
     */
    protected function registerInstallCommands(): void
    {
        $this->registerCommand('exhum4n.locations.install', InstallLocations:: class);

        $this->commands('exhum4n.locations.install');
    }

    /**
     * Register uninstallation command.
     */
    protected function registerUninstallCommands(): void
    {
        $this->registerCommand('exhum4n.locations.uninstall', UninstallLocations::class);

        $this->commands('exhum4n.locations.uninstall');
    }
}
