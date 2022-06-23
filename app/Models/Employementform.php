<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employementform extends Model
{
    use HasFactory;

    protected $table = "employementforms";

    protected $fillable = ['workmobilenumber',
    'workemail', 'hireddate','employeeid','designation','department'];
}
