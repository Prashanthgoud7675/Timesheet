<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Companies extends Model
{
    use HasFactory;

    protected $table = "companies";

    protected $fillable=[

         'Company_Code', 'Company_Name','Company_Address','Next_Check_Date','Status'

    ];

}
