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

        </div>

        <div class="col-md-12">
        <div class="float-right">
          <form action="{{ route('search') }}" method="GET">
              <input type="text" name="search" required placeholder=" Search...">
              <button type="submit" style="background-color: rgba(118, 206, 247, 0.664)">Search</button>
          </form>
          @if($companies->isNotEmpty())
          @foreach ($companies as $company)
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
                {{-- <th>
                 Id
                </th> --}}
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
                <th >
                  Logo
                  </th>
                <th>
                  Edit
                 </th>
                 <th>
                  Delete
                 </th>
              </thead>
              





              <tbody>
                @foreach ($companies as $company )
                  
                
                <tr>
                  {{-- <td>
                    {{ $company->id }}
                    </td> --}}
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
                    <img src="{{ asset('uploads/Company/'.$company->image) }}" width="100px" height="100px" alt="logo">
                  </td>
                  <td >
                   
                    <a href="/edit-comp/{{ $company->id  }}" class="btn btn-success">edit</a>
                  
                 </td>
                 <td >
                   
                  <a href="/delete-comp/{{ $company->id  }}" class="btn btn-danger">delete</a>
                
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
              {{ $companies->links() }}
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

@endsection