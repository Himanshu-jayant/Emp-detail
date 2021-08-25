@extends('layouts.master')

@section('title')
Dashboard

@endsection


@section('content')





<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">COMPANY</h4>
          <a href="/company" class="btn btn-primary">Add</a>
         
          @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
        </div>
        


        {{-- <div class="float-right">
          <form action="{{ route('search') }}" method="GET">
              <input type="text" name="search" required />
              <button type="submit" style="background-color: rgb(148, 148, 230)">Search</button>
          </form>
         
      </div> --}}


        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                 S.no
                </th>
                  <th >
                  Logo
                  </th>
                <th>
                  Name
                </th>
                <th>
                 Email
                </th>
                <th>
                Gst
                </th>
                <th >
                Website
                </th>
              
                <th>
                  Edit
                 </th>
                 <th>
                  Delete
                 </th>
                 <th>
                 Employee
                 </th>
              </thead>
              





              <tbody>
                @foreach ($companies as $company )
                  
                
                <tr>
                  <input type="hidden" class="serdelete_var" value="{{ $company->id }}">
                  <td>
                    {{$loop->iteration}}
                  </td>
                    <td >
                      <img src="{{ asset('uploads/Company/'.$company->image) }}" width="100px" height="100px" alt="logo">
                    </td>
                    <td>
                  {{ $company->name }}
                  </td>
                  <td>
                    {{ $company->email }}
                  </td>
                  <td>
                    {{ $company->gst}} &percnt;
                  </td>
                  <td >
                    {{  $company->website}}
                  </td>
                 
                  <td >
                   
                    <a href="/edit-comp/{{ $company->id  }}" class="btn btn-success">edit</a>
                  
                 </td>
                 <td >
                   
                  <button type="button" class="btn btn-danger"  >delete</button>
                 
                 </td >
                 <td>
                    <a href="/inner-join/{{ $company->name  }}" class="btn btn-primary">&RightArrowBar;</a>
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
            <span>
              {{ $companies->links() }}
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
         'X-CSRF-TOKEN': $('input[name="csrf-token"]').attr('content')
    }
});

    $(".btn-danger").click(function(e) {
      e.preventDefault();
      
var delete_id = $(this).closest("tr").find('.serdelete_var').val();
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
         url: '/delete-comp/' + delete_id,
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