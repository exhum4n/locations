<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Models;

use Exhum4n\Components\Models\AbstractModel;

/**
 * Class Currency
 *
 * @property int id
 * @property string name
 * @property string code
 * @property string symbol
 */
class Currency extends AbstractModel
{
    /**
     * @var string
     */
    protected $table = 'locations.currencies';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
        'symbol',
    ];
}
