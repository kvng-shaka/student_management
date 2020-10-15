@extends('layouts.master')

@section('title')
   Enquiries
@endsection

@section('main-content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pt-5 mt-4" >
                <div>
                    <h3>Enquiry Form</h3>
                    <br>
                </div>
                <div>
                    <form  method="POST" action="{{ route('enquiry.store') }}">
                        @csrf
                        <div class="form-group mb-4" style="width:80% ; margin:auto">
                            <label for="fullname">Full Name:</label>
                            <input type="text" class="form-control" name="fullname" id="fullname" placeholder="input fullname">
                        </div>
                        <div class="form-group mb-4" style="width:80% ; margin:auto">
                            <label for="email">Email:</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="input email">
                        </div>
                        <div class="form-group mb-4" style="width:80% ; margin:auto">
                            <label for="address">Address:</label>
                            <input type="text" class="form-control" name="address" id="address" placeholder="input address">
                        </div>
                        <div class="form-group mb-4" style="width:80% ; margin:auto">
                            <label for="telephone">Telephone Number:</label>
                            <input type="text" class="form-control" name="telephone" id="telephone" placeholder="input telephone">
                        </div>
                        <div class="form-group mb-4" style="width:80% ; margin:auto">
                            <label for="enquiry_type">Enquiry Type:</label>
                            <select class="form-control" name="enquiry_type">
                                <option value="">Select Enquiry type</option>
                                <option value="trainings">Trainings</option>
                                <option value="projects">Projects</option>
                                <option value="others">Others</option>
                            </select>
                        </div>
                        <div class="form-group mb-4" style="width:80% ; margin:auto">
                            <label for="description">Description:</label>
                            <input type="textArea" class="form-control" name="description" id="description" placeholder="input description here">
                        </div>
                        <input type="submit" name="time" class="btn btn-primary">
                    </form>
                </div>
                
            </div>
        </div>
    </div>
            
@endsection

@section('scripts')
    
@endsection