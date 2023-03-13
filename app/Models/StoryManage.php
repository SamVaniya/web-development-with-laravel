<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryManage extends Model
{
    use HasFactory;
    protected $table = 'story_detail';
    protected $fillable = ['story_name','story_type','story_path'];
}
