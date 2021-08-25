<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Download</title>
</head>

<body>

    <style>
        table, th, td {
          border: 1px solid black;
          border-collapse: collapse;
        }
        
        table.center {
          margin-left: auto; 
          margin-right: auto;

        }
        h1 {
  text-align: center;
}
        </style>

    <h1 style="background-color: rgb(238, 57, 57)">EMPLOYEE DATA</h1>
    <table class="center" border="1">
        <tr style="background-color: rgb(138, 192, 241)">
          <th>S.no</th>
          <th>Name</th>
            {{-- <th>Last name</th> --}}
            <th>Email</th>
            <th>Phone</th>
            <th>Company</th>
        </tr>
        
            @foreach ($employees as $employee)
           
        
            <tr>
              <td> 
                {{$loop->iteration}}
              </td>
                <td>
                {{ $employee->First }}  {{ $employee->last }}
            </td>
            {{-- <td>
              {{ $employee->last }}
            </td> --}}
            <td> 
              {{ $employee->email }} 
            </td>
            <td >
              {{  $employee->phone }}
            </td>
            <td >
              {{  $employee->Company }}
            </td>

               
            
            </tr>
            @endforeach
           
        
    </table>


</body>

</html>