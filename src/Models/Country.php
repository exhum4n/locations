<?php

declare(strict_types=1);

namespace Exhum4n\Locations\Models;

use Exhum4n\Components\Models\AbstractModel;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * Class Country
 *
 * @property int id
 * @property string name
 * @property string code
 * @property int currency_id
 *
 * @property Currency currency
 */
class Country extends AbstractModel
{
    /**
     * @var string
     */
    protected $table = 'locations.countries';

    /**
     * @var array
     */
    protected $fillable = [
        'name',
        'code',
        'currency_id',
    ];

    /**
     * @return BelongsTo
     */
    public function currency(): BelongsTo
    {
        return $this->belongsTo(Currency::class);
    }
}
