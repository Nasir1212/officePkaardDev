{{-- @dd($data); --}}
@extends('master.master')

@section('content')

<div class="card">

{{-- {{dd($data)}} --}}

     <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> Withdraw Money</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">  Franchiac Summary </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      
        <form name="withdow_request">
        <div class="row" >

          <div class="form-group col-sm-12 col-md-12 col-lg-12">
            <label for="slecting_withdral_type">Withdraw Type</label>
            <select onchange="change_banking_type(this);" class="form-control" name="tranjection_type" id="slecting_withdral_type">
              <option >Select Withdraw Type</option>
              <option value="1">Mobile Banking </option>
              <option value="2">Real Banking</option>
              
            </select>
          </div>
          <div class="container-fluid">

        <div class="col-12" id="1">
          <div class="row"  id = "withdrow_form">

            <div class="form-group  col-sm-12 col-md-12 col-lg-12">
              <label for="tranjection_name">Bank Name</label>
              <select class="form-control" readonly id="tranjection_name" >
                
                <option>{{$data['0']->bank_name}}</option>
                
            
              </select>
            </div>
            
            <div class="form-group col-sm-12 col-md-12 col-lg-12">
              <label for="tranjection_number">Account Holder Name</label>
                <input readonly class="form-control" type="text" value="{{$data['0']->account_holder_name}}"  id="tranjection_number" placeholder="Enter Bank Number">
            </div>

            <div class="form-group col-sm-12 col-md-12 col-lg-12">
              <label for="tranjection_number">Account  Number</label>
                <input readonly class="form-control" type="text" value="{{$data['0']->account_number}}" id="tranjection_number" placeholder="Enter Bank Number">
            </div>

            <div class="form-group col-sm-12 col-md-12 col-lg-12">
              <label for="tranjection_number">Branch Name</label>
                <input readonly class="form-control" type="text" value="{{$data['0']->branch_name}}" id="tranjection_number" placeholder="Enter Bank Number">
            </div>

            <div class="form-group col-sm-12 col-md-12 col-lg-12">
              <label for="tranjection_number">Routing  Number</label>
                <input readonly class="form-control" type="text" value="{{$data['0']->routing_number}}"  id="tranjection_number" placeholder="Enter Bank Number">
            </div>


          </div>
        </div>

        <div class="col-12 " id="2">
          <div class="row">
            <div class="form-group  col-sm-12 col-md-12 col-lg-12">
              <label for="tranjection_name">MFS Name</label>
              <select class="form-control" readonly id="tranjection_name" >
                
                <option>{{$data['0']->mfs_name}}</option>
                        
              </select>
            </div>
            
            <div class="form-group col-sm-12 col-md-12 col-lg-12">
              <label for="mfs_type">MFS Type</label>

              <select readonly class="form-control" id="mfs_type" >
                
                <option>{{$data['0']->mfs_type}}</option>
               
            
              </select>          
              </div>

            <div class="form-group col-sm-12 col-md-12 col-lg-12">
              <label for="tranjection_number">MFS Number</label>
                <input  readonly class="form-control" value="{{$data['0']->mfs_number}}" type="text"  id="tranjection_number" placeholder="Enter MFS Number">
            </div>
          </div>
        </div>
   
          <div class="form-group col-sm-12 col-md-12 col-lg-12">
            <label for="amount">Enter Amount</label>
              <input   class="form-control" type="text" name="amount" id="amount" placeholder="Enter Amount">

          </div>


          <div class="form-group col-sm-12 col-md-12 col-lg-12">
          <button onclick="handle_withdraw();" type="button" class="btn btn-info">Withdraw </button>

          </div>
        </div>
        </form>    
      
       
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<script>

function handle_withdraw(){
 
  form_data = Object.fromEntries(new FormData(document.forms['withdow_request']));
  console.log(form_data)

fetch('withdraw_request', {
    method: 'POST',
    body:JSON.stringify(form_data),
    headers: new Headers({
                'Content-Type': 'application/json',
              
            })
  })
  .then(response => response.json())
  .then(data => {
    console.log(data)
if(data['condition']==true){
    swal("successful", "Successfully Submitted", "success"); 
}else{
    swal("Opps!",data['message'], "error"); 
}
    

  })
  
}



function change_banking_type (evt){

  let list = document.getElementById("withdrow_form");
  if(evt.value ==2){
      
    
  }else{
  
 
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