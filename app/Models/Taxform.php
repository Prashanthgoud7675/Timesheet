<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Taxform extends Model
{
    use HasFactory;

    protected $table = "taxforms";

    protected $fillable = ['pension','newpension','nsc','ppf','infrastructurebond','childreneducation','houseloan','insurancepremium','others','epfvoluntarypf','medicalinsuranceself','medicalinsuranceparents','medicalfordisable','medicalexpenditure'];
}
