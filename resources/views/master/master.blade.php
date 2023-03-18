<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  {{-- <title>Pkaard | Dashboard</title> --}}
  <title>{{ Session::get('mode') }}</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/summernote/summernote-bs4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css')}}">
  <link href="https://fonts.googleapis.com/css2?family=Galada&family=Mina&family=Roboto:ital,wght@0,500;1,300&display=swap" rel="stylesheet">
  <link href="https://fonts.maateen.me/bangla/font.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}} "></script>
<script src="{{ asset('assets/js/bd_data.js')}}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 <!-- AdminLTE App -->
 <script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="{{ asset('assets/js/SessionExport.js')}}"></script>

<style>
  label{
    font-family: 'Bangla', Arial, sans-serif !important;
  }
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="{{asset('assets/images/pkaard_logo.jpeg')}}" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img style="display: none" src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50  mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">

                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>

    
      @if(Session::get('mode')=='branch'||Session::get('mode')=='reference_rogram')
      <li class="nav-item dropdown">
        <a class="nav-link"  href="{{url('profile')}}" title="porfile">
          {{-- <i class="far fa-comments"></i> --}}
          <img style="width: 2rem;height: 1.6rem;border-radius: 50%;" src="data:image/png;base64,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" alt="">
          {{-- <span class="badge badge-danger navbar-badge">3</span> --}}
          
        </a>
      
      </li>
      @endif

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assets/images/pkaard_logo.jpeg')}}" alt="Pkaard Logo" class="brand-image  elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">
        Admin</span>
        
       
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assets/images/pkaard_logo.jpeg')}}" class=" elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('/')}}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard</p>
                </a>
              </li>
             
            </ul>
          </li>

          @if(Session::get('mode')=='admin')
          <li class="nav-item">
            <a href="{{url('list_register')}}" class="nav-link">
              <i class="nav-icon ion ion-clipboard mr-1"></i>
              <p>
                List Card Register
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>

          
      
     
          <li class="nav-item">
            <a href="{{url('corporate_report')}}" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>
             Corporate Report
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{url('add_reference_code')}}" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
             Add Reference Code
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          
          @endif

          
          @if(Session::get('mode')=='admin')

          <li class="nav-item">
            <a href="{{url('Franchiac_summary')}}" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
                Franchiac summary
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{url('communication_view')}}" class="nav-link">
              <i class=" nav-icon far fa-circle nav-icon"></i>
              <p>
                Communication 
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
     
          <li class="nav-item">
            <a href="{{url('add_card_user')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Add Card User 
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="{{url('excel')}}" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Excel File upload
              
                
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
        

          <li class="nav-item">
            <a href="{{url('branch')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Branch 
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{url('reference_program_view')}}" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>
                Reference  Program 
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>

                    
          <li class="nav-item">
            <a href="{{url('all_withdraw_requested_view')}}" class="nav-link">
              <i class='nav-icon  fas fa-hand-holding-usd'></i>
              <p>
               List Withdraw Request
                {{-- <span class="right badge badge-danger">New</span> --}}
              </p>
            </a>
          </li>
          
   
         

          @endif

          @if(Session::get('mode')=='branch'||Session::get('mode')=='reference_rogram')
                 
          <li class="nav-item">
            @foreach(Session::get('data') as $value)
            <?php $url = "Franchiac_summary_details/".$value['reference_code'] ?>

              <a href="{{url($url)}}" class="nav-link">
                <i class="nav-icon fas fa-tree"></i>
                <p>
                  Franchiac summary
                  {{-- <span class="right badge badge-danger">New</span> --}}
                </p>
              </a>
              @endforeach
          
          </li>
          
               
           
      
         @endif

         <li class="nav-item">
          <a href="{{url('Campain_chart_view')}}" class="nav-link">
            <i class="nav-icon fas fa-chess-knight"></i>
            <p>
              Campain Chart
              {{-- <span class="right badge badge-danger">New</span> --}}
            </p>
          </a>
        </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="fas fa-inbox"></i>
              <p>
                Message 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Send Message </p>
                </a>
              </li>

             
            
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon far fa-envelope"></i>
              <p>
                Mail 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item">
                <a href="{{url('/mail_box')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Send Mail </p>
                </a>
              </li>

             
            
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
@yield('content')
 
  <footer class="main-footer">
    <strong>Copyright &copy; 2022-2023 <a href="#">pkaard</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block" onclick="logout_auth();">
      <b> <a class="btn btn-danger d-flex ">
        <span class="material-symbols-outlined">
        exit_to_app
        </span><b>Log Out</b></a> </b> 
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script>
  function logout_auth(){
    fetch(`${location.origin}/logout_auth`)
    .then(response=>response.json())
    .then(data=>{
      console.log(data)
      if(data['condition']==true){
        localStorage.UserData ='';
        location.reload();
      }
    })
  }
</script>
</body>
</html>
