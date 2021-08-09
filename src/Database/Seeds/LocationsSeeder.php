<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Database\Seeds;

use Illuminate\Database\Seeder;

class LocationsSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            TimezoneSeeder::class,
            CurrencySeeder::class,
            CountrySeeder::class,
            RegionSeeder::class,
        ]);
    }
}
