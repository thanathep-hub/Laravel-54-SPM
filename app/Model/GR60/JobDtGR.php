<?php

namespace App\Model\GR60;

use Illuminate\Database\Eloquent\Model;

class JobDtGR extends Model
{
    protected $table = 'vSeasonProduce';
    protected $fillable = ['SeasonName'];
    //protected $primaryKey = 'idJob';
    public $timestamps = false;
}
