@extends('layouts.master')

@section('title')
Add Employee

@endsection


@section('content')

{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <div class="container">
      
        

        <div class="card-body">
            <div class="row">
                <div class="col-md-8">

    
        <div class="jumbotron">
           
            <form action="{{ route('addemp') }}" method="POST" enctype="multipart/form-data">
                 {{ csrf_field() }}
                <div class="form-group">
                    <label>First Name</label>
                    <input type="text"  name="First" class="form-control" placeholder="Enter  First name">
                    @error('First')
                    <span class="text-danger">{{ $message }} </span>
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name="last" class="form-control" placeholder="Enter Last name">
                    @error('last')
                    <span class="text-danger">{{ $message }} </span>
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Enter email">
                    @error('email')
                    <span class="text-danger">{{ $message }} </span>
                        
                    @enderror
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" class="form-control" placeholder="Enter phone">
                    @error('phone')
                    <span class="text-danger">{{ $message }} </span>
                        
                    @enderror
                </div>
                
                <div class="form-group">
                    <label>Company</label>
                    <input type="text" name="Company" class="form-control" placeholder="Enter Company name">
                   
                    @error('Company')
                    <span class="text-danger">{{ $message }} </span>
                        
                    @enderror
                </div>
                
                <br>
                <button type="submit" name="submit" class="btn btn-primary ">Save Data</button>
            </form>
        </div>
    </div>
            </div>
        </div>
    </div>
    @endsection

    @section('scripts')
    
    @endsection