<?php

namespace App\Models;

use App\Enum\DocumentType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = ['name','document_type','document_number','position','base_salary'];

    protected $casts = [
        'document_type' => DocumentType::class,
    ];
    public function payrolls() {
        return $this->hasMany(Payroll::class);
    }

    public function travelRequests() {
        return $this->hasMany(TravelRequest::class);
    }
}
