<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;
    protected $fillable = ['employee_id','period','gross_amount','deductions','net_amount'];
    public function employee() {
        return $this->belongsTo(Employee::class);
    }
}
