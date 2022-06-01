@php
$setting = DB::table('settinginformation')->first();
@endphp


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="MHS">
  <!--favicon icon-->
  <link rel="icon" type="image/png" href="{{ url($setting->favicon) }}">

  <title>Dashboard || SBIT - Skill Based Information Technology</title>

  <!--google font-->
  <link href="http://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">


  <!--common style-->
  <link href="{{ asset('public/backend')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ asset('public/backend')}}/assets/vendor/lobicard/css/lobicard.css" rel="stylesheet">
  <link href="{{ asset('public/backend')}}/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('public/backend')}}/assets/vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <link href="{{ asset('public/backend')}}/assets/vendor/themify-icons/css/themify-icons.css" rel="stylesheet">
  <link href="{{ asset('public/backend')}}/assets/vendor/weather-icons/css/weather-icons.min.css" rel="stylesheet">

  <!--easy pie chart-->
  <link href="{{ asset('public/backend')}}/assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet">

  <!--bs4 data table-->
  <link href="{{ asset('public/backend')}}/assets/vendor/data-tables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <!--summernote-->
  <link href="{{ asset('public/backend')}}/assets/vendor/summernote/summernote-bs4.css" rel="stylesheet">
  <!--select2-->
  <link href="{{ asset('public/backend')}}/assets/vendor/select2/css/select2.css" rel="stylesheet">

  <!--custom css-->
  <link href="{{ asset('public/backend')}}/assets/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('public/backend')}}/assets/css/toast.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>
<body class="app header-fixed left-sidebar-fixed right-sidebar-fixed right-sidebar-overlay right-sidebar-hidden" onload="startTime()" onload="startTime()">

  {{-- ...............Scrollbar Start.............. --}}

  <style>
/* width */
::-webkit-scrollbar {
  width: 4px;
}

/* Track */
::-webkit-scrollbar-track {
  background: #ddd; 
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #fd8900; 
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #fd8900; 
}


/*......data table image hover.....*/

* {
  box-sizing: border-box;
}

.zoom:hover {
  -ms-transform: scale(1.5); /* IE 9 */
  -webkit-transform: scale(1.5); /* Safari 3-8 */
  transform: scale(1.5); 
}


</style>

{{-- ...............Scrollbar End.............. --}}



<!--===========header start===========-->
<header class="app-header navbar">

  <!--brand start-->
  <div class="navbar-brand">
    <a class="" href="{{url('/backend')}}">
      <center>
        <strong style="font-size: 22px;">
          <span style="color: red; font-family: Franklin Gothic Medium;">Admin</span> 
          <span style="color: black; font-family: Franklin Gothic Medium;">Panel</span>
        </strong>
      </center>
    </a>
  </div>
  <!--brand end-->

  <!--left side nav toggle start-->
  <ul class="nav navbar-nav mr-auto">
    <li class="nav-item d-lg-none">
      <button class="navbar-toggler mobile-leftside-toggler" type="button"><i class="ti-align-right"></i></button>
    </li>
    <li class="nav-item d-md-down-none">
      <a class="nav-link navbar-toggler left-sidebar-toggler" href="#"><i class=" ti-align-right"></i></a>
    </li>
    <li class="nav-item d-md-down-none-">
{{--       <!--search start-->
      <form>

        <input type="hidden" name="_token">            
        <div class="input-group" style="width: 350px;">
         <input type="text" class="form-control" id="searchbox" placeholder="Serach Product" name="search"  autocomplete="off" required="">
         <div class="input-group-append">
           <button class="btn btn-success" type="submit" ><i class="fa fa-search"></i></button>

       </div>
   </div>
</form>

<div id="searchdata"></div>
<!--search end--> --}}
</li>
</ul>
<!--left side nav toggle end-->

