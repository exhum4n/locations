<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Database\Seeds;

use Exhum4n\Components\Database\Seeds\AbstractSeeder;
use Exhum4n\Locations\Repositories\CurrencyRepository;

class CurrencySeeder extends AbstractSeeder
{
    /**
     * @return string[][]
     */
    protected function getRecords(): array
    {
        return [
            [
                'name' => 'Russian ruble',
                'code' => 'RUB',
                'symbol' => '₽',
            ]
        ];
    }

    /**
     * @return string
     */
    protected function getRepository(): string
    {
        return CurrencyRepository::class;
    }
}
