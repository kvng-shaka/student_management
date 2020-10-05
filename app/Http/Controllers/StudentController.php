<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Student;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class StudentController extends Controller
{
    public function index()
    {
   return view("student.studentform");
    }

     public function store(Request $request)
     {

   /*     echo"<pre>";
 print_r($request->all());
echo "</pre>";
*/
        $this->validate($request, [
                'fullname' => 'required',
                'gender' => 'required',
                'phone' => 'required',
                'address' => 'required',
                'course' => 'required',
                'marital'=>'required',
                'nationality'=>'required',
                'state'=>'required',
                'lga'=>'required',
                'religion'=>'required',
                'date_entry'=>'required',
                'name_parent'=>'required',
                'relation_ship'=>'required',
                'parent_address'=>'required',
                'tel_no'=>'required',
                'parent_occupation'=>'required'
    
               ]);
             $students = new Student;
             $students->fullname           = $request->input('fullname');
             $students->gender             = $request->input('gender');
             $students->phone              = $request->input('phone');
             $students->address            = $request->input('address');
             $students->course             = $request->input('course');
             $students->marital            = $request->input('marital');
             $students->nationality        = $request->input('nationality');
             $students->state              = $request->input('state');
             $students->lga                = $request->input('lga');
             $students->religion           = $request->input('religion');
             $students->date_entry         = $request->input('date_entry');
             $students->name_parent        = $request->input('name_parent');
             $students->relation_ship      = $request->input('relation_ship');
             $students->parent_address     = $request->input('parent_address');
             $students->tel_no             = $request->input('tel_no');
             $students->parent_occupation  = $request->input('parent_occupation');
             $students->save();
    }
    
   
}

