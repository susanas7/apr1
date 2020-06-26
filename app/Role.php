<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //metodo que relaciona a los modelos user y role
    public function users(){
      return $this->belongsToMany('App\User');
    }
}
