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
           
            <form action="/update-comp/{{ $companies->id }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
            
                <input type="hidden" name="id" id="id" value="{{ $companies->id }}">
                
                
                <div class="form-group">
                    <label>Company Name</label>
                    <input type="'text"  name="name" value="{{ $companies->name }}" class="form-control" placeholder="Enter name">
                    @error('name')
                    <span class="text-danger">{{ $message }} </span>
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="'text" name="email" value="{{ $companies->email }}" class="form-control" placeholder="Enter email">
                    @error('email')
                    <span class="text-danger">{{ $message }} </span>
                        
                    @enderror
                </div>

                <div class="form-group">
                    <label>Website</label>
                    <input type="'text" name="website" value="{{ $companies->website }}" class="form-control" placeholder="Enter website">
                    @error('website')
                    <span class="text-danger">{{ $message }} </span>
                        
                    @enderror
                </div>
                <div class="form-group">
                    <label>Gst</label>
                    <input type="'text" name="gst"  value="{{ $companies->gst }}" class="form-control" placeholder="Enter Gst">
                    @error('gst')
                    <span class="text-danger">{{ $message }} </span>
                        
                    @enderror
                </div><br>
                <div class="input-group">
                    <div class="custom-file">
                       
                        <input   type="file" name="image" value="{{ $companies->image }}" class="custom-file-input" >
                       
                        <label class="custom-file-label">choose file</label>
                       
                    </div>  @error('image')
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