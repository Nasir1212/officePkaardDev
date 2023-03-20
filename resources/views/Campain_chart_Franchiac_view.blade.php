{{-- @dd($data); --}}
@extends('master.master')

@section('content')

<style>
    .alert {
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}

    .alert.success {background-color: #04AA6D;}
.alert.info {background-color: #2196F3;}
.alert.warning {background-color: #ff9800;}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
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
            <h1 class="m-0">Campain Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Campain Details </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      

        <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Status</th>
                <th scope="col">KPI</th>
                <th scope="col">Percentage</th>
                <th scope="col">Card Registation</th>
                <th scope="col">Amount</th>
              </tr>
            </thead>
            <tbody>
                {{-- {{dd($campain)}} --}}
                <?php $id = 1 ?>
                <?php $Card  = 340 ?>
              
                              
@foreach($campain as $cam)

<?php  $kpi_ex = explode("-",$cam->kpi) ?>
              <tr>
                <td>{{$id++}}</td>
                
                @if($Card >= $kpi_ex[0] && $Card < $kpi_ex[1])
                <td><p class="btn btn-success">Open</p></td>
                @elseif($Card >=  $kpi_ex[0] )
                <td><p class="btn btn-info">Successfully Won</p></td>
                @else 
                <td><p class="btn btn-danger">Locked</p></td>
                @endif
                <td>{{$cam->kpi}}</td>
              
                <td> <b>{{ $cam->percentage}}%</b> </td>
                @if($Card >= $kpi_ex[0] && $Card <= $kpi_ex[1])
                <td>{{$Card}}</td>
                <td>{{$Card *(200*$cam->percentage/100)}} TK</td>
                @elseif($Card >  $kpi_ex[0] )
                <td>Won</td>
                <td>Jump <b class=" text-muted">{{$kpi_ex[1] *(200*$cam->percentage/100)}} TK</b> </td>
                @else 
                <td>Try To Win</td>
                <td>0.00 TK</td>
                @endif
              </tr>
              {{-- @if($Card >$kpi_ex[1] )
             
                <td>Most Wellcome</td>
              
              @endif --}}

@endforeach

<?php 
$total_kpi =  count($campain );
$kpi_explode = explode("-",$campain[$total_kpi - 1]['kpi']);


?>

@if($kpi_explode[1] < $Card)
<tr>
    <td  colspan="6">
        <div class="alert success">
            <span class="closebtn">&times;</span>  
            <strong>Hurry!</strong> Indicates a successful.
          </div>
          
    </td>
</tr>
@endif

            <tbody>

            </table>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){
    var div = this.parentElement;
    div.style.opacity = "0";
    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
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