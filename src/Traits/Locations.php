<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Traits;

use Exhum4n\Locations\Models\Timezone;
use Exhum4n\Locations\Services\LocationService;

trait Locations
{
    /**
     * @param string $ip
     *
     * @return Timezone
     */
    public function getTimezoneByIp(string $ip): Timezone
    {
        return app(LocationService::class)
            ->getTimezoneByIp($ip);
    }
}
