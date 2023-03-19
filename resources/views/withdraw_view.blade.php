{{-- @dd($data); --}}
@extends('master.master')

@section('content')

<div class="card">



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

       <div class="col-12">
        <div class="row"  id = "withdrow_form">

        </div>
      </div>
   
          <div class="form-group col-sm-12 col-md-12 col-lg-12">
            <label for="amount">Enter Amount</label>
              <input  class="form-control" type="text" name="amount" id="amount" placeholder="Enter Amount">

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

let real_bank = /*html*/`
        <div class="form-group  col-sm-12 col-md-12 col-lg-12">
            <label for="tranjection_name">Bank Name</label>
            <select class="form-control" id="tranjection_name" name="tranjection_name">
              
              <option>Select Bank Name</option>
              <option>AB Bank Limited</option>
              <option>Agrani Bank Limited</option>
              <option>Al-Arafah Islami Bank Limited</option>
              <option>Bangladesh Commerce Bank Limited</option>
              <option>Bangladesh Development Bank Limited</option>
              <option>Bangladesh Krishi Bank</option>
              <option>Bank Al-Falah Limited</option>
              <option>Bank Asia Limited</option>
              <option>BASIC Bank Limited</option>
              <option>Bengal Commercial Bank Limited</option>
              <option>BRAC Bank Limited</option>
              <option>Citibank N.A</option>
              <option>Citizens Bank PLC</option>
              <option>Commercial Bank of Ceylon Limited</option>
              <option>Community Bank Bangladesh Limited</option>
              <option>Dhaka Bank Limited</option>
              <option>Dutch-Bangla Bank Limited</option>
              <option>Eastern Bank Limited</option>
              <option>EXIM Bank Limited</option>
              <option>First Security Islami Bank Limited</option>
              <option>Global Islami Bank Limited</option>
              <option>Habib Bank Ltd.</option>
              <option>ICB Islamic Bank Ltd.</option>
              <option>IFIC Bank Limited</option>
              <option>Islami Bank Bangladesh Ltd</option>
              <option>Jamuna Bank Ltd</option>
              <option>Janata Bank Limited</option>
              <option>Meghna Bank Limited</option>
              <option>Mercantile Bank Limited</option>
              <option>Midland Bank Limited</option>
              <option>Modhumoti Bank Limited</option>
              <option>Mutual Trust Bank Limited</option>
              <option>National Bank Limited</option>
              <option>National Bank of Pakistan</option>
              <option>National Credit & Commerce Bank Ltd</option>
              <option>NRB Bank Limited</option>
              <option>NRB Commercial Bank Limited</option>
              <option>One Bank Limited</option>
              <option>Padma Bank Limited</option>
              <option>Premier Bank Limited</option>
              <option>Prime Bank Ltd</option>
              <option>Probashi Kollyan Bank</option>
              <option>Pubali Bank Limited</option>
              <option>Rajshahi Krishi Unnayan Bank</option>
              <option>Rupali Bank Limited</option>
              <option>Shahjalal Islami Bank Limited</option>
              <option>Shimanto Bank Limited</option>
              <option>Social Islami Bank Ltd</option>
              <option>Sonali Bank Limited</option>
              <option>South Bangla Agriculture & Commerce Bank Limited</option>
              <option>Southeast Bank Limited</option>
              <option>Standard Bank Limited</option>
              <option>Standard Chartered Bank</option>
              <option>State Bank of India</option>
              <option>The City Bank Ltd.</option>
              <option>The Hong Kong and Shanghai Banking Corporation. Ltd.</option>
              <option>Trust Bank Limited</option>
              <option>Union Bank Limited</option>
              <option>United Commercial Bank Limited</option>
              <option>Uttara Bank Limited</option>
           
            </select>
          </div>
          
          <div class="form-group col-sm-12 col-md-12 col-lg-12">
            <label for="tranjection_number">Account Holder Name</label>
              <input  class="form-control" type="text" name="tranjection_number" id="tranjection_number" placeholder="Enter Bank Number">
          </div>

          <div class="form-group col-sm-12 col-md-12 col-lg-12">
            <label for="tranjection_number">Account  Number</label>
              <input  class="form-control" type="text" name="tranjection_number" id="tranjection_number" placeholder="Enter Bank Number">
          </div>

          <div class="form-group col-sm-12 col-md-12 col-lg-12">
            <label for="tranjection_number">Branch Name</label>
              <input  class="form-control" type="text" name="tranjection_number" id="tranjection_number" placeholder="Enter Bank Number">
          </div>

          <div class="form-group col-sm-12 col-md-12 col-lg-12">
            <label for="tranjection_number">Routing  Number</label>
              <input  class="form-control" type="text" name="tranjection_number" id="tranjection_number" placeholder="Enter Bank Number">
          </div>


         
              <input  class="form-control" type="hidden" name="mfs_type" id="mfs_type" value="1" placeholder="Enter Bank Number">
         
         

`;
let mobile_banking =  /*html*/`

          <div class="form-group  col-sm-12 col-md-12 col-lg-12">
            <label for="tranjection_name">MFS Name</label>
            <select class="form-control" id="tranjection_name" name="tranjection_name">
              
             
              <option>Select MFS Name</option>
              <option>Bkash</option>
              <option>Nagad</option>
              <option>Rocket</option>
              <option>MyCash</option>
              <option>Upay</option>
              <option>OK Wallet</option>
              <option>Islamic Wallet</option>
              <option>SureCash</option>
              <option>TeleCash</option>
              <option>Tap</option>
              <option>FSIBL</option>
              <option>Meghna Bank Tap 'n Pay</option>
              <option>Trust Axiata pay: tap</option>
           
            </select>
          </div>
          
          <div class="form-group col-sm-12 col-md-12 col-lg-12">
            <label for="mfs_type">MFS Type</label>

            <select name="mfs_type" class="form-control" id="mfs_type" name="mfs_type">
               
              <option>Select MFS Type</option>
              <option>Agent Number</option>
              <option>Personal Number</option>
           
            </select>          
            </div>

          <div class="form-group col-sm-12 col-md-12 col-lg-12">
            <label for="tranjection_number">MFS Number</label>
              <input  class="form-control" type="text" name="tranjection_number" id="tranjection_number" placeholder="Enter MFS Number">
          </div>
`;

let banking_type = '';

function change_banking_type (evt){
  let list = document.getElementById("withdrow_form");
  if(evt.value ==2){
      
    list.innerHTML = real_bank;
  }else{
    list.innerHTML = mobile_banking;
 
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