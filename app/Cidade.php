<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    //
    public function setFirstNameAttribute($value)
    {
        if($value === 'Beagá'){
            $this->attributes['nome'] = "belo horizonte";
        }
    }

}
