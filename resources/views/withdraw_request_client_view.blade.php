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
            <h1 class="m-0"> Withdraw Request</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">   Withdraw Request </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      {{-- {{dd($data)}} --}}
        <table class="table table-bordered table-striped table-hover">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Reference Code</th>
                <th scope="col">Name</th>
                <th scope="col">Number</th>
                <th scope="col">Amount</th>
                <th scope="col">Request Date</th>
                <th scope="col">Wallet</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
           {{-- {{dd($data)}} --}}
              
                {{-- {{$i = 1}}
                @foreach($data as $d)
                <tr>
                <th scope="row">{{$i++}}</th>
                <td>{{$d->requester_refe}}</td>
                <td>
                    {{$d->tranjection_name}}

                    @if($d->tranjection_type==1)
                    {{$d->mfs_type}}
                    @endif
                </td>
                <td>{{$d->tranjection_number}}</td>
              
              
                <td>{{$d->amount}} TK</td>
                <td>{{$d->requested_date}}</td>
              
                <td>{{$d->wallet}} TK</td>

                <td>
                    <a onclick="pay_payment({{$d->id}})" class="btn btn-info"> <i class="fas fa-hand-holding-usd"></i> Pay</a>
                    <a href="Franchiac_summary_details/{{$d->requester_refe}}" class="btn btn-info"> <i class="fas fa-hiking"></i> Profile</a>
                </td>
            </tr>
                @endforeach --}}
             
            
            </tbody>
          </table>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<script>
function pay_payment(id){

    swal({
  title: "Are you sure for paying?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {

  
    fetch(`pay_payment/${id}`)
    .then(response=>response.json())
    .then(data=>{
      console.log(data);
    if(data['condition'] === true){
        swal(data['message'], {
      icon: "success",
    });

     location.reload();

    }else{
        swal(data['message'], {
      icon: "error",
    });
    }
    
    })
    
  }
});
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