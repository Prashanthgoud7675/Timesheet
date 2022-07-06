<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Timesheet extends Model
{
    use HasFactory;

    protected $table = "timesheet";

    protected $fillable = ['regular',
    'overtime', 'sick','vacation','holiday','unpaid','other','total','sumtotal'];
}
