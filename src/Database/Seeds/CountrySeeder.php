<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Database\Seeds;

use Exhum4n\Components\Database\Seeds\AbstractSeeder;
use Exhum4n\Locations\Repositories\CountryRepository;
use Exhum4n\Locations\Traits\Currencies;

class CountrySeeder extends AbstractSeeder
{
    use Currencies;

    /**
     * @return string[][]
     */
    protected function getRecords(): array
    {
        return [
            [
                'name' => 'Russia',
                'code' => 'RU',
                'currency_id' => $this->getCurrencyByCode('RUB')->id,
            ]
        ];
    }

    /**
     * @return string
     */
    protected function getRepository(): string
    {
        return CountryRepository::class;
    }
}
