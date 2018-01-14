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
    /*
      public function getNameAttribute($value)
      {
        return $value;
      }
    */
}
