<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Repositories;

use Exhum4n\Components\Repositories\AbstractRepository;
use Exhum4n\Locations\Models\Timezone;
use Illuminate\Database\Eloquent\Model;

class TimezoneRepository extends AbstractRepository
{
    /**
     * @param string $name
     * @return Timezone|Model|null
     */
    public function getByName(string $name): ?Timezone
    {
        return $this->getFirst([
            'name' => $name,
        ]);
    }

    /**
     * @return string
     */
    protected function getModel(): string
    {
        return Timezone::class;
    }
}
