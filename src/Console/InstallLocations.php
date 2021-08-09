<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Console;

use Exhum4n\Components\Console\Installer;
use Exhum4n\Locations\Database\Seeds\LocationsSeeder;
use Exhum4n\Locations\Providers\LocationsServiceProvider;

class InstallLocations extends Installer
{
    /**
     * @var string[]
     */
    protected $seeds = [
        LocationsSeeder::class
    ];

    /**
     * {@inheritDoc}
     */
    public function handle(): void
    {
        parent::handle();

        $this->call('vendor:publish', [
            '--provider' => LocationsServiceProvider::class
        ]);
    }

    protected function getSignature(): string
    {
        return 'locations:install';
    }
}
