<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MusicManage extends Model
{
    use HasFactory;
    protected $table = 'music_detail';
    protected $fillable = ['music_title','music_type','music_path'];
}
