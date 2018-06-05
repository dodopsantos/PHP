<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = ['nome_estado'];
    public function cities(){
        return $this->hasMany(City::class);
    }
}
