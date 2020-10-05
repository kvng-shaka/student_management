<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
	protected $table = 'students';

     public $primarykey ='id';

    public $timestamps =true;

      protected $fillable = [
        'fullname', 'gender','phone', 'address', 'course','marital','nationality','state','lga','religion','date_entry','name_parent','relation_ship', 'parent_address','tel_no','parent_occupation',
    ];

}












