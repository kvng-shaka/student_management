@extends('layouts.master')

@section('title')
   Student | Register Form
@endsection

@section('main-content')


<!-- ADD STUDENTS DATA Modal -->
<div class="modal fade" id="studentaddmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Student Bio Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
  <form id="addform">
      <div class="modal-body">
      	 @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Full name</label>
    <input  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Full Name" name="fullname" type="text">
 
  </div>

<div>
	 <label for="exampleInputEmail1">Gender</label>
	<div>
	 <select class="form-control" id="exampleInputEmail1"  name="gender" type="text">
                <option class="hidden">Select {{ __('gender') }}</option>
                <option name="gender" value="Male">Male</option>
                <option name="gender" value="Female">Female</option>
                <option name="gender" value="Other">Other</option>
        </select>
    </div>                    
</div>

   <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Phone Number" name="phone" type="text">
   
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Enter address</label>
    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter  address" name="address" type="text">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Course</label>
    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="course"   type="text" >
  </div>

<div>
	  <label for="exampleInputEmail1">Enter Marital Status</label>
	<div>
	 <select class="form-control" id="exampleInputEmail1"  name="marital" type="text">
                <option class="hidden">Select {{ __('Marital Status') }}</option>
                <option name="marital" value="Single">Single </option>
                <option name="marital" value="Married">Married</option>
                <option name="marital" value="Others">Others</option>
        </select>
    </div>                    
</div>

   <div class="form-group">
    <label for="exampleInputEmail1">Enter Nationality</label>
    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  name="nationality" type="text" >
  </div>

  <div class="form-group">
                <label >State of Origin</label>
                <select
                  onchange="toggleLGA(this);"
                  name="state"
                  id="state"
                  class="form-control"
                  type="text"
                >
                  <option value="" selected="selected">- Select -</option>
                  <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="AkwaIbom">AkwaIbom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="FCT">FCT</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamafara</option>
                </select>
 </div>

 <div class="form-group">
                <label class="control-label"  >LGA of Origin</label>
                <select
                  name="lga"
                  id="lga"
                  class="form-control select-lga"
                  required
                  type="text"
                >
                </select>
              </div>


<div>
	  <label for="exampleInputEmail1">Enter Religions</label>
	<div>
	 <select class="form-control" id="exampleInputEmail1"  name="religion" type="text">
                <option class="hidden">Select {{ __('Enter Religions') }}</option>
                <option name="religion" value="Islam">Islam </option>
                <option name="religion" value="Christian">Christian</option>
                <option name="religion" value="Others">Others</option>
        </select>
    </div>                    
</div>

 <div class="form-group">
    <label for="exampleInputEmail1">Enter Date of Entry</label>
    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   placeholder="Enter Date of Entry" name="date_entry" type="text">
  </div>

            <h5 class="modal-title" id="exampleModalLabel">Parent/Guardian Bio Data</h5>
<div class="form-group">
    <label for="exampleInputEmail1">Enter Parent/Guardian Name</label>
    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Enter Parent/Guardian name" name="name_parent" type="text">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Your Relationship</label>
    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Relationship" name="relation_ship" type="text">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Your Address</label>
    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Enter Your Address" name="parent_address" type="text">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Telephone Number</label>
    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  placeholder="Enter Telephone Number" name="tel_no" type="text">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Enter Your Occupation</label>
    <input class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"   placeholder="Enter Your Occupation" name="parent_occupation" type="text">
  </div>

 
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
 

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save Student Data </button>
      </div>
</form>
    </div>
  </div>
</div>
<div class="container">
	<div class="jumbotron">
		
<div class="row">
 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#studentaddmodal">
  Launch demo modal
</button>

		</div>
	</div>
	
</div>

@endsection

@section('scripts')
    
@endsection