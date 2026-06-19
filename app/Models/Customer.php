<?php

namespace App\Models;

use App\Enum\DocumentType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Override;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = ['name','document_type','document_number','email','phone'];

    protected $casts = [
        'document_type' => DocumentType::class,
    ];

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }
}
