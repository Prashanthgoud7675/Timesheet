<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employeeform extends Model
{
    use HasFactory;

    protected $table='employeeforms';

    protected $fillable=[


        'first', 'last','father','dob','gender','aadhar','pan','flatno','locality','city','state','pincode','building','area','currentcity','currentstate','currentstate','currentpincode','mobile','alternate','email',



    ];
}
