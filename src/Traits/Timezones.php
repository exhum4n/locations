<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Traits;

use Exhum4n\Locations\Models\Timezone;
use Exhum4n\Locations\Repositories\TimezoneRepository;

trait Timezones
{
    /**
     * @param string $name
     *
     * @return Timezone|null
     */
    public function getTimezoneByName(string $name): ?Timezone
    {
        return app(TimezoneRepository::class)
            ->getByName($name);
    }
}