<!--right side nav start-->
<ul class="nav navbar-nav ml-auto">


  <li class="nav-item dropdown dropdown-slide" style="margin-right: 20px;">
    <a class="nav-link nav-pill user-avatar" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
      <img src="{{Auth()->user()->image}}">
    </a>
    <div class="dropdown-menu dropdown-menu-right dropdown-menu-accout">
      <div class="dropdown-header pb-3">
        <div class="media d-user">
          <img class="align-self-center mr-3" src="{{Auth()->user()->image}}" >
          <div class="media-body">
            <h5 class="mt-0 mb-0">{{Auth()->user()->name}}</h5>
            <span>{{Auth()->user()->email}}</span>
          </div>
        </div>
      </div>

      <a class="dropdown-item" href="#"><i class=" ti-reload"></i> Activity</a>
      <a class="dropdown-item" href="#"><i class=" ti-email"></i> Message</a>
      <a class="dropdown-item" href="#"><i class=" ti-user"></i> Profile</a>
      <a class="dropdown-item" href="#"><i class=" ti-layers-alt"></i> Projects <span class="badge badge-primary">4</span> </a>

      <div class="dropdown-divider"></div>

      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
      document.getElementById('logout-form').submit();">
      <i class=" ti-lock"></i> {{ __('Logout') }}</a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
      </form>
    </div>
  </li>
</ul>

<!--right side nav end-->
</header>
<!--===========header end===========-->

