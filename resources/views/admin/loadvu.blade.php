<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
{{-- <!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
  @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>




    

      <body >

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">

        <div class="col-md-12">
            <div class="card card-plain">
              <div class="card-header">
                  <br>
                <h4 class="card-title"> REGISTERED USER</h4>
                
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                       email
                      </th>
                      <th>
                        usertype
                      </th>
                     
                    </thead>
                    <tbody>
                        @foreach ($users as $user )
                 
              
                        <tr>
                         
                          <td>
                           {{ $user->name }}
                          </td>
                          <td>
                            {{ $user->email }}
                          </td>
                          <td>
                           &RightArrow; {{ $user->usertype }}
                          </td>
                          
                        </tr>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
      <footer class="footer">
        <div class=" container-fluid "> --}}
          {{-- <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav> --}}
          {{-- <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="" target="_blank">Himanshu</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Himanshu jayant</a>.
          </div>
        </div>
      </footer>
    </div>
  </div> --}}
  <!--   Core JS Files   -->
  {{-- <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>

</body>

</html> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
<h1 style="background-color: rgb(228, 48, 48)">REGISTERED USER</h1>
    <table class="center" border="1">
        <tr style="background-color: rgb(138, 192, 241)">
            <th>
                Id
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
            </tr>
           @foreach ($users as $user )
                     
            <tr>
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
               {{ $user->usertype }}
              </td>
            </tr>  
            @endforeach 
        
    </table>


    
</body>
</html>