<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Models;

use Exhum4n\Components\Models\AbstractModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Region
 *
 * @property int id
 * @property string name
 * @property int country_id
 * @property Country country
 */
class Region extends AbstractModel
{
    /**
     * @var string
     */
    protected $table = 'locations.regions';

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'country_id',
    ];

    /**
     * @return BelongsTo
     */
    public function country(): BelongsTo
    {
        return $this->belongsTo(Country::class);
    }
}
