<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Carbon;

class Question extends Model
{
    protected $fillable = [
        'loom',
        'question',
        'user_id',
        'attached_file',
        'categories'
    ];
    public function diffTime() {
        return $this->created_at->diffForHumans(Carbon\Carbon::now(), false);
    }
}