<!--===========app body start===========-->
<div class="app-body">

  <!--left sidebar start-->
  <div class="left-sidebar">
    <nav class="sidebar-menu" style="overflow:scroll; height: 100vh;">
      <ul id="nav-accordion">
        

        <li class="nav-title">
          <h5 class="text-uppercase">Menu</h5>
        </li>

        <li class="sub-menu">
          <a href="javascript:;" class="@if(request()->path() === 'Create-Admin' || request()->path() === 'Manage-Admin'){{'active'}}@else @endif">
            <i class="icon-grid"></i>
            <span>Admin Setup</span>
          </a>
          <ul class="sub">
            <li>
              <a href="{{url('Create-Admin')}}" class="@if(request()->path() === 'Create-Admin'){{'text-info'}}@else @endif">Create Admin</a>
            </li>
            <li>
              <a href="{{url('Manage-Admin')}}" class="@if(request()->path() === 'Manage-Admin'){{'text-info'}}@else @endif">Manage Admin</a>
            </li>
          </ul>
        </li>

        <li class="sub-menu">
          <a href="javascript:;" class="@if(request()->path() === 'Slider' || request()->path() === 'Manage-Slider'){{'active'}}@else @endif">
            <i class="icon-grid"></i>
            <span>Slider Information</span>
          </a>
          <ul class="sub">
            <li>
              <a href="{{url('Slider')}}" class="@if(request()->path() === 'Slider'){{'text-info'}}@else @endif">Slider</a>
            </li>
            <li>
              <a href="{{url('Manage-Slider')}}" class="@if(request()->path() === 'Manage-Slider'){{'text-info'}}@else @endif">Manage Slider</a>
            </li>
          </ul>
        </li>


        <li class="sub-menu">
          <a href="javascript:;" class="@if(request()->path() === 'About'){{'active'}}@else @endif">
            <i class="icon-grid"></i>
            <span>About Information</span>
          </a>
          <ul class="sub">
            <li>
              <a href="{{url('About')}}" class="@if(request()->path() === 'About'){{'text-info'}}@else @endif">About</a>
            </li>
          </ul>
        </li>

        <li class="sub-menu">
          <a href="javascript:;" class="@if(request()->path() === 'Services' || request()->path() === 'Manage-Services'){{'active'}}@else @endif">
            <i class="icon-grid"></i>
            <span>Services Information</span>
          </a>
          <ul class="sub">
            <li>
              <a href="{{url('Services')}}" class="@if(request()->path() === 'Services'){{'text-info'}}@else @endif">Services</a>
            </li>
            <li>
              <a href="{{url('Manage-Services')}}" class="@if(request()->path() === 'Manage-Services'){{'text-info'}}@else @endif">Manage Services</a>
            </li>
          </ul>
        </li>

        <li class="sub-menu">
          <a href="javascript:;" class="@if(request()->path() === 'Software' || request()->path() === 'Manage-Software'){{'active'}}@else @endif">
            <i class="icon-grid"></i>
            <span>Software Information</span>
          </a>
          <ul class="sub">
            <li>
              <a href="{{url('Software')}}" class="@if(request()->path() === 'Software'){{'text-info'}}@else @endif">Software</a>
            </li>
            <li>
              <a href="{{url('Manage-Software')}}" class="@if(request()->path() === 'Manage-Software'){{'text-info'}}@else @endif">Manage Software</a>
            </li>
          </ul>
        </li>

        <li class="sub-menu">
          <a href="javascript:;" class="@if(request()->path() === 'Clients' || request()->path() === 'Manage-Clients'){{'active'}}@else @endif">
            <i class="icon-grid"></i>
            <span>Clients Information</span>
          </a>
          <ul class="sub">
            <li>
              <a href="{{url('Clients')}}" class="@if(request()->path() === 'Clients'){{'text-info'}}@else @endif">Clients</a>
            </li>
            <li>
              <a href="{{url('Manage-Clients')}}" class="@if(request()->path() === 'Manage-Clients'){{'text-info'}}@else @endif">Manage Clients</a>
            </li>
          </ul>
        </li>

        <li class="sub-menu">
          <a href="javascript:;" class="@if(request()->path() === 'Course' || request()->path() === 'Manage-Course'){{'active'}}@else @endif">
            <i class="icon-grid"></i>
            <span>Course Information</span>
          </a>
          <ul class="sub">
            <li>
              <a href="{{url('Course')}}" class="@if(request()->path() === 'Course'){{'text-info'}}@else @endif">Course</a>
            </li>
            <li>
              <a href="{{url('Manage-Course')}}" class="@if(request()->path() === 'Manage-Course'){{'text-info'}}@else @endif">Manage Course</a>
            </li>
          </ul>
        </li>

        <li class="sub-menu">
          <a href="javascript:;" class="@if(request()->path() === 'Team' || request()->path() === 'Manage-Team'){{'active'}}@else @endif">
            <i class="icon-grid"></i>
            <span>Team Information</span>
          </a>
          <ul class="sub">
            <li>
              <a href="{{url('Team')}}" class="@if(request()->path() === 'Team'){{'text-info'}}@else @endif">Team</a>
            </li>
            <li>
              <a href="{{url('Manage-Team')}}" class="@if(request()->path() === 'Manage-Team'){{'text-info'}}@else @endif">Manage Team</a>
            </li>
          </ul>
        </li>

        <li class="sub-menu">
          <a href="javascript:;" class="@if(request()->path() === 'Settings' || request()->path() === 'Contact' || request()->path() === 'Why-Chosse-Us'){{'active'}}@else @endif">
            <i class="icon-grid"></i>
            <span>Website Settings</span>
          </a>
          <ul class="sub">
            <li>
              <a href="{{url('Settings')}}" class="@if(request()->path() === 'Settings'){{'text-info'}}@else @endif">Settings</a>
            </li>
            <li>
              <a href="{{url('Contact')}}" class="@if(request()->path() === 'Contact'){{'text-info'}}@else @endif">Contact</a>
            </li>
            <li>
              <a href="{{url('Why-Chosse-Us')}}" class="@if(request()->path() === 'Why-Chosse-Us'){{'text-info'}}@else @endif">Why Chosse Us</a>
            </li>
          </ul>
        </li>

        <li class="sub-menu">
          <a href="javascript:;" class="@if(request()->path() === 'User Message'){{'active'}}@else @endif">
            <i class="icon-grid"></i>
            <span>User Message</span>
          </a>
          <ul class="sub">
            <li>
              <a href="{{url('User-Message')}}" class="@if(request()->path() === 'User Message'){{'text-info'}}@else @endif"> Message</a>
            </li>
          </ul>
        </li>

      </ul>
    </nav>
  </div>







  @yield('content')




  <!--left sidebar end-->
</div>
<!--===========footer start===========-->
<footer class="app-footer">
  <div class="container-fluid">
    <div class="row" style="color: black;">
      <div class="col-lg-4 text-right">
       <span id="clock"></span>
       <span id="date"> /  {{ date('l, F j, Y') }}</span>
     </div>

     <div class="col-lg-4 text-right">

     </div>

     <div class="col-lg-4 text-right">

      <span>
       <?php echo date("Y"); ?> © Copyright Develop By <a href="https://www.facebook.com/Bidhan716/">Bidhan Nath</a>
     </span>
   </div>

 </div>
</div>
</footer>
<!--===========footer end===========-->


