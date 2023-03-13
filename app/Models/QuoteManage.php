<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuoteManage extends Model
{
    use HasFactory;
    protected $table = 'quote_detail';
    protected $fillable = ['quote'];
}
