@extends('layouts.master')

@section('title')
Edit Company

@endsection


@section('content')

{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <div class="container">
      
        

        <div class="card-body">
            <div class="row">
                <div class="col-md-8">

    
        <div class="jumbotron">
           
            <form action="/update-emp/{{ $employees->id }}" method="POST" >
                {{ csrf_field() }}
                {{ method_field('PUT') }}
            
                <input type="hidden" name="id" id="id" value="{{ $employees->id }}">
                
                
                <div class="form-group">
                    <label>First Name</label>
                    <input type="'text"  name="First" value="{{ $employees->First }}" class="form-control" placeholder="Enter name">
                    @error('First')
                    <span class="text-danger">{{ $message }} </span>
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>last name</label>
                    <input type="'text" name="last" value="{{ $employees->last }}" class="form-control" placeholder="Enter last name">
                    @error('last')
                    <span class="text-danger">{{ $message }} </span>
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="'text" name="email" value="{{ $employees->email }}" class="form-control" placeholder="Enter Email">
                    @error('email')
                    <span class="text-danger">{{ $message }} </span>
                        
                    @enderror
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input type="'text" name="phone"  value="{{ $employees->phone }}" class="form-control" placeholder="Enter phone">
                    @error('phone')
                    <span class="text-danger">{{ $message }} </span>
                        
                    @enderror
                </div><br>
                <div class="form-group">
                    <label>Company</label>
                    <input type="'text" name="Company"  value="{{ $employees->Company }}" class="form-control" placeholder="Enter Company name">
                    @error('Company')
                    <span class="text-danger">{{ $message }} </span>
                        
                    @enderror
                </div>


                <br>
                <button type="submit" name="submit" class="btn btn-primary ">Update Data</button>
            </form>
        </div>
    </div>
            </div>
        </div>
    </div>
    @endsection

    @section('scripts')
    
    @endsection