<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Database\Seeds;

use Exhum4n\Components\Database\Seeds\AbstractSeeder;
use Exhum4n\Locations\Repositories\RegionRepository;
use Exhum4n\Locations\Traits\Countries;

class RegionSeeder extends AbstractSeeder
{
    use Countries;

    /**
     * @return string[][]
     */
    protected function getRecords(): array
    {
        $russiaId = $this->getCountryByName('Russia')->id;

        return [
            [
                'name' => 'Алтайский край',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Алтайская республика',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Амурская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Архангельская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Астраханская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Белгородская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Брянская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Чеченская республика',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Челябинская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Чукотский АО',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Чувашия',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Дагестан',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Ингушетия',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Иркутская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Ивановская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Еврейская АО',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Кабардино-Балкария',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Калининградская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Калмыкия',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Калужская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Камчатский край',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Карачаево-Черкесия',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Карелия',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Кемеровская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Хабаровский край',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Ханты-Мансийский АО',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Кировская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Республика Коми',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Костромская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Краснодарский край',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Красноярский край',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Kurgan Oblast',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Курганская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Ленинградская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Липецкая область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Магаданская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Марий Эл',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Московская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Мурманская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Ненецкий АО',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Нижегородская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Новгородская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Новосибирская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Омская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Оренбургская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Орловская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Пензенская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Пермский край',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Приморский край',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Псковская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Республика Адыгея',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Республика Башкортостан',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Республика Бурятия',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Республика Хакасия',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Республика Мордовия',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Республика Северная Осетия — Алания',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Республика Татарстан',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Ростовская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Рязанская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Санкт-Петербург',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Республика Саха',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Сахалинская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Самарская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Саратовская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Смоленская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Ставропольский край',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Свердловская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Тамбовская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Томская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Тульская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Республика Тыва',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Тверская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Тюменская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Удмуртская Республика',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Ульяновская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Владимирская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Волгоградская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Волгоградская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Воронежская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Ямало-Ненецкий АО',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Ярославская область',
                'country_id' => $russiaId,
            ],
            [
                'name' => 'Забайкальский край',
                'country_id' => $russiaId,
            ],
        ];
    }

    /**
     * @return string
     */
    protected function getRepository(): string
    {
        return RegionRepository::class;
    }
}
