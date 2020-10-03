<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
      'firstname','lastname','address','telephone','state','local_govt','nationality','status','religion','gender','qualification','institution','image_upload'
    ];
}
