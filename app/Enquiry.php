<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $table = 'enquiries';

    public $primarykey ='id';

    public $timestamps =true;

    protected $fillable = [
        'fullname', 'email','address', 'telephone', 'enquiry_type','description',
    ];

}
