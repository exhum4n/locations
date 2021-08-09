<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Services;

use Exhum4n\Locations\Models\Timezone;
use Exhum4n\Locations\Repositories\TimezoneRepository;
use Exhum4n\Whois\Client;
use Exhum4n\Whois\Exceptions\RequestException;

class LocationService
{
    /**
     * @var TimezoneRepository
     */
    protected $timezones;

    /**
     * @var Client
     */
    protected $whois;

    /**
     * LocationService constructor.
     *
     * @param Client $client
     */
    public function __construct(Client $client)
    {
        $this->timezones = app(TimezoneRepository::class);

        $this->whois = $client;
    }

    /**
     * @param string $ip
     *
     * @return Timezone
     */
    public function getTimezoneByIp(string $ip): Timezone
    {
        try {
            $response = $this->whois->get($ip);

            $timezone = $response->timezone;
        } catch (RequestException $exception) {
            $timezone = config('app.timezone');
        }

        return $this->timezones->getFirst([
            'name' => $timezone
        ]);
    }
}
