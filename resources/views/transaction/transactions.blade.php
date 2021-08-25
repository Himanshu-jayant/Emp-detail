@extends('layouts.master')

@section('title')
Transaction

@endsection


@section('content')


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Transaction</h4>
          
          <form action="{{ route('impotrans') }}" method="GET" >
            {{ csrf_field() }}
            <a href="/addtrans" class="btn btn-primary">Add</a>&nbsp;&nbsp;
             {{-- <button type="submit"name="submit"  class="btn " style="background-color:rgba(36, 87, 255, 0.884);"><i class="fa fa-upload"></i> Upload data</button>  --}}
             <button type="button" class="btn btn-primary">Delete all</button>
           

            
          </form>
          @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
        </div>
{{-- 
        <div class="col-md-12">
        <div class="float-right">
          <form action="{{ route('searchtran') }}" method="GET">
              <input type="text" name="search" required placeholder=" Search...">
              <button type="submit" style="background-color: rgba(118, 206, 247, 0.664)">Search</button>
          </form>
          @if($transactions->isNotEmpty())
          @foreach ($transactions as $transact)
          <div class="post-list">
              {{-- <p>{{ $company->name }}</p> --}}
{{--       
          </div>
          @endforeach
          @else
          <div>
              <p>No record found</p>
          </div>
          @endif
      </div></div> --}} 


        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                 S.no
                </th>
                <th>
                  Name
                </th>
               
                <th>
                Account Number
                </th>
                <th >
               Transfer To
                </th>
                <th >
               Amount
                  </th>
                {{-- <th>
                  Edit
                 </th>
                 <th>
                  Delete
                 </th> --}}
              </thead>
            
               <tbody>
                @foreach ($transactions as $transact )
                  
                
                <tr>
                  {{-- <input type="hidden" class="empdelete_var" value="{{ $transact->id }}"> --}}
                  <td>
                    {{$loop->iteration}}
                    </td>
                  <td>
                  {{ $transact->name }}
                  </td>
                  <td>
                    {{ $transact->Account_no }}
                  </td>
                  <td> 
                    {{ $transact->To }} 
                  </td>
                  <td >
                    {{  $transact->Amount }}
                  </td>
                 

{{-- 
                  <td >
                   
                    <a href="/edit-emp/{{ $transact->id  }}" class="btn btn-success">edit</a>
                  
                 </td>
                 <td >
                   
                  <a href="/delete-emp/{{ $transact->id  }}" class="btn btn-danger">delete</a>
                
               </td> --}}
                </tr>
                @endforeach 
               
                {{-- <tr>
                  <td>
                    Minerva Hooper
                  </td>
                  <td>
                    Curaçao
                  </td>
                  <td>
                    Sinaai-Waas
                  </td>
                  <td class="text-right">
                    $23,789
                  </td>
                </tr>
                <tr>
                  <td>
                    Sage Rodriguez
                  </td>
                  <td>
                    Netherlands
                  </td>
                  <td>
                    Baileux
                  </td>
                  <td class="text-right">
                    $56,142
                  </td>
                </tr>
                <tr>
                  <td>
                    Philip Chaney
                  </td>
                  <td>
                    Korea, South
                  </td>
                  <td>
                    Overland Park
                  </td>
                  <td class="text-right">
                    $38,735
                  </td>
                </tr>
                <tr>
                  <td>
                    Doris Greene
                  </td>
                  <td>
                    Malawi
                  </td>
                  <td>
                    Feldkirchen in Kärnten
                  </td>
                  <td class="text-right">
                    $63,542
                  </td>
                </tr>
                <tr>
                  <td>
                    Mason Porter
                  </td>
                  <td>
                    Chile
                  </td>
                  <td>
                    Gloucester
                  </td>
                  <td class="text-right">
                    $78,615
                  </td>
                </tr>
                <tr>
                  <td>
                    Jon Porter
                  </td>
                  <td>
                    Portugal
                  </td>
                  <td>
                    Gloucester
                  </td>
                  <td class="text-right">
                    $98,615
                  </td>
                </tr> --}}
              </tbody>
            </table>
            <span>
              {{ $transactions->links() }}
            </span>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="col-md-12">
      <div class="card card-plain">
        <div class="card-header">
          <h4 class="card-title"> Table on Plain Background</h4>
          <p class="category"> Here is a subtitle for this table</p>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                  Name
                </th>
                <th>
                  Country
                </th>
                <th>
                  City
                </th>
                <th class="text-right">
                  Salary
                </th>
              </thead>
              <tbody>
                <tr>
                  <td>
                    Dakota Rice
                  </td>
                  <td>
                    Niger
                  </td>
                  <td>
                    Oud-Turnhout
                  </td>
                  <td class="text-right">
                    $36,738
                  </td>
                </tr>
                <tr>
                  <td>
                    Minerva Hooper
                  </td>
                  <td>
                    Curaçao
                  </td>
                  <td>
                    Sinaai-Waas
                  </td>
                  <td class="text-right">
                    $23,789
                  </td>
                </tr>
                <tr>
                  <td>
                    Sage Rodriguez
                  </td>
                  <td>
                    Netherlands
                  </td>
                  <td>
                    Baileux
                  </td>
                  <td class="text-right">
                    $56,142
                  </td>
                </tr>
                <tr>
                  <td>
                    Philip Chaney
                  </td>
                  <td>
                    Korea, South
                  </td>
                  <td>
                    Overland Park
                  </td>
                  <td class="text-right">
                    $38,735
                  </td>
                </tr>
                <tr>
                  <td>
                    Doris Greene
                  </td>
                  <td>
                    Malawi
                  </td>
                  <td>
                    Feldkirchen in Kärnten
                  </td>
                  <td class="text-right">
                    $63,542
                  </td>
                </tr>
                <tr>
                  <td>
                    Mason Porter
                  </td>
                  <td>
                    Chile
                  </td>
                  <td>
                    Gloucester
                  </td>
                  <td class="text-right">
                    $78,615
                  </td>
                </tr>
                <tr>
                  <td>
                    Jon Porter
                  </td>
                  <td>
                    Portugal
                  </td>
                  <td>
                    Gloucester
                  </td>
                  <td class="text-right">
                    $98,615
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div> --}}
@endsection


@section('scripts')



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $(document).ready(function() {

    $.ajaxSetup({
    headers: {
      'X-CSRF-Token': '{{ csrf_token() }}'
    }
});

    $(".btn-primary").click(function(e) {
      e.preventDefault();
      
// var delete_id = $(this).closest("tr").find('.trandelete_var').val();
// alert(delete_id);



      swal({
  title: "Are you sure?",
  text: "Once deleted, you will not be able to recover this imaginary file!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

    var data = {
      "_token": $('input[name="csrf-token"]').val(),
      

    };

    $.ajax({
         type: 'GET',
         url:  '{{url("/deltrans")}}',
         data: data,
         
         success: function (response) {
         swal(response.status, {
          icon: "success",
    })
       
        .then((result) => {
          location.reload();
        });

         }


    });
  
   } //else {
  //   swal("Your imaginary file is safe!");
  // }
    });
    });

  });
</script>

@endsection