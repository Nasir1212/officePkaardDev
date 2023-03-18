{{-- @dd($data); --}}
@extends('master.master')

@section('content')

<style>
    #show_district{
        list-style: none
    }

    #show_district{
        list-style: none
    }

    
</style>

<div class="card">



     <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Franchiac summary Details </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      

        
    <div class="card-header">
        <h3 class="card-title">Franchiac summary Details</h3>
        <button class="btn btn-warning float-right ml-1 mr-1"><i class='fas fa-poll-h'></i>  Affiliation Point </button>
        @if(Session::get('mode')=='branch'||Session::get('mode')=='reference_rogram')
        <a href="/withdraw_view" class="btn btn-info  float-right ml-1 mr-1"> <i class='fas fa-money-bill-wave' ></i>  withdraw</a>
      @endif
        <div class="float-right balance_btn">

            <div class="d-flex" style="height: 2.5rem;
            width: 11rem;
            border-radius: 1rem;
            line-height: 2.5;
            padding-left: 1rem;background: orangered !important;color: white;
    font-weight: bold;">
                <div class="d-none balance_btn" style="margin-right: 16px;">
                    {{$balance}}tk 
                </div>
                <div onclick="show_blance(this)" style="width: 2rem;
                height: 2rem;
                background: white;
                border-radius: 50%;
                margin-top: 5px;
                margin-left: -10px;
                margin-right: 8px;cursor: pointer;">
                </div>
               
                <div class="balance_btn">
                    Your Balance
                </div>
            </div>

           
           
        </div>

      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
            <div class="col-12">
               
                <ul id="show_district" class="row">
                    <div class='col-4'>
                        <div class="small-box bg-primary">
                            <div class="inner">
                              <h3>{{$daily_regis}}<sup style="font-size: 20px"></sup></h3>
              
                              <p>Daily Card Registation </p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{url('Franchiac_summary_details')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                    </div>

                    <div class='col-4'>
                        <div class="small-box bg-secondary">
                            <div class="inner">
                              <h3>{{$monthly_regis}}<sup style="font-size: 20px"></sup></h3>
              
                              <p>Monthly Card Registation </p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{url('Franchiac_summary_details')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                    </div>

                    <div class='col-4'>
                        <div class="small-box bg-success">
                            <div class="inner">
                              <h3>{{$monthly_deliv}}<sup style="font-size: 20px"></sup></h3>
              
                              <p> Monthly Total  Delivery</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{url('Franchiac_summary_details')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                    </div>


                    <div class='col-4'>
                        <div class="small-box  bg-info">
                            <div class="inner">
                              <h3>{{$monthly_return}}<sup style="font-size: 20px"></sup></h3>
              
                              <p>Monthly Total  Return </p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{url('Franchiac_summary_details')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                    </div>



                    <div class='col-4'>
                        <div class="small-box bg-warning">
                            <div class="inner">
                              <h3>{{$total_deliv}}<sup style="font-size: 20px"></sup></h3>
              
                              <p>Total Delivery</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{url('Franchiac_summary_details')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                    </div>


                    <div class='col-4'>
                        <div class="small-box  bg-danger ">
                            <div class="inner">
                              <h3>{{$total_reg}}<sup style="font-size: 20px"></sup></h3>
              
                              <p>Total Registation</p>
                            </div>
                            <div class="icon">
                              <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="{{url('Franchiac_summary_details')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                          </div>
                    </div>
                    {{-- ['total_reg'=>$total_reg,'daily_regis'=>$daily_regis,'monthly_regis'=>$monthly_regis,'total_deliv'=>$total_deliv,'monthly_deliv'=>$monthly_deliv,'total_return'=>$total_return,'monthly_return'=>$monthly_return] --}}


                   
                </ul>

                <div class="float-left">
                    <a href="" class="btn btn-success">Total Affiliation Counting</a>
                    
                </div>

                <div class="float-right">
                    <a href="{{url('overall_report')}}" class="btn btn-info">Overall Report</a>
                    <a href="" class="btn btn-warning">Revenue Summary</a>
                    
                </div>
            </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
  

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<script>
    // console.log(District)
function show_blance(e){
   console.log(e.nextElementSibling)
//    previousElementSibling


e.nextElementSibling.classList.add('d-none');
e.previousElementSibling.classList.remove('d-none');

setTimeout(() => {
e.nextElementSibling.classList.remove('d-none');
e.previousElementSibling.classList.add('d-none');
}, 3000);
}

</script>


  <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
  <!-- AdminLTE App -->
  {{-- <script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script> --}}
  <script>


  
  </script>

@endsection