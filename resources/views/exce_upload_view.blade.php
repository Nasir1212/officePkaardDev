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
            <h1 class="m-0">Excel File Upload</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">File Upload </li>
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
        <h3 class="card-title">Upload Card User Excel File</h3>
       
      </div>
      <!-- /.card-header -->
      
      <div class="card-body">
        <div id="actions" class="row">
          <div class="col-lg-12">
            <div class="btn-group w-100">
              <span class="btn btn-success col fileinput-button">
              <label id="show_file_name" for="excel_file" style="

                  font-size: 15px;
                  font-weight: 100;
                  margin-top: 5px;
                  width: 100%;
                  height: 100%;">
            
                <i class="fas fa-plus"></i>
                Add files
             
            </label>
            <input onchange="handle_change(event)" type="file" id="excel_file" style="display: none">
          </span>
          
              <button id="upload_btn" type="button" onclick="upload_file()" class="btn btn-primary col start">
              
                <i class="fas fa-upload"></i>
                <span>Start upload</span>
              
              </button>
              
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
  <script src="{{ asset('assets/plugins/dropzone/min/dropzone.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <script>

function handle_change(e){
  console.log( e.target.files[0].name);
  e.target.files[0].name
document.getElementById("show_file_name").innerHTML = e.target.files[0].name 
}



function upload_file(){
  let appending = new FormData();
  appending.append('excel_file',document.getElementById("excel_file").files[0]);
  fetch(`excel_file_upload`, {
    method: 'POST',
    body: appending
  })
  .then(response => response.json())
  .then(data => {
   console.log(data);
    excel_data(data)
   
  })
  .catch(error => {
    console.error(error)
  })

document.getElementById("upload_btn").innerHTML=`
<div class="spinner-border text-warning" role="status">
  <span class="sr-only">Loading...</span>
</div>
`;
document.getElementById("upload_btn").style.cssText=`cursor: not-allowed;`
}


function  excel_data(data){

     fetch(`excel_data`,{
    method: 'POST',
   body:JSON.stringify({'ex_data':data}),
   headers: new Headers({
               'Content-Type': 'application/json',
              
            })
   })
     .then(response=>response.json())
     .then(d=>{
       if(d['condition']==true){
        swal ( "success" ,  `${d['message']}` ,  "success" )
        document.getElementById("upload_btn").innerHTML=`Suuccess`
       
        setTimeout(() => {
          document.getElementById("upload_btn").innerHTML=`
          <i class="fas fa-upload"></i>
                <span>Start upload</span>
          `
        document.getElementById("upload_btn").style.cssText=`cursor: pointer;`
        }, 2000);
       }else{

        document.getElementById("upload_btn").innerHTML=`failed`
        setTimeout(() => {
          document.getElementById("upload_btn").innerHTML=`
          <i class="fas fa-upload"></i>
                <span>Start upload</span>
          `
        document.getElementById("upload_btn").style.cssText=`cursor: pointer;`
        }, 2000);

        swal ( "Opps ~" ,  `something went wrong` ,  "error" )
       }
        console.log(d)
      })
    

}

  </script>

@endsection