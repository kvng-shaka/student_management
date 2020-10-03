@extends('layouts.master')

@section('title')
    Student Bio Data Form
@endsection

@section('main-content')
<div class="container">
    <div class="statbox widget box box-shadow">
        <div class="col-md-9">
            <div class="widget-header">                                
                <div class="row">
                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                        <h2>Student Bio Data Form</h2>
                    </div>
                </div>
                <br><br>
            </div>
            <div class="col-md-12 col-8 layout-spacing">
                <form action= "{{ route('student.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                    @csrf
                    <div class="row mb-4">
                        <div class="col">
                            <input type="text" name="firstname" class="form-control" placeholder="First name">
                        </div>
                        <div class="col">
                            <input type="text" name="lastname" class="form-control" placeholder="Last name">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <input type="textarea" name="address" class="form-control" placeholder="Address">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <input type="text" name="telephone" class="form-control" placeholder="Telephone">
                        </div>
                    </div>
                    <div class="form-row mb-4">
                        <div class="col-4">
                            <input type="text" name="state" class="form-control" placeholder="State of Origin">
                        </div>
                        <div class="col">
                            <input type="text" name="local_govt" class="form-control" placeholder="L.G.A">
                        </div>
                        <div class="col">
                            <input type="text" name="nationality" class="form-control" placeholder="Nationality">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <input type="text" name="status" class="form-control" placeholder="Marital Status">
                        </div>
                        <div class="col">
                            <input type="text" name="religion" class="form-control" placeholder="Religion">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <select name="gender" id="gender" class="form-control">
                                <option value="">Select Gender</option>
                                <option value="female">Female</option>
                                <option value="male">Male</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <input type="text" name="qualification" class="form-control" placeholder="Academic Qualification">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col">
                            <input type="text" name="institution" class="form-control" placeholder="Last Institution Attended">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <input type="file" name="image_upload" class="form-control-file" id="file-input">
                        <label class="form-control-label" for="file-input">Upload Passport</label>
                    </div>

                    <input type="submit" name="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection