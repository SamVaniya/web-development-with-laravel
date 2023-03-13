<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class YogaManage extends Model
{
    use HasFactory;
    protected $table = 'yoga_detail';
    protected $fillable = ['yoga_name','yoga_tutorial_path'];
}
