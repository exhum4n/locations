<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Traits;

use Exhum4n\Locations\Models\Currency;
use Exhum4n\Locations\Repositories\CurrencyRepository;

trait Currencies
{
    /**
     * @param string $code
     *
     * @return Currency|null
     */
    public function getCurrencyByCode(string $code): ?Currency
    {
        return app(CurrencyRepository::class)->getFirst([
            'code' => $code,
        ]);
    }
}