<!-- Placed js at the end of the page so the pages load faster -->
<script src="{{ asset('public/backend')}}/assets/vendor/jquery/jquery.min.js"></script>
<script src="{{ asset('public/backend')}}/assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js"></script>
<script src="{{ asset('public/backend')}}/assets/vendor/popper.min.js"></script>
<script src="{{ asset('public/backend')}}/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="{{ asset('public/backend')}}/assets/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js"></script>
<script class="include" type="text/javascript" src="{{ asset('public/backend')}}/assets/vendor/jquery.dcjqaccordion.2.7.js"></script>
<script src="{{ asset('public/backend')}}/assets/vendor/lobicard/js/lobicard.js"></script>
<script src="{{ asset('public/backend')}}/assets/vendor/jquery.scrollTo.min.js"></script>

<!--datatables-->
<script src="{{ asset('public/backend')}}/assets/vendor/data-tables/jquery.dataTables.min.js"></script>
<script src="{{ asset('public/backend')}}/assets/vendor/data-tables/dataTables.bootstrap4.min.js"></script>

<!--chartjs-->
<script src="{{ asset('public/backend')}}/assets/vendor/chartjs/Chart.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

<script src="assets/js/scripts.js"></script>

<script>
  $(document).ready(function() {
    $('#bs4-table').DataTable();
  } );
</script>


<script>
  @if (Session::has('messege'))

  var type="{{ Session::get('alert-type', 'info') }}"

  switch(type){

    case 'info':
    toastr.options.positionClass = 'toast-top-right';
    toastr.info("{{ Session::get('messege') }}");

    break;

    case 'success':
    toastr.options.positionClass = 'toast-top-right';
    toastr.success("{{ Session::get('messege') }}");

    break;

    case 'warning':
    toastr.options.positionClass = 'toast-top-right';
    toastr.warning("{{ Session::get('messege') }}");

    break;

    case 'error':
    toastr.options.positionClass = 'toast-top-right';
    toastr.error("{{ Session::get('messege') }}");

    break;

  }

  @endif

</script>

