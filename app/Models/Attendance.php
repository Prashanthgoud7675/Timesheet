<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    use HasFactory;

    protected $table = "timesheets";

    protected $fillable = ['Date','Regular','Overtime','Sick','Vacation','Holiday','Unpaid','other','Total','TotalHours'];
}
