<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Facade\Auth;
use Illuminate\Support\Facade\Storage;
use Illuminate\Http\Facade\Input;
use App\User;
use App\Student;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('student.index')->with('students', $students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

            'firstname'     => 'required|max:255',
            'lastname'      => 'required|max:255',
            'address'       => 'required|max:255',
            'telephone'     => 'required|max:255',
            'state'         => 'required|max:255',
            'local_govt'    => 'required|max:255',
            'nationality'   => 'required|max:255',
            'status'        => 'required|max:255',
            'religion'      => 'required|max:255',
            'gender'        => 'required|max:255',
            'qualification' => 'required|max:255',
            'institution'   => 'required|max:255',
            'image_upload'  => 'image|nullable|max:1999',

        ]);

        //Handle file upload
        if($request->hasFile('image_upload')){
            //Get Filename With the Extension
            $filenameWithExt = $request->file('image_upload')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //get just extension
            $extension = $request->file('image_upload')->getClientOriginalExtension();
            //Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            //upload Image
            $path = $request->file('image_upload')->storeAs('public/image_upload', $fileNameToStore);
        }else{
            $fileNameToStore = 'noimage.jpg';
        }


        $savePost = new Student();

        $savePost->firstname    = $request->firstname;   
        $savePost->lastname     = $request->lastname;
        $savePost->address      = $request->address;
        $savePost->telephone    = $request->telephone;
        $savePost->state        = $request->state;
        $savePost->local_govt   = $request->local_govt;
        $savePost->nationality  = $request->nationality;
        $savePost->status       = $request->status;
        $savePost->religion     = $request->religion;
        $savePost->gender       = $request->gender;
        $savePost->qualification = $request->qualification;
        $savePost->institution  = $request->institution;
        $savePost->image_upload = $fileNameToStore;

        $savePost->save();

        if($savePost){
            return redirect('student.index')->with("success","Student added succesfully");
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
