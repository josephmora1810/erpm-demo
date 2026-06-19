<?php

namespace App\Models;

use App\Enum\TravelStatus;
use Illuminate\Database\Eloquent\Model;

class TravelRequest extends Model
{
    protected $fillable = ['employee_id','destination','purpose','estimated_amount','status'];
    
    protected $casts = [
        'status' => TravelStatus::class,
    ];
    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
