{{-- @dd($data); --}}
@extends('master.master')

@section('content')

<style>
  .margin_top{
    margin-top:2rem !important;
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
            <h4 class="m-0">List Affiliation Partner</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Affiliation Partner</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
      <!-- /.card-header -->
      <div class="card-body">

    <div >
        <table class="table ">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Company</th>
                    <th>TIN No </th>
                    <th>Number</th>
                    <th>Mail</th>
                    <th>Details</th>
                    <th>Room</th>

                    
                </tr>
            </thead>

            <tbody>
                <?php $i=1; ?>
                @foreach($all_affiliation as $affiliation)
               
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$affiliation->company_name}}</td>
                    <td>{{$affiliation->company_tin}}</td>
                    <td>{{$affiliation->contact_number}}</td>
                    <td>{{$affiliation->email_address}}</td>
                   
                    <td><a class="btn btn-info btn-sm">Details</a></td>
                    <td><a href="/add_multiple_affiliation_product?id={{$affiliation->id}}" class="btn btn-info btn-sm" >Store Room</a></td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>

          
      
      <!-- /.card-body -->
    </div>
  

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</div>
 
<script src="{{asset('assets/plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('assets/plugins/inputmask/jquery.inputmask.min.js')}}"></script>
<!-- date-range-picker -->
<script src="{{asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- bootstrap color picker -->
<script src="{{asset('assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Bootstrap Switch -->
<script src="{{asset('assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js')}}"></script>
<!-- BS-Stepper -->
<script src="{{asset('assets/plugins/bs-stepper/js/bs-stepper.min.js')}}"></script>
<!-- dropzonejs -->
<script src="{{asset('assets/plugins/dropzone/min/dropzone.min.js')}}"></script>
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
  
     
<script>
    function product_details(){
        let url = location.origin
       window.history.pushState({urlPath:'/add_multiple_affiliation_product'}, "Home", '/add_multiple_affiliation_product');
      history.forward();

 }
</script>

@endsection