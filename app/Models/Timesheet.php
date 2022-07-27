<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;

    protected $table = "timesheets";

    protected $fillable = ['empid', 'Date', 'Regular', 'Overtime', 'Sick', 'Vacation', 'Holiday', 'Unpaid', 'other', 'Total', 'TotalHours'];

    protected $uniqueKey = 'empid';

    public $incrementing = false;

    protected $keyType = 'string';
    public function user()
    {
        return $this->belongsTo('\App\Models\User', 'empid', 'empid');
    }
}
