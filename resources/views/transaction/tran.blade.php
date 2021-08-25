@extends('layouts.master')

@section('title')
Add transaction

@endsection

@section('content')

{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <div class="container">
      
        

        <div class="card-body">
            <div class="row">
                <div class="col-md-8">

    
        <div class="jumbotron">
           
            <form action="{{ route('addtrans') }}" method="POST" enctype="multipart/form-data">
                 {{ csrf_field() }}
            
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label>Account No</label>
                    <input type="text" name="Account_no" class="form-control" placeholder="Enter website">
                </div>
                <div class="form-group">
                    <label>To</label>
                    <input type="text" name="To" class="form-control" placeholder="Enter Gst">
                </div>
                
                <div class="form-group">
                    <label>Amount</label>
                    <input type="text" name="Amount" class="form-control" placeholder="Enter Gst">
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