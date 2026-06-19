<?php

namespace App\Models;

use App\Enum\InvoiceType;
use App\Enum\Status;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    use HasFactory;
    protected $fillable = [
        'number',
        'invoice_type',
        'customer_id',
        'supplier_id',
        'total',
        'status'
    ];

    protected $casts = [
        'invoice_type' => InvoiceType::class,
        'status' => Status::class,
    ];

    //si una factura es de un cliente, es decir, si pertenece a una sale
    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    //si una factira es de un proveedor, es decir si es unpurchase
    public function supplier(): BelongsTo
    {
        return $this->belongsTo(Supplier::class);
    }
}
