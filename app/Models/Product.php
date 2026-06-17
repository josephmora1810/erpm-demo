<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    protected $fillable = [
        'name',
        'warehouse_id',
        'name',
        'sku',
        'price',
        'stock'
    ];

    public function warehouse() : BelongsTo
    {
        return $this->belongsTo(Warehouse::class);
    }
}
