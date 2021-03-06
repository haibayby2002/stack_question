<?php

namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Question extends Model
{
    //fillable
    protected $fillable = [
        'title', 'body'
    ];

    //relationship
    public function user(){
        return $this->belongsTo(User::class);
    }

    //mutator
    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = trim($value);
        $this->attributes['slug'] = Str::slug($value);
    }
}
