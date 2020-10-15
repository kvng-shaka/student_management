@extends('layouts.master')

@section('title')
   Enquiries
@endsection

@section('main-content')
<div class="layout-px-spacing">
                
    <div class="row layout-top-spacing">
    
        <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="widget-content widget-content-area br-6">
                <div class="table-responsive mb-4 mt-4">
                   
                    <table class="multi-table table table-striped table-bordered table-hover non-hover" style="width:100%">
                        <thead>
                            <tr>
                                <th>Fullname</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Telephone</th>
                                <th>Enquiry type</th>
                                <th>Description</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ( $enquiry as $enquiry )
                            <tr>
                                <td>{{$enquiry->fullname}}</td>
                                <td>{{$enquiry->email}}</td>
                                <td>{{$enquiry->address}}</td>
                                <td>{{$enquiry->telephone}}</td>
                                <td>{{$enquiry->enquiry_type}}</td>
                                <td>{{$enquiry->description}}</td>
                                <td>{{$enquiry['created_at']->diffForHumans()}}</td>
                                <td class="text-center">
                                    <div class="dropdown custom-dropdown">
                                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink12">
                                            <a class="dropdown-item" href="/enquiry/{{$enquiry->id}}">View</a>
                                            <a class="dropdown-item" href="/enquiry/{{$enquiry->id}}/edit">Edit</a>
                                            <form action="{{route('enquiry.destroy', $enquiry->id)}}" method="POST">
                                                {{method_field("DELETE")}}
                                                @csrf
                                                <button style="border:none;"><a onclick="return confirm('Are you sure you want to delete Enquiry?')">Delete</a></button>    
                                                {{-- <a class="dropdown-item" href="" onclick="return confirm('Are you sure you want to delete Enquiry?')">Delete</a> --}}
                                            </form>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection


@section('scripts')
    
@endsection