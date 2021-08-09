<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Database\Seeds;

use Exhum4n\Components\Database\Seeds\AbstractSeeder;
use Exhum4n\Locations\Repositories\TimezoneRepository;

class TimezoneSeeder extends AbstractSeeder
{
    /**
     * @return string[][]
     */
    protected function getRecords(): array
    {
        return [
            [
                'name' => 'Pacific/Midway',
                'description' => '(GMT-11:00) Midway Island',
            ],
            [
                'name' => 'US/Samoa',
                'description' => '(GMT-11:00) Samoa',
            ],
            [
                'name' => 'US/Hawaii',
                'description' => '(GMT-10:00) Hawaii',
            ],
            [
                'name' => 'US/Alaska',
                'description' => '(GMT-09:00) Alaska',
            ],
            [
                'name' => 'US/Pacific',
                'description' => '(GMT-08:00) Pacific Time (US &amp; Canada)',
            ],
            [
                'name' => 'America/Tijuana',
                'description' => '(GMT-08:00) Tijuana',
            ],
            [
                'name' => 'US/Arizona',
                'description' => '(GMT-07:00) Arizona',
            ],
            [
                'name' => 'US/Mountain',
                'description' => '(GMT-07:00) Mountain Time (US &amp; Canada)',
            ],
            [
                'name' => 'America/Chihuahua',
                'description' => '(GMT-07:00) Chihuahua',
            ],
            [
                'name' => 'America/Mazatlan',
                'description' => '(GMT-07:00) Mazatlan',
            ],
            [
                'name' => 'America/Mexico_City',
                'description' => '(GMT-06:00) Mexico City',
            ],
            [
                'name' => 'America/Monterrey',
                'description' => '(GMT-06:00) Monterrey',
            ],
            [
                'name' => 'Canada/Saskatchewan',
                'description' => '(GMT-06:00) Saskatchewan',
            ],
            [
                'name' => 'US/Central',
                'description' => '(GMT-06:00) Central Time (US &amp; Canada)',
            ],
            [
                'name' => 'US/Eastern',
                'description' => '(GMT-05:00) Eastern Time (US &amp; Canada)',
            ],
            [
                'name' => 'US/East-Indiana',
                'description' => '(GMT-05:00) Indiana (East)',
            ],
            [
                'name' => 'America/Bogota',
                'description' => '(GMT-05:00) Bogota',
            ],
            [
                'name' => 'America/Lima',
                'description' => '(GMT-05:00) Lima',
            ],
            [
                'name' => 'America/Caracas',
                'description' => '(GMT-04:30) Caracas',
            ],
            [
                'name' => 'Canada/Atlantic',
                'description' => '(GMT-04:00) Atlantic Time (Canada)',
            ],
            [
                'name' => 'America/La_Paz',
                'description' => '(GMT-04:00) La Paz',
            ],
            [
                'name' => 'America/Santiago',
                'description' => '(GMT-04:00) Santiago',
            ],
            [
                'name' => 'Canada/Newfoundland',
                'description' => '(GMT-03:30) Newfoundland',
            ],
            [
                'name' => 'America/Buenos_Aires',
                'description' => '(GMT-03:00) Buenos Aires',
            ],
            [
                'name' => 'Greenland',
                'description' => '(GMT-03:00) Greenland',
            ],
            [
                'name' => 'Atlantic/Stanley',
                'description' => '(GMT-02:00) Stanley',
            ],
            [
                'name' => 'Atlantic/Azores',
                'description' => '(GMT-01:00) Azores',
            ],
            [
                'name' => 'Atlantic/Cape_Verde',
                'description' => '(GMT-01:00) Cape Verde Is.',
            ],
            [
                'name' => 'Africa/Casablanca',
                'description' => '(GMT) Casablanca',
            ],
            [
                'name' => 'Europe/Dublin',
                'description' => '(GMT) Dublin',
            ],
            [
                'name' => 'Europe/Lisbon',
                'description' => '(GMT) Lisbon',
            ],
            [
                'name' => 'Europe/London',
                'description' => '(GMT) London',
            ],
            [
                'name' => 'Africa/Monrovia',
                'description' => '(GMT) Monrovia',
            ],
            [
                'name' => 'Europe/Amsterdam',
                'description' => '(GMT+01:00) Amsterdam',
            ],
            [
                'name' => 'Europe/Belgrade',
                'description' => '(GMT+01:00) Belgrade',
            ],
            [
                'name' => 'Europe/Berlin',
                'description' => '(GMT+01:00) Berlin',
            ],
            [
                'name' => 'Europe/Bratislava',
                'description' => '(GMT+01:00) Bratislava',
            ],
            [
                'name' => 'Europe/Brussels',
                'description' => '(GMT+01:00) Brussels',
            ],
            [
                'name' => 'Europe/Budapest',
                'description' => '(GMT+01:00) Budapest',
            ],
            [
                'name' => 'Europe/Copenhagen',
                'description' => '(GMT+01:00) Copenhagen',
            ],
            [
                'name' => 'Europe/Ljubljana',
                'description' => '(GMT+01:00) Ljubljana',
            ],
            [
                'name' => 'Europe/Madrid',
                'description' => '(GMT+01:00) Madrid',
            ],
            [
                'name' => 'Europe/Paris',
                'description' => '(GMT+01:00) Paris',
            ],
            [
                'name' => 'Europe/Prague',
                'description' => '(GMT+01:00) Prague',
            ],
            [
                'name' => 'Europe/Rome',
                'description' => '(GMT+01:00) Rome',
            ],
            [
                'name' => 'Europe/Sarajevo',
                'description' => '(GMT+01:00) Sarajevo',
            ],
            [
                'name' => 'Europe/Skopje',
                'description' => '(GMT+01:00) Skopje',
            ],
            [
                'name' => 'Europe/Stockholm',
                'description' => '(GMT+01:00) Stockholm',
            ],
            [
                'name' => 'Europe/Vienna',
                'description' => '(GMT+01:00) Vienna',
            ],
            [
                'name' => 'Europe/Warsaw',
                'description' => '(GMT+01:00) Warsaw',
            ],
            [
                'name' => 'Europe/Zagreb',
                'description' => '(GMT+01:00) Zagreb',
            ],
            [
                'name' => 'Europe/Athens',
                'description' => '(GMT+02:00) Athens',
            ],
            [
                'name' => 'Europe/Bucharest',
                'description' => '(GMT+02:00) Bucharest',
            ],
            [
                'name' => 'Africa/Cairo',
                'description' => '(GMT+02:00) Cairo',
            ],
            [
                'name' => 'Africa/Harare',
                'description' => '(GMT+02:00) Harare',
            ],
            [
                'name' => 'Europe/Helsinki',
                'description' => '(GMT+02:00) Helsinki',
            ],
            [
                'name' => 'Europe/Istanbul',
                'description' => '(GMT+02:00) Istanbul',
            ],
            [
                'name' => 'Asia/Jerusalem',
                'description' => '(GMT+02:00) Jerusalem',
            ],
            [
                'name' => 'Europe/Kiev',
                'description' => '(GMT+02:00) Kyiv',
            ],
            [
                'name' => 'Europe/Minsk',
                'description' => '(GMT+02:00) Minsk',
            ],
            [
                'name' => 'Europe/Riga',
                'description' => '(GMT+02:00) Riga',
            ],
            [
                'name' => 'Europe/Sofia',
                'description' => '(GMT+02:00) Sofia',
            ],
            [
                'name' => 'Europe/Tallinn',
                'description' => '(GMT+02:00) Tallinn',
            ],
            [
                'name' => 'Europe/Vilnius',
                'description' => '(GMT+02:00) Vilnius',
            ],
            [
                'name' => 'Asia/Baghdad',
                'description' => '(GMT+03:00) Baghdad',
            ],
            [
                'name' => 'Asia/Kuwait',
                'description' => '(GMT+03:00) Kuwait',
            ],
            [
                'name' => 'Africa/Nairobi',
                'description' => '(GMT+03:00) Nairobi',
            ],
            [
                'name' => 'Asia/Riyadh',
                'description' => '(GMT+03:00) Riyadh',
            ],
            [
                'name' => 'Europe/Moscow',
                'description' => '(GMT+03:00) Moscow',
            ],
            [
                'name' => 'Asia/Tehran',
                'description' => '(GMT+03:30) Tehran',
            ],
            [
                'name' => 'Asia/Baku',
                'description' => '(GMT+04:00) Baku',
            ],
            [
                'name' => 'Europe/Volgograd',
                'description' => '(GMT+04:00) Volgograd',
            ],
            [
                'name' => 'Asia/Muscat',
                'description' => '(GMT+04:00) Muscat',
            ],
            [
                'name' => 'Asia/Tbilisi',
                'description' => '(GMT+04:00) Tbilisi',
            ],
            [
                'name' => 'Asia/Yerevan',
                'description' => '(GMT+04:00) Yerevan',
            ],
            [
                'name' => 'Asia/Kabul',
                'description' => '(GMT+04:30) Kabul',
            ],
            [
                'name' => 'Asia/Karachi',
                'description' => '(GMT+05:00) Karachi',
            ],
            [
                'name' => 'Asia/Tashkent',
                'description' => '(GMT+05:00) Tashkent',
            ],
            [
                'name' => 'Asia/Kolkata',
                'description' => '(GMT+05:30) Kolkata',
            ],
            [
                'name' => 'Asia/Kathmandu',
                'description' => '(GMT+05:45) Kathmandu',
            ],
            [
                'name' => 'Asia/Yekaterinburg',
                'description' => '(GMT+06:00) Ekaterinburg',
            ],
            [
                'name' => 'Asia/Almaty',
                'description' => '(GMT+06:00) Almaty',
            ],
            [
                'name' => 'Asia/Dhaka',
                'description' => '(GMT+06:00) Dhaka',
            ],
            [
                'name' => 'Asia/Novosibirsk',
                'description' => '(GMT+07:00) Novosibirsk',
            ],
            [
                'name' => 'Asia/Bangkok',
                'description' => '(GMT+07:00) Bangkok',
            ],
            [
                'name' => 'Asia/Jakarta',
                'description' => '(GMT+07:00) Jakarta',
            ],
            [
                'name' => 'Asia/Krasnoyarsk',
                'description' => '(GMT+08:00) Krasnoyarsk',
            ],
            [
                'name' => 'Asia/Chongqing',
                'description' => '(GMT+08:00) Chongqing',
            ],
            [
                'name' => 'Asia/Hong_Kong',
                'description' => '(GMT+08:00) Hong Kong',
            ],
            [
                'name' => 'Asia/Kuala_Lumpur',
                'description' => '(GMT+08:00) Kuala Lumpur',
            ],
            [
                'name' => 'Australia/Perth',
                'description' => '(GMT+08:00) Perth',
            ],
            [
                'name' => 'Asia/Singapore',
                'description' => '(GMT+08:00) Singapore',
            ],
            [
                'name' => 'Asia/Taipei',
                'description' => '(GMT+08:00) Taipei',
            ],
            [
                'name' => 'Asia/Ulaanbaatar',
                'description' => '(GMT+08:00) Ulaan Bataar',
            ],
            [
                'name' => 'Asia/Urumqi',
                'description' => '(GMT+08:00) Urumqi',
            ],
            [
                'name' => 'Asia/Irkutsk',
                'description' => '(GMT+09:00) Irkutsk',
            ],
            [
                'name' => 'Asia/Seoul',
                'description' => '(GMT+09:00) Seoul',
            ],
            [
                'name' => 'Asia/Tokyo',
                'description' => '(GMT+09:00) Tokyo',
            ],
            [
                'name' => 'Australia/Adelaide',
                'description' => '(GMT+09:30) Adelaide',
            ],
            [
                'name' => 'Australia/Darwin',
                'description' => '(GMT+09:30) Darwin',
            ],
            [
                'name' => 'Asia/Yakutsk',
                'description' => '(GMT+10:00) Yakutsk',
            ],
            [
                'name' => 'Australia/Brisbane',
                'description' => '(GMT+10:00) Brisbane',
            ],
            [
                'name' => 'Australia/Canberra',
                'description' => '(GMT+10:00) Canberra',
            ],
            [
                'name' => 'Pacific/Guam',
                'description' => '(GMT+10:00) Guam',
            ],
            [
                'name' => 'Australia/Hobart',
                'description' => '(GMT+10:00) Hobart',
            ],
            [
                'name' => 'Australia/Melbourne',
                'description' => '(GMT+10:00) Melbourne',
            ],
            [
                'name' => 'Pacific/Port_Moresby',
                'description' => '(GMT+10:00) Port Moresby',
            ],
            [
                'name' => 'Australia/Sydney',
                'description' => '(GMT+10:00) Sydney',
            ],
            [
                'name' => 'Asia/Vladivostok',
                'description' => '(GMT+11:00) Vladivostok',
            ],
            [
                'name' => 'Asia/Magadan',
                'description' => '(GMT+12:00) Magadan',
            ],
            [
                'name' => 'Pacific/Auckland',
                'description' => '(GMT+12:00) Auckland',
            ],
            [
                'name' => 'Pacific/Fiji',
                'description' => '(GMT+12:00) Fiji',
            ],
        ];
    }

    /**
     * @return string
     */
    protected function getRepository(): string
    {
        return TimezoneRepository::class;
    }
}
