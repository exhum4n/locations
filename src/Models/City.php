<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Models;

use Exhum4n\Components\Models\AbstractModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class City
 *
 * @property int id
 * @property string name
 * @property int timezone_id
 * @property int region_id

 * @property Timezone timezone
 * @property Region region
 */
class City extends AbstractModel
{
    /**
     * @var string
     */
    protected $table = 'locations.cities';

    /**
     * @var string[]
     */
    protected $fillable = [
        'region_id',
        'timezone_id',
        'name',
    ];

    /**
     * @return BelongsTo
     */
    public function timezone(): BelongsTo
    {
        return $this->belongsTo(Timezone::class);
    }

    /**
     * @return BelongsTo
     */
    public function region(): BelongsTo
    {
        return $this->belongsTo(Region::class);
    }
}
