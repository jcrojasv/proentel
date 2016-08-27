<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //
    protected $fillable = ['name','display_name','description'];

   //establecemos las relacion de muchos a muchos con el modelo User, ya que un rol 
   //pueden tener varios usuarios y un usuario puede tener varios roles
   public function users(){
        return $this->belongsToMany('App\User');
    }
}
