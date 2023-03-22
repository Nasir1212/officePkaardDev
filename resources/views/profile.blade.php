{{-- @dd($data); --}}
@extends('master.master')

@section('content')

<style>
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
            <h1 class="m-0">Profile </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Profile </li>
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
        <h3 class="card-title">Your Profile </h3>
       
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
            <div class="col-12">
               <div class="row">
                <div class="col-sm-12 col-md-2 col-lg-2">

                  <div>
                    <button onclick="handle_profile('personal')"  class="btn btn-info mb-2 w-100">Personal Info</button>
                    <button onclick="handle_profile('bank')"  class="btn btn-info mb-2 w-100">Bank Info</button>
                    <button onclick="handle_profile('mfs')"  class="btn btn-info mb-2 w-100">MFS Info</button>
                  </div>
                </div>


                <div class="col-sm-12 col-md-10 col-lg-10">
                  <div id="personal" class="d-none">
                    <table class="table table-bordered table-striped table-hover">
                      <caption style="caption-side:top;text-align:center">Personal Info</caption>
                      <thead>
                      <tr>
                        <th>Title </th>
                        <th>Info </th>

                      </tr>
                    </thead>
                    <tbody>
                      {{-- {{dd($data)}} --}}
                      @foreach($data as $d)

                      <tr>
                        <td>Name </td>
                        <td>{{$d->name}}</td>
                      </tr>
                      <tr>
                        <td>Phone Number</td>
                        <td>{{$d->mobile_phone}}</td>
                      </tr>

                      <tr>
                        <td>Reference Code  </td>
                        <td>{{$d->reference_code}}</td>
                      </tr>

                      <tr>
                        <td>NID No </td>
                        <td>{{$d->nid_no}}</td>
                      </tr>

                      <tr>
                        <td>Date of Birth</td>
                        <td>{{$d->date_of_birth}}</td>
                      </tr>

                      <tr>
                        <td>Office Address</td>
                        <td>{{$d->office_address}}</td>
                      </tr>
                      
                      <tr>
                        <td>Emergency Phone</td>
                        <td>({{ $d->emergency_name}} ){{$d->emergency_phone}}</td>
                      </tr>

                      <tr>
                        <td>Date of Birth</td>
                        <td>{{$d->date_of_birth}}</td>
                      </tr>

                     
                      <tr>
                        <td>Pkaard Mail </td>
                        <td>{{$d->pkaard_mail}}</td>
                      </tr>

                      <tr>
                        <td>General Mail </td>
                        <td>{{$d->general_mail}}</td>
                      </tr>

                      @endforeach
                    </tbody>
                    </table>
                  </div>

                  <div id="bank"  class="d-none">
                    {{-- Bank Info  --}}

                    

                    <table class="table table-bordered table-striped table-hover">
                      <caption style="caption-side:top;text-align:center">Bank Info</caption>
                      <thead>
                      <tr>
                        <th>Title </th>
                        <th>Info </th>

                      </tr>
                    </thead>
                    <tbody>
                      {{-- {{dd($data)}} --}}
                      @foreach($data as $d)

                      <tr>
                        <td> Bank Name </td>
                        <td>{{$d->bank_name}}</td>
                      </tr>
                      <tr>
                        <td>Account Holder Name </td>
                        <td>{{$d->account_holder_name}}</td>
                      </tr>

                      <tr>
                        <td>Branch Name   </td>
                        <td>{{$d->branch_name}}</td>
                      </tr>

                      <tr>
                        <td>Account Mumber</td>
                        <td>{{$d->account_number}}</td>
                      </tr>

                      <tr>
                        <td>Routing Number</td>
                        <td>{{$d->routing_number}}</td>
                      </tr>

                     

                      @endforeach
                    </tbody>
                    </table>
                    
                  </div>

                  <div id="mfs"  class="d-none">
                    {{-- MFS  Info  --}}

                    

                    <table class="table table-bordered table-striped table-hover">
                      <caption style="caption-side:top;text-align:center">MFS info</caption>
                      <thead>
                      <tr>
                        <th>Title </th>
                        <th>Info </th>

                      </tr>
                    </thead>
                    <tbody>
                      {{-- {{dd($data)}} --}}
                      @foreach($data as $d)

                      <tr>
                        <td> MFS Name </td>
                        <td>{{$d->mfs_name}}</td>
                      </tr>
                      <tr>
                        <td>MFS Type </td>
                        <td>{{$d->mfs_type }}</td>
                      </tr>

                      <tr>
                        <td>MFS Number  </td>
                        <td>{{$d->mfs_number }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                    </table>
                    
                  </div>
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
  <script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <script>

personal.classList.remove("d-none");
  function handle_profile(d){
    ['personal','bank','mfs'].forEach((data=>{
      // data.classList.add("d-none");
      document.getElementById(data).classList.add('d-none');
      console.log(data);
    }))

    document.getElementById(d).classList.remove('d-none');
  }
  </script>

@endsection