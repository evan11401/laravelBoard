<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use DB;

class boardModel extends Model
{
    /*
    protected $fillable = [
        'boardid','boardname','boardsex','boardsubject','boardtime','boardcontent'
    ];
     */
    protected $fillable = ['json'];
    protected $table = 'board';
    protected $primaryKey = 'boardid';
}
