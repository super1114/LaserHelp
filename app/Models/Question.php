<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Question extends Model
{
    protected $fillable = [
        'loom',
        'question',
        'user_id',
        'attached_file',
        'categories'
    ];
}
