<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  // for second way to Store :

    protected $fillable = [
      'title','content','user_id'
    ];

    // if you have a boolean parameter use Mutator "Setter" :

    /*
    public function setNameAttribute($value)
      {
        $this->arttributes['name'] = (boolean)($value);
      }
    */

    // Getters

      public function getShortContentAttribute()
      {
        return substr($this->content,0,random_int(60,150)).'...';
      }

      public function owner()
      {
        return $this->belongsTo(User::class,'user_id');
      }
      public function tags()
      {
        return $this->belongsToMany(Tag::class);
      }
}
