<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Traits;

use Exhum4n\Locations\Models\Country;
use Exhum4n\Locations\Repositories\CountryRepository;

trait Countries
{
    /**
     * @param string $name
     *
     * @return Country|null
     */
    public function getCountryByName(string $name): ?Country
    {
        return app(CountryRepository::class)->getFirst([
            'name' => $name,
        ]);
    }
}
