<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Models;

use Exhum4n\Components\Models\AbstractModel;

/**
 * Class Timezone
 *
 * @property int id
 * @property string name
 * @property string description
 */
class Timezone extends AbstractModel
{
    /**
     * @var string
     */
    protected $table = 'locations.timezones';

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'description',
    ];
}
