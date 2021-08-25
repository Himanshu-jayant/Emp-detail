@extends('layouts.master')

@section('title')
Dashboard

@endsection


@section('content')


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">EMPLOYEE</h4>
          <a href="/empadd" class="btn btn-primary">add</a>
          &nbsp;&nbsp;
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <a  href="/downlod" style="background-color:rgba(255, 124, 36, 0.884);" class="btn"><i class="fa fa-download"></i> Download</a>
          @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
        </div>

        <div class="col-md-12">
        <div class="float-right">
          <form action="{{ route('searchemp') }}" method="GET">
              <input type="text" name="search" required placeholder=" Search...">
              <button type="submit" style="background-color: rgba(118, 206, 247, 0.664)">Search</button>
          </form>
          @if($employees->isNotEmpty())
          @foreach ($employees as $smployee)
          <div class="post-list">
              {{-- <p>{{ $company->name }}</p> --}}
      
          </div>
          @endforeach
          @else
          <div>
              <p>No record found</p>
          </div>
          @endif
      </div></div>


        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                 S.no
                </th>
                <th>
                  First name
                </th>
                <th>
                 Last name
                </th>
                <th>
                Email
                </th>
                <th >
                Phone
                </th>
                <th >
                Company
                  </th>
                <th>
                  Edit
                 </th>
                 <th>
                  Delete
                 </th>
              </thead>
              





               <tbody>
                @foreach ($employees as $employee )
                  
                
                <tr>
                  <input type="hidden" class="empdelete_var" value="{{ $employee->id }}">
                  <td>
                    {{$loop->iteration}}
                    </td>
                  <td>
                  {{ $employee->First }}
                  </td>
                  <td>
                    {{ $employee->last }}
                  </td>
                  <td> 
                    {{ $employee->email }} 
                  </td>
                  <td >
                    {{  $employee->phone }}
                  </td>
                  <td >
                    {{  $employee->Company }}
                  </td>


                  <td >
                   
                    <a href="/edit-emp/{{ $employee->id  }}" class="btn btn-success">edit</a>
                  
                 </td>
                 <td >
                   
                  <button type="button" class="btn btn-danger">delete</button>
                
               </td>
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
            {{-- <span>
              {{ $employees->links() }}
            </span> --}}
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
         'X-CSRF-TOKEN': $('input[name="csrf-token"]').attr('content')
    }
});

    $(".btn-danger").click(function(e) {
      e.preventDefault();
      
var delete_id = $(this).closest("tr").find('.empdelete_var').val();
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
      "id": delete_id,

    };

    $.ajax({
         type: 'GET',
         url: '/delete-emp/' + delete_id,
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