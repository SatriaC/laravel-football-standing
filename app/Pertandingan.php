<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pertandingan extends Model
{
    //
    protected $table = 'pertandingan';
    protected $fillable = ['id_tim_home','id_tim_away', 'score_home', 'score_away'];
}
