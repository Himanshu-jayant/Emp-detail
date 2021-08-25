@extends('layouts.master')

@section('title')
Import Transaction

@endsection

@section('content')

{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <div class="container">
      
        

        <div class="card-body">
            <div class="row">
                <div class="col-md-8">

    
        <div class="jumbotron">
        
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                  
                   <div class="input-group">
                       <div class="custom-file">
                           <input type="file" name="file" class="custom-file-input">
                           <label class="custom-file-label">choose file</label>
                       </div>   @error('file')
                       <span class="text-danger">{{ $message }} </span>
                           
                       @enderror

                   </div>
                   <br>
                   <button type="submit" name="submit" class="btn btn-primary "><i class="fa fa-upload"></i>  upload</button>
              </form>  
           </div>
                </div>
            </div>
        </div>
    </div>
    
    
    @endsection


    

    @section('scripts')
    
    @endsection