<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Traits;

use Exhum4n\Locations\Models\Region;
use Exhum4n\Locations\Repositories\RegionRepository;

trait Regions
{
    /**
     * @param string $name
     *
     * @return Region|null
     */
    public function getRegionByName(string $name): ?Region
    {
        return app(RegionRepository::class)->getFirst([
            'name' => $name,
        ]);
    }
}
