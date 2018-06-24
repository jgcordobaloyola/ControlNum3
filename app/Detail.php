<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $with=['usuario'];
    protected $hidden=['fk_usuario_id'];
    
    public function usuario(){
        return $this->hasMany('App\Usuario','id','fk_usuario_id');
    }
    
}
