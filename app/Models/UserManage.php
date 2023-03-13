<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserManage extends Model
{
    use HasFactory;
    protected $table = 'user_detail';
    protected $fillable = ['user_name','user_dob','user_contact','user_email','user_hobbies'];
}
