<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klasemen extends Model
{
    protected $table = 'klasemen';
    protected $fillable = ['id_tim','poin'];


    public function tim()
    {
        return $this->belongsTo(Tim::class,'id_tim');
    }

}
