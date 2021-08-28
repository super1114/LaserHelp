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
    protected $appends = ['difftime', 'user'];
    
    public function getDifftimeAttribute()
    {
        //dd(Carbon::now('EST'));
        return str_replace("before","ago",$this->created_at->diffForHumans(Carbon\Carbon::now("EST"), false));
    }
    public function getUserAttribute()
    {
        return User::find($this->user_id);
    }
}
