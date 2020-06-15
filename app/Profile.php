<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = ['name','bio','image'];
    
    public function user()
    {
        return $this->belongsTo(User::class)->select(['id','username']);
    }

    public function getImageAttribute($value)
    {
        return "/storage/{$value}";
    }
}