<!--chartjs initialization-->
<script>

  var ctx = document.getElementById('myChart-light').getContext('2d');
  var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
              labels: ["January", "February", "March", "April", "May", "June", "July"],
              datasets: [{
                label: "My First dataset",
                backgroundColor: 'rgba(167,104,243,.2)',
                borderColor: 'rgba(167,104,243,1)',
                data: [0, 20, 9, 25, 15, 25,18]
              }]


            },

            // Configuration options go here
            options: {
              maintainAspectRatio: false,
              legend: {
                display: false
              },

              scales: {
                xAxes: [{
                  display: false
                }],
                yAxes: [{
                  display: false
                }]
              },
              elements: {
                line: {
                  tension: 0.00001,
                        //tension: 0.4,
                        borderWidth: 1
                      },
                      point: {
                        radius: 4,
                        hitRadius: 10,
                        hoverRadius: 4
                      }
                    }
                  }
                });


  var ctx = document.getElementById('myChart-tow-light').getContext('2d');
  var chart = new Chart(ctx, {
            // The type of chart we want to create
            type: 'line',

            // The data for our dataset
            data: {
              labels: ["January", "February", "March", "April", "May", "June", "July"],
              datasets: [{
                label: "My First dataset",
                backgroundColor: 'rgba(54,162,245,.2)',
                borderColor: 'rgba(54,162,245,1)',
                    //data: [6.06, 82.2, -22.11, 21.53, -21.47, 73.61, -53.75, -60.32]
                    data: [70, 45, 65, 50, 65, 35, 50]
                  }]


                },

            // Configuration options go here
            options: {
              maintainAspectRatio: false,
              legend: {
                display: false
              },
              scales: {
                xAxes: [{
                  display: false
                }],
                yAxes: [{
                  display: false
                }]
              },
              elements: {
                line: {
                        //tension: 0.00001,
                        tension: 0.4,
                        borderWidth: 1
                      },
                      point: {
                        radius: 4,
                        hitRadius: 10,
                        hoverRadius: 4
                      }
                    }
                  }
                });

              </script>


              <!--custom chart-->
              <script src="{{ asset('public/backend')}}/assets/vendor/custom-chart/Chart.min.js"></script>
              <script src="{{ asset('public/backend')}}/assets/vendor/custom-chart/underscore-min.js"></script>
              <script src="{{ asset('public/backend')}}/assets/vendor/custom-chart/moment.min.js"></script>
              <script src="{{ asset('public/backend')}}/assets/vendor/custom-chart/accounting.min.js"></script>
              <!--custom chart init-->
              <script src="{{ asset('public/backend')}}/assets/vendor/custom-chart/custom-chart-init.js"></script>


              <!--easy pie chart-->
              <script src="{{ asset('public/backend')}}/assets/vendor/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
              <script src="{{ asset('public/backend')}}/assets/vendor/jquery-easy-pie-chart/easy-pie-chart-init.js"></script>

              <!--vectormap-->
              <script src="{{ asset('public/backend')}}/assets/vendor/vector-map/jquery-jvectormap-1.2.2.min.js"></script>
              <script src="{{ asset('public/backend')}}/assets/vendor/vector-map/jquery-jvectormap-world-mill-en.js"></script>
              <script src="{{ asset('public/backend')}}/assets/vendor/vmap-init.js"></script>     
              <script src="{{ asset('public/backend')}}/assets/vendor/modernizr.js"></script>
              <script src="{{ asset('public/backend')}}/assets/js/scripts.js"></script>

              <!--summernote-->
              <script src="{{ asset('public/backend')}}/assets/vendor/summernote/summernote-bs4.min.js"></script>
              <script>
                $(document).ready(function() {
                  $('#summernote').summernote({
                height: 200,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                  // set focus to editable area after initializing summernote
              });
                });
              </script>

              <script src="{{ asset('public/backend')}}/assets/vendor/summernote/summernote-bs4.min.js"></script>
              <script>
                $(document).ready(function() {
                  $('#summernotes').summernote({
                height: 200,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                  // set focus to editable area after initializing summernote
              });
                });
              </script>

              <script>
                $(document).ready(function() {
                  $('#summernoteabout').summernote({
                height: 200,                 // set editor height
                minHeight: null,             // set minimum height of editor
                maxHeight: null,             // set maximum height of editor
                focus: true                  // set focus to editable area after initializing summernote
              });
                });
              </script>


              <!--select2-->
              <script src="{{ asset('public/backend')}}/assets/vendor/select2/js/select2.min.js"></script>
              <script src="{{ asset('public/backend')}}/assets/vendor/select2-init.js"></script>



              <script>

               /* Navbar ClockDate */
               function startTime() {
                var today = new Date();
                var hr = today.getHours();
                var min = today.getMinutes();
                var sec = today.getSeconds();
                ap = (hr < 12) ? "<span>AM</span>" : "<span>PM</span>";
                hr = (hr == 0) ? 12 : hr;
                hr = (hr > 12) ? hr - 12 : hr;
    //Add a zero in front of numbers<10
    hr = checkTime(hr);
    min = checkTime(min);
    sec = checkTime(sec);
    document.getElementById("clock").innerHTML = hr + ":" + min + ":" + sec + " " + ap;
    
    var time = setTimeout(function(){ startTime() }, 500);
  }
  function checkTime(i) {
    if (i < 10) {
     i = "0" + i;
   }
   return i;
 }
</script>


<script>
  imgInp.onchange = evt => {
    const [file] = imgInp.files
    if (file) {
      blah.src = URL.createObjectURL(file)
    }
  }
</script>


<script>
  $(document).ready(function() {
    $('#table').DataTable();
  } );
</script>

<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js
"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js
"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.colVis.min.js"></script>
"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.7.1/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#example').DataTable( {
     responsive: true,
     "order": [[ 0, "desc" ]],
     "lengthMenu": [[10, 5, 15, 25, 50, -1], [10,5,15, 25, 50, "All"]],
     dom: 'Bfrtip',
     buttons: [
     {
      extend: 'copyHtml5',
      exportOptions: {
        columns: [ 0, ':visible' ]
      }
    },
    {
      extend: 'excelHtml5',
      exportOptions: {
        columns: ':visible'
      }
    },
    {
      extend: 'pdf',
      exportOptions: {
        columns: ':visible'
      }
    },
    {
      extend: 'print',
      exportOptions: {
       columns: ':visible'
     }
   },
   'colvis','pageLength'
   ]
 } );
  } );
</script>

</body>


</html>

