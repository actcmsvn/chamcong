<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hr_employee extends Model
{
    use HasFactory;
    protected $fillable = ['emp_username', 'emp_firstname', 'emp_lastname', 'emp_phone', 'emp_email', 'emp_birthday', 'emp_address', 'emp_gender'];
}
