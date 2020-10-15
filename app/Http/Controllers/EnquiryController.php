<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facade\Storage;
use Illuminate\Http\Facade\Input;
use Illuminate\Http\Facade\Auth;
use App\Enquiry;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $enquiry = Enquiry::all();
        //dd($enquiry);
        return view('enquiry.index')->with('enquiry', $enquiry);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('enquiry.add_enquiry');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fullname'      => 'required',
            'email'         => 'required',
            'address'       => 'required',
            'telephone'     => 'required',
            'enquiry_type'  => 'required',
            'description'   =>  'required' 
        ]);

        $savePost = new Enquiry();
        //dd($savePost);
        $savePost->fullname         = $request->fullname;
        $savePost->email            = $request->email;
        $savePost->address          = $request->address;
        $savePost->telephone        = $request->telephone;
        $savePost->enquiry_type     = $request->enquiry_type;
        $savePost->description      = $request->description;
        $savePost->save();

        if($savePost){
            return redirect('/enquiry')->with("success","Enquiry added succesfully");
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
        $enquiry = Enquiry::find($id);
        return view('enquiry.show')->with('enquiry', $enquiry);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $enquiry = Enquiry::find($id);
        //dd($enquiry);
        return view('enquiry.edit')->with('enquiry', $enquiry);
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
        $validatedData = $request->validate([
            'fullname'      => 'required',
            'email'         => 'required',
            'address'       => 'required',
            'telephone'     => 'required',
            'enquiry_type'  => 'required',
            'description'   =>  'required' 
        ]);

        $savePost = Enquiry::find($id);
        //dd($savePost);
        $savePost->fullname         = $request->fullname;
        $savePost->email            = $request->email;
        $savePost->address          = $request->address;
        $savePost->telephone        = $request->telephone;
        $savePost->enquiry_type     = $request->enquiry_type;
        $savePost->description      = $request->description;
        $savePost->save();

        if($savePost){
            return redirect('/enquiry')->with("success","Enquiry Updated succesfully");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $enquiry = Enquiry::find($id);

        $enquiry->delete();
        
        return redirect()->back()->with("success","Enquiry Deleted succesfully");
    }
}
