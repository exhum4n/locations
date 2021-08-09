<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Repositories;

use Exhum4n\Components\Repositories\AbstractRepository;
use Exhum4n\Locations\Models\Currency;

class CurrencyRepository extends AbstractRepository
{
    /**
     * @return string
     */
    protected function getModel(): string
    {
        return Currency::class;
    }
}
