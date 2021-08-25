@extends('layouts.master')

@section('title')
Dashboard register

@endsection


@section('content')


<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Registered User</h4>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
             <a href="/download" style="background-color:rgba(255, 124, 36, 0.884);" class="btn"><i class="fa fa-download"></i> Download</a>
          @if (session('status'))
          <div class="alert alert-success" role="alert">
              {{ session('status') }}
          </div>
      @endif
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table">
              <thead class=" text-primary">
                <th>
                ID
                </th>
                <th>
                  Name
                </th>
                <th>
                 Email
                </th>
                <th>
                  Usertype
                 </th>
                <th>
                 Edit
                </th>
                <th class="text-right">
                  Delete
                </th>
              </thead>
              <tbody>
                
                  
            
               @foreach ($users as $user )
                 @if ($user->usertype !="admin")
              
                <tr>
                  <input type="hidden" class="regdelete_var" value="{{ $user->id }}">
                  <td>
                    {{ $user->id }}
                   </td>
                  <td>
                   {{ $user->name }}
                  </td>
                  <td>
                    {{ $user->email }}
                  </td>
                  <td>
                   &RightArrow; {{ $user->usertype }}
                  </td>
                  <td >
                   
                   <a href="/user-edit/{{ $user->id }}" class="btn btn-success">edit</a>
                 
                </td>
                  <td class="text-right">
                    {{-- <form action="/user-delete/{{ $user->id }}" method="POST">
                     {{ csrf_field() }}
                     {{ method_field('DELETE') }} --}}
                      <button type="submit" class="btn btn-danger">delete</button>
                    </form> 
                  </td>
                </tr>
                @endif
                @endforeach
               
              </tbody>
            </table>
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
      
var delete_id = $(this).closest("tr").find('.regdelete_var').val();
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
         url: '/user-delete/' + delete_id,
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