<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Traits;

use Exhum4n\Locations\Models\City;
use Exhum4n\Locations\Repositories\CityRepository;

trait Cities
{
    /**
     * @param string $name
     *
     * @return City|null
     */
    public function getCityByName(string $name): ?City
    {
        return app(CityRepository::class)->getFirst([
            'name' => $name,
        ]);
    }
}
