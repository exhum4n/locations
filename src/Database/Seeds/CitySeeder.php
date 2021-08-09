<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Database\Seeds;

use Exhum4n\Components\Database\Seeds\AbstractSeeder;
use Exhum4n\Locations\Repositories\CityRepository;
use Exhum4n\Locations\Repositories\CountryRepository;
use Exhum4n\Locations\Traits\Currencies;
use Exhum4n\Locations\Traits\Regions;
use Exhum4n\Locations\Traits\Timezones;

class CitySeeder extends AbstractSeeder
{
    use Timezones;
    use Regions;

    /**
     * @return string[][]
     */
    protected function getRecords(): array
    {
        return [
            [
                'name' => 'Адыгейск',
                'region_id' => $this->getRegionByName('Республика Адыгея')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Майкоп',
                'region_id' => $this->getRegionByName('Республика Адыгея')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Горно-Алтайск',
                'region_id' => $this->getRegionByName('Республика Алтай')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Алейск',
                'region_id' => $this->getRegionByName('Алтайский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Барнаул',
                'region_id' => $this->getRegionByName('Алтайский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Белокуриха',
                'region_id' => $this->getRegionByName('Алтайский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Бийск',
                'region_id' => $this->getRegionByName('Алтайский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Горняк',
                'region_id' => $this->getRegionByName('Алтайский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Заринск',
                'region_id' => $this->getRegionByName('Алтайский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Змеиногорск',
                'region_id' => $this->getRegionByName('Алтайский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Камень-на-Оби',
                'region_id' => $this->getRegionByName('Алтайский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Новоалтайск',
                'region_id' => $this->getRegionByName('Алтайский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Рубцовск',
                'region_id' => $this->getRegionByName('Алтайский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Славгород',
                'region_id' => $this->getRegionByName('Алтайский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Яровое',
                'region_id' => $this->getRegionByName('Алтайский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Белогорск',
                'region_id' => $this->getRegionByName('Амурская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Благовещенск',
                'region_id' => $this->getRegionByName('Амурская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Завитинск',
                'region_id' => $this->getRegionByName('Амурская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Зея',
                'region_id' => $this->getRegionByName('Амурская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Райчихинск',
                'region_id' => $this->getRegionByName('Амурская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Свободный',
                'region_id' => $this->getRegionByName('Амурская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Сковородино',
                'region_id' => $this->getRegionByName('Амурская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Тында',
                'region_id' => $this->getRegionByName('Амурская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Циолковский',
                'region_id' => $this->getRegionByName('Амурская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Шимановск',
                'region_id' => $this->getRegionByName('Амурская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Архангельск',
                'region_id' => $this->getRegionByName('Архангельская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Вельск',
                'region_id' => $this->getRegionByName('Архангельская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Каргополь',
                'region_id' => $this->getRegionByName('Архангельская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Коряжма',
                'region_id' => $this->getRegionByName('Архангельская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Котлас',
                'region_id' => $this->getRegionByName('Архангельская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мезень',
                'region_id' => $this->getRegionByName('Архангельская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мирный',
                'region_id' => $this->getRegionByName('Архангельская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новодвинск',
                'region_id' => $this->getRegionByName('Архангельская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Няндома',
                'region_id' => $this->getRegionByName('Архангельская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Онега',
                'region_id' => $this->getRegionByName('Архангельская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Северодвинск',
                'region_id' => $this->getRegionByName('Архангельская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сольвычегодск',
                'region_id' => $this->getRegionByName('Архангельская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Шенкурск',
                'region_id' => $this->getRegionByName('Архангельская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Астрахань',
                'region_id' => $this->getRegionByName('Астраханская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Ахтубинск',
                'region_id' => $this->getRegionByName('Астраханская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Знаменск',
                'region_id' => $this->getRegionByName('Астраханская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Камызяк',
                'region_id' => $this->getRegionByName('Астраханская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Нариманов',
                'region_id' => $this->getRegionByName('Астраханская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Харабали',
                'region_id' => $this->getRegionByName('Астраханская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Агидель',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Баймак',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Белебей',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Белорецк',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Бирск',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Благовещенск',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Давлеканово',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Дюртюли',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Ишимбай',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Кумертау',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Межгорье',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Мелеуз',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Нефтекамск',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Октябрьский',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Салават',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Сибай',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Стерлитамак',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Туймазы',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Уфа',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Учалы',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Янаул',
                'region_id' => $this->getRegionByName('Республика Башкортостан')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Алексеевка',
                'region_id' => $this->getRegionByName('Белгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Белгород',
                'region_id' => $this->getRegionByName('Белгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Бирюч',
                'region_id' => $this->getRegionByName('Белгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Валуйки',
                'region_id' => $this->getRegionByName('Белгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Грайворон',
                'region_id' => $this->getRegionByName('Белгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Губкин',
                'region_id' => $this->getRegionByName('Белгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Короча',
                'region_id' => $this->getRegionByName('Белгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новый Оскол',
                'region_id' => $this->getRegionByName('Белгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Старый Оскол',
                'region_id' => $this->getRegionByName('Белгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Строитель',
                'region_id' => $this->getRegionByName('Белгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Шебекино',
                'region_id' => $this->getRegionByName('Белгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Брянск',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Дятьково',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Жуковка',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Злынка',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Карачев',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Клинцы',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мглин',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новозыбков',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Почеп',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Севск',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сельцо',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Стародуб',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сураж',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Трубчевск',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Унеча',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Фокино',
                'region_id' => $this->getRegionByName('Брянская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Бабушкин',
                'region_id' => $this->getRegionByName('Республика Бурятия')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Гусиноозёрск',
                'region_id' => $this->getRegionByName('Республика Бурятия')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Закаменск',
                'region_id' => $this->getRegionByName('Республика Бурятия')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Кяхта',
                'region_id' => $this->getRegionByName('Республика Бурятия')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Северобайкальск',
                'region_id' => $this->getRegionByName('Республика Бурятия')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Улан-Удэ',
                'region_id' => $this->getRegionByName('Республика Бурятия')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Александров',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Владимир',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Вязники',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Гороховец',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Гусь-Хрустальный',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Камешково',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Карабаново',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Киржач',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ковров',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кольчугино',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Костерёво',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Курлово',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лакинск',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Меленки',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Муром',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Петушки',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Покров',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Радужный',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Собинка',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Струнино',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Судогда',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Суздаль',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Юрьев-Польский',
                'region_id' => $this->getRegionByName('Владимирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Волгоград',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Волжский',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Дубовка',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Жирновск',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Калач-на-Дону',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Камышин',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Котельниково',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Котово',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Краснослободск',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ленинск',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Михайловка',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Николаевск',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новоаннинский',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Палласовка',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Петров Вал',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Серафимович',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Суровикино',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Урюпинск',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Фролово',
                'region_id' => $this->getRegionByName('Волгоградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Бабаево',
                'region_id' => $this->getRegionByName('Вологодская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Белозерск',
                'region_id' => $this->getRegionByName('Вологодская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Великий Устюг',
                'region_id' => $this->getRegionByName('Вологодская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Вологда',
                'region_id' => $this->getRegionByName('Вологодская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Вытегра',
                'region_id' => $this->getRegionByName('Вологодская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Грязовец',
                'region_id' => $this->getRegionByName('Вологодская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кадников',
                'region_id' => $this->getRegionByName('Вологодская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кириллов',
                'region_id' => $this->getRegionByName('Вологодская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Красавино',
                'region_id' => $this->getRegionByName('Вологодская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Никольск',
                'region_id' => $this->getRegionByName('Вологодская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сокол',
                'region_id' => $this->getRegionByName('Вологодская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Тотьма',
                'region_id' => $this->getRegionByName('Вологодская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Устюжна',
                'region_id' => $this->getRegionByName('Вологодская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Харовск',
                'region_id' => $this->getRegionByName('Вологодская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Череповец',
                'region_id' => $this->getRegionByName('Вологодская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Бобров',
                'region_id' => $this->getRegionByName('Воронежская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Богучар',
                'region_id' => $this->getRegionByName('Воронежская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Борисоглебск',
                'region_id' => $this->getRegionByName('Воронежская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Бутурлиновка',
                'region_id' => $this->getRegionByName('Воронежская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Воронеж',
                'region_id' => $this->getRegionByName('Воронежская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Калач',
                'region_id' => $this->getRegionByName('Воронежская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лиски',
                'region_id' => $this->getRegionByName('Воронежская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Нововоронеж',
                'region_id' => $this->getRegionByName('Воронежская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новохопёрск',
                'region_id' => $this->getRegionByName('Воронежская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Острогожск',
                'region_id' => $this->getRegionByName('Воронежская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Павловск',
                'region_id' => $this->getRegionByName('Воронежская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Поворино',
                'region_id' => $this->getRegionByName('Воронежская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Россошь',
                'region_id' => $this->getRegionByName('Воронежская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Семилуки',
                'region_id' => $this->getRegionByName('Воронежская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Эртиль',
                'region_id' => $this->getRegionByName('Воронежская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Буйнакск',
                'region_id' => $this->getRegionByName('Республика Дагестан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Дагестанские Огни',
                'region_id' => $this->getRegionByName('Республика Дагестан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Дербент',
                'region_id' => $this->getRegionByName('Республика Дагестан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Избербаш',
                'region_id' => $this->getRegionByName('Республика Дагестан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Каспийск',
                'region_id' => $this->getRegionByName('Республика Дагестан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кизилюрт',
                'region_id' => $this->getRegionByName('Республика Дагестан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кизляр',
                'region_id' => $this->getRegionByName('Республика Дагестан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Махачкала',
                'region_id' => $this->getRegionByName('Республика Дагестан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Хасавюрт',
                'region_id' => $this->getRegionByName('Республика Дагестан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Южно-Сухокумск',
                'region_id' => $this->getRegionByName('Республика Дагестан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Биробиджан',
                'region_id' => $this->getRegionByName('Еврейская автономная область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Облучье',
                'region_id' => $this->getRegionByName('Еврейская автономная область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Балей',
                'region_id' => $this->getRegionByName('Забайкальский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Борзя',
                'region_id' => $this->getRegionByName('Забайкальский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Краснокаменск',
                'region_id' => $this->getRegionByName('Забайкальский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Могоча',
                'region_id' => $this->getRegionByName('Забайкальский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Нерчинск',
                'region_id' => $this->getRegionByName('Забайкальский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Петровск-Забайкальский',
                'region_id' => $this->getRegionByName('Забайкальский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Сретенск',
                'region_id' => $this->getRegionByName('Забайкальский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Хилок',
                'region_id' => $this->getRegionByName('Забайкальский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Чита',
                'region_id' => $this->getRegionByName('Забайкальский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Шилка',
                'region_id' => $this->getRegionByName('Забайкальский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Вичуга',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Гаврилов Посад',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Заволжск',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Иваново',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кинешма',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Комсомольск',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кохма',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Наволоки',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Плёс',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Приволжск',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Пучеж',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Родники',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Тейково',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Фурманов',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Шуя',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Южа',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Юрьевец',
                'region_id' => $this->getRegionByName('Ивановская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Карабулак',
                'region_id' => $this->getRegionByName('Республика Ингушетия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Магас',
                'region_id' => $this->getRegionByName('Республика Ингушетия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Малгобек',
                'region_id' => $this->getRegionByName('Республика Ингушетия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Назрань',
                'region_id' => $this->getRegionByName('Республика Ингушетия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сунжа',
                'region_id' => $this->getRegionByName('Республика Ингушетия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Алзамай',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Ангарск',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Байкальск',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Бирюсинск',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Бодайбо',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Братск',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Вихоревка',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Железногорск-Илимский',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Зима',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Иркутск',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Киренск',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Нижнеудинск',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Саянск',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Свирск',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Слюдянка',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Тайшет',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Тулун',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Усолье-Сибирское',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Усть-Илимск',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Усть-Кут',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Черемхово',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Шелехов',
                'region_id' => $this->getRegionByName('Иркутская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Krasnoyarsk')->id,
            ],
            [
                'name' => 'Баксан',
                'region_id' => $this->getRegionByName('Кабардино-Балкарская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Майский',
                'region_id' => $this->getRegionByName('Кабардино-Балкарская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Нальчик',
                'region_id' => $this->getRegionByName('Кабардино-Балкарская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Нарткала',
                'region_id' => $this->getRegionByName('Кабардино-Балкарская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Прохладный',
                'region_id' => $this->getRegionByName('Кабардино-Балкарская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Терек',
                'region_id' => $this->getRegionByName('Кабардино-Балкарская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Тырныауз',
                'region_id' => $this->getRegionByName('Кабардино-Балкарская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Чегем',
                'region_id' => $this->getRegionByName('Кабардино-Балкарская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Багратионовск',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Балтийск',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Гвардейск',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Гурьевск',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Гусев',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Зеленоградск',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Калининград',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Краснознаменск',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Ладушкин',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Мамоново',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Неман',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Нестеров',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Озёрск',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Пионерский',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Полесск',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Правдинск',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Приморск',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Светлогорск',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Светлый',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Славск',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Советск',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Черняховск',
                'region_id' => $this->getRegionByName('Калининградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Minsk')->id,
            ],
            [
                'name' => 'Городовиковск',
                'region_id' => $this->getRegionByName('Республика Калмыкия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лагань',
                'region_id' => $this->getRegionByName('Республика Калмыкия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Элиста',
                'region_id' => $this->getRegionByName('Республика Калмыкия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Балабаново',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Белоусово',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Боровск',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ермолино',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Жиздра',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Жуков',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Калуга',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Киров',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Козельск',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кондрово',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кремёнки',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Людиново',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Малоярославец',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Медынь',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мещовск',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мосальск',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Обнинск',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сосенский',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Спас-Деменск',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сухиничи',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Таруса',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Юхнов',
                'region_id' => $this->getRegionByName('Калужская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Вилючинск',
                'region_id' => $this->getRegionByName('Камчатский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Magadan')->id,
            ],
            [
                'name' => 'Елизово',
                'region_id' => $this->getRegionByName('Камчатский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Magadan')->id,
            ],
            [
                'name' => 'Петропавловск-Камчатский',
                'region_id' => $this->getRegionByName('Камчатский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Magadan')->id,
            ],
            [
                'name' => 'Карачаевск',
                'region_id' => $this->getRegionByName('Карачаево-Черкесская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Теберда',
                'region_id' => $this->getRegionByName('Карачаево-Черкесская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Усть-Джегута',
                'region_id' => $this->getRegionByName('Карачаево-Черкесская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Черкесск',
                'region_id' => $this->getRegionByName('Карачаево-Черкесская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Беломорск',
                'region_id' => $this->getRegionByName('Республика Карелия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кемь',
                'region_id' => $this->getRegionByName('Республика Карелия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кондопога',
                'region_id' => $this->getRegionByName('Республика Карелия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Костомукша',
                'region_id' => $this->getRegionByName('Республика Карелия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лахденпохья',
                'region_id' => $this->getRegionByName('Республика Карелия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Медвежьегорск',
                'region_id' => $this->getRegionByName('Республика Карелия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Олонец',
                'region_id' => $this->getRegionByName('Республика Карелия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Петрозаводск',
                'region_id' => $this->getRegionByName('Республика Карелия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Питкяранта',
                'region_id' => $this->getRegionByName('Республика Карелия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Пудож',
                'region_id' => $this->getRegionByName('Республика Карелия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сегежа',
                'region_id' => $this->getRegionByName('Республика Карелия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сортавала',
                'region_id' => $this->getRegionByName('Республика Карелия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Суоярви',
                'region_id' => $this->getRegionByName('Республика Карелия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Анжеро-Судженск',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Белово',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Берёзовский',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Гурьевск',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Калтан',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Кемерово',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Киселёвск',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Ленинск-Кузнецкий',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Мариинск',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Междуреченск',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Мыски',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Новокузнецк',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Осинники',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Полысаево',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Прокопьевск',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Салаир',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Тайга',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Таштагол',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Топки',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Юрга',
                'region_id' => $this->getRegionByName('Кемеровская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Белая Холуница',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Вятские Поляны',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Зуевка',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Киров',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кирово-Чепецк',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кирс',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Котельнич',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Луза',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Малмыж',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мураши',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Нолинск',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Омутнинск',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Орлов',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Слободской',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Советск',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сосновка',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Уржум',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Яранск',
                'region_id' => $this->getRegionByName('Кировская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Воркута',
                'region_id' => $this->getRegionByName('Республика Коми')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Вуктыл',
                'region_id' => $this->getRegionByName('Республика Коми')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Емва',
                'region_id' => $this->getRegionByName('Республика Коми')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Инта',
                'region_id' => $this->getRegionByName('Республика Коми')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Микунь',
                'region_id' => $this->getRegionByName('Республика Коми')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Печора',
                'region_id' => $this->getRegionByName('Республика Коми')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сосногорск',
                'region_id' => $this->getRegionByName('Республика Коми')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сыктывкар',
                'region_id' => $this->getRegionByName('Республика Коми')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Усинск',
                'region_id' => $this->getRegionByName('Республика Коми')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ухта',
                'region_id' => $this->getRegionByName('Республика Коми')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Буй',
                'region_id' => $this->getRegionByName('Костромская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Волгореченск',
                'region_id' => $this->getRegionByName('Костромская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Галич',
                'region_id' => $this->getRegionByName('Костромская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кологрив',
                'region_id' => $this->getRegionByName('Костромская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кострома',
                'region_id' => $this->getRegionByName('Костромская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Макарьев',
                'region_id' => $this->getRegionByName('Костромская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мантурово',
                'region_id' => $this->getRegionByName('Костромская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Нерехта',
                'region_id' => $this->getRegionByName('Костромская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Нея',
                'region_id' => $this->getRegionByName('Костромская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Солигалич',
                'region_id' => $this->getRegionByName('Костромская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Чухлома',
                'region_id' => $this->getRegionByName('Костромская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Шарья',
                'region_id' => $this->getRegionByName('Костромская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Абинск',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Анапа',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Апшеронск',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Армавир',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Белореченск',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Геленджик',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Горячий Ключ',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Гулькевичи',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ейск',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кореновск',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Краснодар',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кропоткин',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Крымск',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Курганинск',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лабинск',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новокубанск',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новороссийск',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Приморско-Ахтарск',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Славянск-на-Кубани',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сочи',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Темрюк',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Тимашёвск',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Тихорецк',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Туапсе',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Усть-Лабинск',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Хадыженск',
                'region_id' => $this->getRegionByName('Краснодарский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Артёмовск',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Ачинск',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Боготол',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Бородино',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Дивногорск',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Дудинка',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Енисейск',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Железногорск',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Заозёрный',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Зеленогорск',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Игарка',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Иланский',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Канск',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Кодинск',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Красноярск',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Лесосибирск',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Минусинск',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Назарово',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Норильск',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Сосновоборск',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Ужур',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Уяр',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Шарыпово',
                'region_id' => $this->getRegionByName('Красноярский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Алупка',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Алушта',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Армянск',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Бахчисарай',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Белогорск',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Джанкой',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Евпатория',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Керчь',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Красноперекопск',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Саки',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Симферополь',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Старый Крым',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Судак',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Феодосия',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Щёлкино',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ялта',
                'region_id' => $this->getRegionByName('Республика Крым')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Далматово',
                'region_id' => $this->getRegionByName('Курганская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Катайск',
                'region_id' => $this->getRegionByName('Курганская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Курган',
                'region_id' => $this->getRegionByName('Курганская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Куртамыш',
                'region_id' => $this->getRegionByName('Курганская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Макушино',
                'region_id' => $this->getRegionByName('Курганская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Петухово',
                'region_id' => $this->getRegionByName('Курганская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Шадринск',
                'region_id' => $this->getRegionByName('Курганская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Шумиха',
                'region_id' => $this->getRegionByName('Курганская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Щучье',
                'region_id' => $this->getRegionByName('Курганская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Дмитриев',
                'region_id' => $this->getRegionByName('Курская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Железногорск',
                'region_id' => $this->getRegionByName('Курская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Курск',
                'region_id' => $this->getRegionByName('Курская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Курчатов',
                'region_id' => $this->getRegionByName('Курская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Льгов',
                'region_id' => $this->getRegionByName('Курская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Обоянь',
                'region_id' => $this->getRegionByName('Курская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Рыльск',
                'region_id' => $this->getRegionByName('Курская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Суджа',
                'region_id' => $this->getRegionByName('Курская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Фатеж',
                'region_id' => $this->getRegionByName('Курская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Щигры',
                'region_id' => $this->getRegionByName('Курская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Бокситогорск',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Волосово',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Волхов',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Всеволожск',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Выборг',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Высоцк',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Гатчина',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ивангород',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Каменногорск',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кингисепп',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кириши',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кировск',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Коммунар',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кудрово',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лодейное Поле',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Луга',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Любань',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мурино',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Никольское',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новая Ладога',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Отрадное',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Пикалёво',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Подпорожье',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Приморск',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Приозерск',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Светогорск',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сертолово',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сланцы',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сосновый Бор',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сясьстрой',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Тихвин',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Тосно',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Шлиссельбург',
                'region_id' => $this->getRegionByName('Ленинградская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Грязи',
                'region_id' => $this->getRegionByName('Липецкая область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Данков',
                'region_id' => $this->getRegionByName('Липецкая область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Елец',
                'region_id' => $this->getRegionByName('Липецкая область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Задонск',
                'region_id' => $this->getRegionByName('Липецкая область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лебедянь',
                'region_id' => $this->getRegionByName('Липецкая область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Липецк',
                'region_id' => $this->getRegionByName('Липецкая область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Усмань',
                'region_id' => $this->getRegionByName('Липецкая область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Чаплыгин',
                'region_id' => $this->getRegionByName('Липецкая область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Магадан',
                'region_id' => $this->getRegionByName('Магаданская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Сусуман',
                'region_id' => $this->getRegionByName('Магаданская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Волжск',
                'region_id' => $this->getRegionByName('Марий Эл')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Звенигово',
                'region_id' => $this->getRegionByName('Марий Эл')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Йошкар-Ола',
                'region_id' => $this->getRegionByName('Марий Эл')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Козьмодемьянск',
                'region_id' => $this->getRegionByName('Марий Эл')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ардатов',
                'region_id' => $this->getRegionByName('Мордовия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Инсар',
                'region_id' => $this->getRegionByName('Мордовия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ковылкино',
                'region_id' => $this->getRegionByName('Мордовия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Краснослободск',
                'region_id' => $this->getRegionByName('Мордовия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Рузаевка',
                'region_id' => $this->getRegionByName('Мордовия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Саранск',
                'region_id' => $this->getRegionByName('Мордовия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Темников',
                'region_id' => $this->getRegionByName('Мордовия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Москва',
                'region_id' => $this->getRegionByName('Москва')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Апрелевка',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Балашиха',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Белоозёрский',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Бронницы',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Верея',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Видное',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Волоколамск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Воскресенск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Высоковск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Голицыно',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Дедовск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Дзержинский',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Дмитров',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Долгопрудный',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Домодедово',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Дрезна',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Дубна',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Егорьевск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Жуковский',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Зарайск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Звенигород',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ивантеевка',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Истра',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кашира',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Клин',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Коломна',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Королёв',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Котельники',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Красноармейск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Красногорск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Краснозаводск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Краснознаменск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кубинка',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Куровское',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ликино-Дулёво',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лобня',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лосино-Петровский',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Луховицы',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лыткарино',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Люберцы',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Можайск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мытищи',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Наро-Фоминск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ногинск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Одинцово',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Озёры',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Орехово-Зуево',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Павловский Посад',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Пересвет',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Подольск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Протвино',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Пушкино',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Пущино',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Раменское',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Реутов',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Рошаль',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Руза',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сергиев Посад',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Серпухов',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Солнечногорск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Старая Купавна',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ступино',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Талдом',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Фрязино',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Химки',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Хотьково',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Черноголовка',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Чехов',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Шатура',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Щёлково',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Электрогорск',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Электросталь',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Электроугли',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Яхрома',
                'region_id' => $this->getRegionByName('Московская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Апатиты',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Гаджиево',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Заозёрск',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Заполярный',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кандалакша',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кировск',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ковдор',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кола',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мончегорск',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мурманск',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Оленегорск',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Островной',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Полярные Зори',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Полярный',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Североморск',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Снежногорск',
                'region_id' => $this->getRegionByName('Мурманская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Нарьян-Мар',
                'region_id' => $this->getRegionByName('Ненецкий автономный округ')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Арзамас',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Балахна',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Богородск',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Бор',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ветлуга',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Володарск',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ворсма',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Выкса',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Горбатов',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Городец',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Дзержинск',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Заволжье',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Княгинино',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кстово',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кулебаки',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лукоянов',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лысково',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Навашино',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Нижний Новгород',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Павлово',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Первомайск',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Перевоз',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Саров',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Семёнов',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сергач',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Урень',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Чкаловск',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Шахунья',
                'region_id' => $this->getRegionByName('Нижегородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Боровичи',
                'region_id' => $this->getRegionByName('Новгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Валдай',
                'region_id' => $this->getRegionByName('Новгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Великий Новгород',
                'region_id' => $this->getRegionByName('Новгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Малая Вишера',
                'region_id' => $this->getRegionByName('Новгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Окуловка',
                'region_id' => $this->getRegionByName('Новгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Пестово',
                'region_id' => $this->getRegionByName('Новгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сольцы',
                'region_id' => $this->getRegionByName('Новгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Старая Русса',
                'region_id' => $this->getRegionByName('Новгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Холм',
                'region_id' => $this->getRegionByName('Новгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Чудово',
                'region_id' => $this->getRegionByName('Новгородская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Барабинск',
                'region_id' => $this->getRegionByName('Новосибирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Бердск',
                'region_id' => $this->getRegionByName('Новосибирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Болотное',
                'region_id' => $this->getRegionByName('Новосибирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Искитим',
                'region_id' => $this->getRegionByName('Новосибирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Карасук',
                'region_id' => $this->getRegionByName('Новосибирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Каргат',
                'region_id' => $this->getRegionByName('Новосибирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Куйбышев',
                'region_id' => $this->getRegionByName('Новосибирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Купино',
                'region_id' => $this->getRegionByName('Новосибирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Новосибирск',
                'region_id' => $this->getRegionByName('Новосибирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Обь',
                'region_id' => $this->getRegionByName('Новосибирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Татарск',
                'region_id' => $this->getRegionByName('Новосибирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Тогучин',
                'region_id' => $this->getRegionByName('Новосибирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Черепаново',
                'region_id' => $this->getRegionByName('Новосибирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Чулым',
                'region_id' => $this->getRegionByName('Новосибирская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Исилькуль',
                'region_id' => $this->getRegionByName('Омская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yekaterinburg')->id,
            ],
            [
                'name' => 'Калачинск',
                'region_id' => $this->getRegionByName('Омская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yekaterinburg')->id,
            ],
            [
                'name' => 'Называевск',
                'region_id' => $this->getRegionByName('Омская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yekaterinburg')->id,
            ],
            [
                'name' => 'Омск',
                'region_id' => $this->getRegionByName('Омская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yekaterinburg')->id,
            ],
            [
                'name' => 'Тара',
                'region_id' => $this->getRegionByName('Омская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yekaterinburg')->id,
            ],
            [
                'name' => 'Тюкалинск',
                'region_id' => $this->getRegionByName('Омская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yekaterinburg')->id,
            ],
            [
                'name' => 'Абдулино',
                'region_id' => $this->getRegionByName('Оренбургская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Бугуруслан',
                'region_id' => $this->getRegionByName('Оренбургская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Бузулук',
                'region_id' => $this->getRegionByName('Оренбургская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Гай',
                'region_id' => $this->getRegionByName('Оренбургская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Кувандык',
                'region_id' => $this->getRegionByName('Оренбургская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Медногорск',
                'region_id' => $this->getRegionByName('Оренбургская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Новотроицк',
                'region_id' => $this->getRegionByName('Оренбургская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Оренбург',
                'region_id' => $this->getRegionByName('Оренбургская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Орск',
                'region_id' => $this->getRegionByName('Оренбургская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Соль-Илецк',
                'region_id' => $this->getRegionByName('Оренбургская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Сорочинск',
                'region_id' => $this->getRegionByName('Оренбургская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Ясный',
                'region_id' => $this->getRegionByName('Оренбургская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Болхов',
                'region_id' => $this->getRegionByName('Орловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Дмитровск',
                'region_id' => $this->getRegionByName('Орловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ливны',
                'region_id' => $this->getRegionByName('Орловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Малоархангельск',
                'region_id' => $this->getRegionByName('Орловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мценск',
                'region_id' => $this->getRegionByName('Орловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новосиль',
                'region_id' => $this->getRegionByName('Орловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Орёл',
                'region_id' => $this->getRegionByName('Орловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Белинский',
                'region_id' => $this->getRegionByName('Пензенская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Городище',
                'region_id' => $this->getRegionByName('Пензенская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Заречный',
                'region_id' => $this->getRegionByName('Пензенская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Каменка',
                'region_id' => $this->getRegionByName('Пензенская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кузнецк',
                'region_id' => $this->getRegionByName('Пензенская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Нижний Ломов',
                'region_id' => $this->getRegionByName('Пензенская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Никольск',
                'region_id' => $this->getRegionByName('Пензенская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Пенза',
                'region_id' => $this->getRegionByName('Пензенская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сердобск',
                'region_id' => $this->getRegionByName('Пензенская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Спасск',
                'region_id' => $this->getRegionByName('Пензенская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сурск',
                'region_id' => $this->getRegionByName('Пензенская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Александровск',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Березники',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Верещагино',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Горнозаводск',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Гремячинск',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Губаха',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Добрянка',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Кизел',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Красновишерск',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Краснокамск',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Кудымкар',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Кунгур',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Лысьва',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Нытва',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Оса',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Оханск',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Очёр',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Пермь',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Соликамск',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Усолье',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Чайковский',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Чердынь',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Чёрмоз',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Чернушка',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Чусовой',
                'region_id' => $this->getRegionByName('Пермский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Арсеньев',
                'region_id' => $this->getRegionByName('Приморский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Артём',
                'region_id' => $this->getRegionByName('Приморский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Большой Камень',
                'region_id' => $this->getRegionByName('Приморский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Владивосток',
                'region_id' => $this->getRegionByName('Приморский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Дальнегорск',
                'region_id' => $this->getRegionByName('Приморский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Дальнереченск',
                'region_id' => $this->getRegionByName('Приморский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Лесозаводск',
                'region_id' => $this->getRegionByName('Приморский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Находка',
                'region_id' => $this->getRegionByName('Приморский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Партизанск',
                'region_id' => $this->getRegionByName('Приморский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Спасск-Дальний',
                'region_id' => $this->getRegionByName('Приморский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Уссурийск',
                'region_id' => $this->getRegionByName('Приморский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Фокино',
                'region_id' => $this->getRegionByName('Приморский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Великие Луки',
                'region_id' => $this->getRegionByName('Псковская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Гдов',
                'region_id' => $this->getRegionByName('Псковская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Дно',
                'region_id' => $this->getRegionByName('Псковская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Невель',
                'region_id' => $this->getRegionByName('Псковская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новоржев',
                'region_id' => $this->getRegionByName('Псковская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новосокольники',
                'region_id' => $this->getRegionByName('Псковская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Опочка',
                'region_id' => $this->getRegionByName('Псковская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Остров',
                'region_id' => $this->getRegionByName('Псковская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Печоры',
                'region_id' => $this->getRegionByName('Псковская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Порхов',
                'region_id' => $this->getRegionByName('Псковская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Псков',
                'region_id' => $this->getRegionByName('Псковская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Пустошка',
                'region_id' => $this->getRegionByName('Псковская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Пыталово',
                'region_id' => $this->getRegionByName('Псковская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Себеж',
                'region_id' => $this->getRegionByName('Псковская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Азов',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Аксай',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Батайск',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Белая Калитва',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Волгодонск',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Гуково',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Донецк',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Зверево',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Зерноград',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Каменск-Шахтинский',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Константиновск',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Красный Сулин',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Миллерово',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Морозовск',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новочеркасск',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новошахтинск',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Пролетарск',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ростов-на-Дону',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сальск',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Семикаракорск',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Таганрог',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Цимлянск',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Шахты',
                'region_id' => $this->getRegionByName('Ростовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Касимов',
                'region_id' => $this->getRegionByName('Рязанская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кораблино',
                'region_id' => $this->getRegionByName('Рязанская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Михайлов',
                'region_id' => $this->getRegionByName('Рязанская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новомичуринск',
                'region_id' => $this->getRegionByName('Рязанская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Рыбное',
                'region_id' => $this->getRegionByName('Рязанская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ряжск',
                'region_id' => $this->getRegionByName('Рязанская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Рязань',
                'region_id' => $this->getRegionByName('Рязанская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сасово',
                'region_id' => $this->getRegionByName('Рязанская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Скопин',
                'region_id' => $this->getRegionByName('Рязанская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Спас-Клепики',
                'region_id' => $this->getRegionByName('Рязанская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Спасск-Рязанский',
                'region_id' => $this->getRegionByName('Рязанская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Шацк',
                'region_id' => $this->getRegionByName('Рязанская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Жигулёвск',
                'region_id' => $this->getRegionByName('Самарская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Кинель',
                'region_id' => $this->getRegionByName('Самарская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Нефтегорск',
                'region_id' => $this->getRegionByName('Самарская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Новокуйбышевск',
                'region_id' => $this->getRegionByName('Самарская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Октябрьск',
                'region_id' => $this->getRegionByName('Самарская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Отрадный',
                'region_id' => $this->getRegionByName('Самарская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Похвистнево',
                'region_id' => $this->getRegionByName('Самарская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Самара',
                'region_id' => $this->getRegionByName('Самарская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Сызрань',
                'region_id' => $this->getRegionByName('Самарская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Тольятти',
                'region_id' => $this->getRegionByName('Самарская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Чапаевск',
                'region_id' => $this->getRegionByName('Самарская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Санкт-Петербург',
                'region_id' => $this->getRegionByName('Санкт-Петербург')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Аркадак',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Аткарск',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Балаково',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Балашов',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Вольск',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Ершов',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Калининск',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Красноармейск',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Красный Кут',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Маркс',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Новоузенск',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Петровск',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Пугачёв',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Ртищево',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Саратов',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Хвалынск',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Шиханы',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Энгельс',
                'region_id' => $this->getRegionByName('Саратовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Александровск-Сахалинский',
                'region_id' => $this->getRegionByName('Сахалинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Анива',
                'region_id' => $this->getRegionByName('Сахалинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Долинск',
                'region_id' => $this->getRegionByName('Сахалинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Корсаков',
                'region_id' => $this->getRegionByName('Сахалинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Курильск',
                'region_id' => $this->getRegionByName('Сахалинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Макаров',
                'region_id' => $this->getRegionByName('Сахалинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Невельск',
                'region_id' => $this->getRegionByName('Сахалинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Оха',
                'region_id' => $this->getRegionByName('Сахалинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Поронайск',
                'region_id' => $this->getRegionByName('Сахалинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Северо-Курильск',
                'region_id' => $this->getRegionByName('Сахалинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Томари',
                'region_id' => $this->getRegionByName('Сахалинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Углегорск',
                'region_id' => $this->getRegionByName('Сахалинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Холмск',
                'region_id' => $this->getRegionByName('Сахалинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Южно-Сахалинск',
                'region_id' => $this->getRegionByName('Сахалинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Алапаевск',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Арамиль',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Артёмовский',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Асбест',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Берёзовский',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Богданович',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Верхний Тагил',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Верхняя Пышма',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Верхняя Салда',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Верхняя Тура',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Верхотурье',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Волчанск',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Дегтярск',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Екатеринбург',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Заречный',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Ивдель',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Ирбит',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Каменск-Уральский',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Камышлов',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Карпинск',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Качканар',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Кировград',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Краснотурьинск',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Красноуральск',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Красноуфимск',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Кушва',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Лесной',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Михайловск',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Невьянск',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Нижние Серги',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Нижний Тагил',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Нижняя Салда',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Нижняя Тура',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Новая Ляля',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Новоуральск',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Первоуральск',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Полевской',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Ревда',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Реж',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Североуральск',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Серов',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Среднеуральск',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Сухой Лог',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Сысерть',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Тавда',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Талица',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Туринск',
                'region_id' => $this->getRegionByName('Свердловская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Севастополь',
                'region_id' => $this->getRegionByName('Севастополь')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Алагир',
                'region_id' => $this->getRegionByName('Республика Северная Осетия — Алания')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ардон',
                'region_id' => $this->getRegionByName('Республика Северная Осетия — Алания')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Беслан',
                'region_id' => $this->getRegionByName('Республика Северная Осетия — Алания')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Владикавказ',
                'region_id' => $this->getRegionByName('Республика Северная Осетия — Алания')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Дигора',
                'region_id' => $this->getRegionByName('Республика Северная Осетия — Алания')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Моздок',
                'region_id' => $this->getRegionByName('Республика Северная Осетия — Алания')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Велиж',
                'region_id' => $this->getRegionByName('Смоленская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Вязьма',
                'region_id' => $this->getRegionByName('Смоленская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Гагарин',
                'region_id' => $this->getRegionByName('Смоленская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Демидов',
                'region_id' => $this->getRegionByName('Смоленская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Десногорск',
                'region_id' => $this->getRegionByName('Смоленская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Дорогобуж',
                'region_id' => $this->getRegionByName('Смоленская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Духовщина',
                'region_id' => $this->getRegionByName('Смоленская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ельня',
                'region_id' => $this->getRegionByName('Смоленская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Починок',
                'region_id' => $this->getRegionByName('Смоленская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Рославль',
                'region_id' => $this->getRegionByName('Смоленская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Рудня',
                'region_id' => $this->getRegionByName('Смоленская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сафоново',
                'region_id' => $this->getRegionByName('Смоленская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Смоленск',
                'region_id' => $this->getRegionByName('Смоленская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Сычёвка',
                'region_id' => $this->getRegionByName('Смоленская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ярцево',
                'region_id' => $this->getRegionByName('Смоленская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Благодарный',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Будённовск',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Георгиевск',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ессентуки',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Железноводск',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Зеленокумск',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Изобильный',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ипатово',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кисловодск',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лермонтов',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Минеральные Воды',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Михайловск',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Невинномысск',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Нефтекумск',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новоалександровск',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новопавловск',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Пятигорск',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Светлоград',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ставрополь',
                'region_id' => $this->getRegionByName('Ставропольский край')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Жердевка',
                'region_id' => $this->getRegionByName('Тамбовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кирсанов',
                'region_id' => $this->getRegionByName('Тамбовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Котовск',
                'region_id' => $this->getRegionByName('Тамбовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мичуринск',
                'region_id' => $this->getRegionByName('Тамбовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Моршанск',
                'region_id' => $this->getRegionByName('Тамбовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Рассказово',
                'region_id' => $this->getRegionByName('Тамбовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Тамбов',
                'region_id' => $this->getRegionByName('Тамбовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Уварово',
                'region_id' => $this->getRegionByName('Тамбовская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Агрыз',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Азнакаево',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Альметьевск',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Арск',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Бавлы',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Болгар',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Бугульма',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Буинск',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Елабуга',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Заинск',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Зеленодольск',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Иннополис',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Казань',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кукмор',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лаишево',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лениногорск',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мамадыш',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Менделеевск',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мензелинск',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Набережные Челны',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Нижнекамск',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Нурлат',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Тетюши',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Чистополь',
                'region_id' => $this->getRegionByName('Республика Татарстан')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Андреаполь',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Бежецк',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Белый',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Бологое',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Весьегонск',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Вышний Волочёк',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Западная Двина',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Зубцов',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Калязин',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кашин',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кимры',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Конаково',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Красный Холм',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кувшиново',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Лихославль',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Нелидово',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Осташков',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ржев',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Старица',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Тверь',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Торжок',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Торопец',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Удомля',
                'region_id' => $this->getRegionByName('Тверская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Асино',
                'region_id' => $this->getRegionByName('Томская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Кедровый',
                'region_id' => $this->getRegionByName('Томская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Колпашево',
                'region_id' => $this->getRegionByName('Томская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Северск',
                'region_id' => $this->getRegionByName('Томская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Стрежевой',
                'region_id' => $this->getRegionByName('Томская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Томск',
                'region_id' => $this->getRegionByName('Томская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Алексин',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Белёв',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Богородицк',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Болохово',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Венёв',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Донской',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ефремов',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Кимовск',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Киреевск',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Липки',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новомосковск',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Плавск',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Советск',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Суворов',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Тула',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Узловая',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Чекалин',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Щёкино',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ясногорск',
                'region_id' => $this->getRegionByName('Тульская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ак-Довурак',
                'region_id' => $this->getRegionByName('Тыва')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Кызыл',
                'region_id' => $this->getRegionByName('Тыва')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Туран',
                'region_id' => $this->getRegionByName('Тыва')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Чадан',
                'region_id' => $this->getRegionByName('Тыва')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Шагонар',
                'region_id' => $this->getRegionByName('Тыва')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Заводоуковск',
                'region_id' => $this->getRegionByName('Тюменская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Ишим',
                'region_id' => $this->getRegionByName('Тюменская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Тобольск',
                'region_id' => $this->getRegionByName('Тюменская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Тюмень',
                'region_id' => $this->getRegionByName('Тюменская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Ялуторовск',
                'region_id' => $this->getRegionByName('Тюменская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Воткинск',
                'region_id' => $this->getRegionByName('Удмуртская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Глазов',
                'region_id' => $this->getRegionByName('Удмуртская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Ижевск',
                'region_id' => $this->getRegionByName('Удмуртская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Камбарка',
                'region_id' => $this->getRegionByName('Удмуртская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Можга',
                'region_id' => $this->getRegionByName('Удмуртская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Сарапул',
                'region_id' => $this->getRegionByName('Удмуртская Республика')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Барыш',
                'region_id' => $this->getRegionByName('Ульяновская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Димитровград',
                'region_id' => $this->getRegionByName('Ульяновская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Инза',
                'region_id' => $this->getRegionByName('Ульяновская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Новоульяновск',
                'region_id' => $this->getRegionByName('Ульяновская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Сенгилей',
                'region_id' => $this->getRegionByName('Ульяновская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Ульяновск',
                'region_id' => $this->getRegionByName('Ульяновская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Volgograd')->id,
            ],
            [
                'name' => 'Амурск',
                'region_id' => $this->getRegionByName('Хабаровский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Бикин',
                'region_id' => $this->getRegionByName('Хабаровский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Вяземский',
                'region_id' => $this->getRegionByName('Хабаровский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Комсомольск-на-Амуре',
                'region_id' => $this->getRegionByName('Хабаровский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Николаевск-на-Амуре',
                'region_id' => $this->getRegionByName('Хабаровский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Советская Гавань',
                'region_id' => $this->getRegionByName('Хабаровский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Хабаровск',
                'region_id' => $this->getRegionByName('Хабаровский край')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Абаза',
                'region_id' => $this->getRegionByName('Республика Хакасия')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Абакан',
                'region_id' => $this->getRegionByName('Республика Хакасия')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Саяногорск',
                'region_id' => $this->getRegionByName('Республика Хакасия')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Сорск',
                'region_id' => $this->getRegionByName('Республика Хакасия')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Черногорск',
                'region_id' => $this->getRegionByName('Республика Хакасия')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Novosibirsk')->id,
            ],
            [
                'name' => 'Белоярский',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Когалым',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Лангепас',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Лянтор',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Мегион',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Нефтеюганск',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Нижневартовск',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Нягань',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Покачи',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Пыть-Ях',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Радужный',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Советский',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Сургут',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Урай',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Ханты-Мансийск',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Югорск',
                'region_id' => $this->getRegionByName('Ханты-Мансийский автономный округ — Югра')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Аша',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Бакал',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Верхнеуральск',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Верхний Уфалей',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Еманжелинск',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Златоуст',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Карабаш',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Карталы',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Касли',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Катав-Ивановск',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Копейск',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Коркино',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => '	Куса',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Кыштым',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Магнитогорск',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Миасс',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Миньяр',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Нязепетровск',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Озёрск',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Пласт',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Сатка',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Сим',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Снежинск',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Трёхгорный',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Троицк',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Усть-Катав',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Чебаркуль',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Челябинск',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Южноуральск',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Юрюзань',
                'region_id' => $this->getRegionByName('Челябинская область')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Аргун',
                'region_id' => $this->getRegionByName('Чеченская Республика, Чечня')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Грозный',
                'region_id' => $this->getRegionByName('Чеченская Республика, Чечня')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Гудермес',
                'region_id' => $this->getRegionByName('Чеченская Республика, Чечня')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Курчалой',
                'region_id' => $this->getRegionByName('Чеченская Республика, Чечня')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Урус-Мартан',
                'region_id' => $this->getRegionByName('Чеченская Республика, Чечня')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Шали',
                'region_id' => $this->getRegionByName('Чукотский автономный округ')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Magadan')->id,
            ],
            [
                'name' => '	Алатырь',
                'region_id' => $this->getRegionByName('Чувашская республика — Чувашия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Канаш',
                'region_id' => $this->getRegionByName('Чувашская республика — Чувашия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Козловка',
                'region_id' => $this->getRegionByName('Чувашская республика — Чувашия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мариинский Посад',
                'region_id' => $this->getRegionByName('Чувашская республика — Чувашия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Новочебоксарск',
                'region_id' => $this->getRegionByName('Чувашская республика — Чувашия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Цивильск',
                'region_id' => $this->getRegionByName('Чувашская республика — Чувашия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Чебоксары',
                'region_id' => $this->getRegionByName('Чувашская республика — Чувашия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Шумерля',
                'region_id' => $this->getRegionByName('Чувашская республика — Чувашия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ядрин',
                'region_id' => $this->getRegionByName('Чувашская республика — Чувашия')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Анадырь',
                'region_id' => $this->getRegionByName('Чукотский автономный округ')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Magadan')->id,
            ],
            [
                'name' => 'Билибино',
                'region_id' => $this->getRegionByName('Чукотский автономный округ')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Magadan')->id,
            ],
            [
                'name' => 'Певек',
                'region_id' => $this->getRegionByName('Чукотский автономный округ')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Magadan')->id,
            ],
            [
                'name' => 'Алдан',
                'region_id' => $this->getRegionByName('Республика Саха (Якутия)')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Верхоянск',
                'region_id' => $this->getRegionByName('Республика Саха (Якутия)')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Yakutsk')->id,
            ],
            [
                'name' => 'Вилюйск',
                'region_id' => $this->getRegionByName('Республика Саха (Якутия)')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Ленск',
                'region_id' => $this->getRegionByName('Республика Саха (Якутия)')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Мирный',
                'region_id' => $this->getRegionByName('Республика Саха (Якутия)')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Нерюнгри',
                'region_id' => $this->getRegionByName('Республика Саха (Якутия)')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Нюрба',
                'region_id' => $this->getRegionByName('Республика Саха (Якутия)')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Олёкминск',
                'region_id' => $this->getRegionByName('Республика Саха (Якутия)')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Покровск',
                'region_id' => $this->getRegionByName('Республика Саха (Якутия)')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Среднеколымск',
                'region_id' => $this->getRegionByName('Республика Саха (Якутия)')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Vladivostok')->id,
            ],
            [
                'name' => 'Томмот',
                'region_id' => $this->getRegionByName('Республика Саха (Якутия)')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Удачный',
                'region_id' => $this->getRegionByName('Республика Саха (Якутия)')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Якутск',
                'region_id' => $this->getRegionByName('Республика Саха (Якутия)')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Irkutsk')->id,
            ],
            [
                'name' => 'Губкинский',
                'region_id' => $this->getRegionByName('Ямало-Ненецкий автономный округ')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Лабытнанги',
                'region_id' => $this->getRegionByName('Ямало-Ненецкий автономный округ')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Муравленко',
                'region_id' => $this->getRegionByName('Ямало-Ненецкий автономный округ')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Надым',
                'region_id' => $this->getRegionByName('Ямало-Ненецкий автономный округ')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Новый Уренгой',
                'region_id' => $this->getRegionByName('Ямало-Ненецкий автономный округ')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Ноябрьск',
                'region_id' => $this->getRegionByName('Ямало-Ненецкий автономный округ')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Салехард',
                'region_id' => $this->getRegionByName('Ямало-Ненецкий автономный округ')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Тарко-Сале',
                'region_id' => $this->getRegionByName('Ямало-Ненецкий автономный округ')->id,
                'timezone_id' => $this->getTimezoneByName('Asia/Tashkent')->id,
            ],
            [
                'name' => 'Гаврилов-Ям',
                'region_id' => $this->getRegionByName('Ярославская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Данилов',
                'region_id' => $this->getRegionByName('Ярославская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Любим',
                'region_id' => $this->getRegionByName('Ярославская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Мышкин',
                'region_id' => $this->getRegionByName('Ярославская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Переславль-Залесский',
                'region_id' => $this->getRegionByName('Ярославская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Пошехонье',
                'region_id' => $this->getRegionByName('Ярославская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ростов',
                'region_id' => $this->getRegionByName('Ярославская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Рыбинск',
                'region_id' => $this->getRegionByName('Ярославская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Тутаев',
                'region_id' => $this->getRegionByName('Ярославская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Углич',
                'region_id' => $this->getRegionByName('Ярославская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
            [
                'name' => 'Ярославль',
                'region_id' => $this->getRegionByName('Ярославская область')->id,
                'timezone_id' => $this->getTimezoneByName('Europe/Moscow')->id,
            ],
        ];
    }

    /**
     * @return string
     */
    protected function getRepository(): string
    {
        return CityRepository::class;
    }
}
