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
                <th scope="col">Amount</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

              <tr>
                <td>1</td>
                <td><p class="btn btn-success">Open</p></td>
                <td>1-100</td>
                <td><input class="form-control" type="text" value="10%"></td>
                <td>200 TK</td>
                <td> <button class="btn btn-info">Change</button> </td>

              </tr>

              <tr>
                <td>2</td>
                <td><p class="btn btn-danger">Locked</p></td>
                <td>101-200</td>
                <td><input class="form-control" type="text" value="10%"></td>
                <td>200 TK</td>
                <td> <button class="btn btn-info">Change</button> </td>

              </tr>

              <tr>
                <td>3</td>
                <td><p class="btn btn-danger">Locked</p></td>
                <td>201-300</td>
                <td><input class="form-control" type="text" value="10%"></td>
                <td>200 TK</td>
                <td> <button class="btn btn-info">Change</button> </td>

              </tr>

              <tr>
                <td>4</td>
                <td><p class="btn btn-danger">Locked</p></td>
                <td>301-400</td>
                <td><input class="form-control" type="text" value="10%"></td>
                <td>200 TK</td>
                <td> <button class="btn btn-info">Change</button> </td>

              </tr>

              <tr>
                <td>4</td>
                <td><p class="btn btn-danger">Locked</p></td>
                <td>401-500</td>
                <td><input class="form-control" type="text" value="10%"></td>
                <td>200 TK</td>
                <td> <button class="btn btn-info">Change</button> </td>

              </tr>

            <tbody>

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