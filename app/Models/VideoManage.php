<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VideoManage extends Model
{
    use HasFactory;
    protected $table = 'video_detail';
    protected $fillable = ['video_title','video_type','video_path'];
}
