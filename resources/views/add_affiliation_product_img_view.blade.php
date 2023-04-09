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
            <h4 class="m-0">Add Affiliation Product Image</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Affiliation Image</li>
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

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Preview</th>
                <th scope="col">Handle</th>
                <th scope="col">Upload</th>
                <th scope="col">Remove</th>

              </tr>
            </thead>
            <tbody id="table_body">
              <tr>
                <td>1</td>
                <td><img style="width:150px;height:100px" src="./assets/images/preview_img_upload.jpg" alt="Preview" ></td>
                <td><input class=" bg-secondary margin_top" onchange="handle_img(this)" type="file" name="" id=""></td>
                <td><button class="btn btn-info margin_top  btn-sm " onclick="upload_file(this)">Upload File</button></td>
                <td><button class="btn btn-danger margin_top  btn-sm " onclick="this_remove_element(this)">Remove File</button></td>

              </tr>
            
            </tbody>
            <tfoot>
              <tr>
                <td  colspan="4"></td>
                <td><button class="btn btn-warning btn-sm" onclick="new_img_filed()">New Image</button></td>
              </tr>
            </tfoot>
          </table>
<hr>
          <div class="float-right " style="width: 9rem;">
            <a href="/add_affiliation_product_view" class="btn btn-danger btn-sm  btn-block">Next</a>
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
  function new_img_filed(){

    let table_body_tr =  document.getElementById("table_body").children;
   let increment_number = table_body_tr[table_body_tr.length-1].children[0].innerText;
    let create_tr = document.createElement('tr');
    create_tr.innerHTML = `  <td>${Number(increment_number)+1}</td>
                <td><img style="width:150px;height:100px" src="./assets/images/preview_img_upload.jpg" alt="Preview" ></td>
                <td><input  class=" bg-secondary margin_top" onchange="handle_img(this)" type="file" name="" id=""></td>
                <td><button class="btn btn-info margin_top  btn-sm " onclick="upload_file(this)">Upload File</button></td>
                <td><button class="btn btn-danger margin_top  btn-sm " onclick="this_remove_element(this)">Remove File</button></td>`;
    table_body.appendChild(create_tr);
  }

  function this_remove_element(event){
    event.parentElement.parentElement.remove()
  }

  function handle_img(event){

    event.parentElement.parentElement.children[1].children[0].src = URL.createObjectURL(event.files[0]);

  }

  async function  upload_file(event){
       let img =  event.parentElement.parentElement.children[2].children[0].files[0];

  event.innerHTML =`Uploading`;
    const formData = new FormData();
    formData.append('pkaard_img',img);    
    try{
        const response = await fetch(`http://localhost:9000/upload_img.php`,{
            method:'POST',
            // mode: 'no-cors',
            body:formData
            
           
            
        } );
       
        const result = await response.json();
        console.log(result);
        if(response.status==200){
          if(result.status == true){
            event.innerHTML =`uploaded`;
            event.classList.remove('btn-info')
            event.classList.add('btn-success')
            event.classList.remove('btn-danger')
            event.disabled = true;
          }else{
            event.innerHTML =`${result['message']}`;
            event.classList.remove('btn-info')
            event.classList.add('btn-danger')
            
          }
        
        }
    }catch(e){
        console.log(e);
        event.innerHTML =`Something Went Wrong`;
        event.classList.remove('btn-info')
        event.classList.add('btn-danger')

    }


  }
</script>

@endsection