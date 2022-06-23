<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payrollform extends Model
{
    use HasFactory;

    protected $table = "payrollforms";

    protected $fillable = ['ctc','uan','basicsalary','hra','conveyance','medicalallowance','specialallowance','professionaltax','tds','tdsonbonus','foodvouchers','epf','loandeductions','otherdeductions','esi','grosspay','netpay'];

    
}
