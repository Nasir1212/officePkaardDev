{{-- @dd($data); --}}
@extends('master.master')

@section('content')
<style>
    .ref_number_box {
    display: grid;
    grid-template-columns: repeat(6,1fr);
    gap: 1rem;
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
            <h1 class="m-0">All Reference Code </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reference Code</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      

        
    <div class="card-header ">
        <div class=" float-right">
            <h3 class="card-title"><button class="btn btn-warning"  data-toggle="modal" data-target=".bd-example-modal-lg">Add New Reference Code</button></h3>
        </div>
        <div class="col-lg-4">
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
      <!-- /.card-header -->
      <div class="card-body">

       
        
        
        
        <table class="table table-striped">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Reference Code </th>
              <th scope="col">Status </th>

              <th scope="col">Action</th>
             
            </tr>
          </thead>
          <tbody id="all_reference_code">
           
          </tbody>
        </table>
      
       

        
        
      
      
      <!-- /.card-body -->
    </div>
  

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<!-- Large modal -->
{{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button> --}}

<div class="modal fade bd-example-modal-lg"  id="exampleModal"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Add Reference Code</h5>
            
        </div>


        <div class="modal-body">

            <div class="container-fluid">
                <form name="reference_code_All">
                <div class="row">
                   

                        <div class="form-group col-lg-12 col-md-12 col-sm-12" >
                        <label for="">Reference Code (রেফারেন্স কোড )</label>
                        <div class="ref_number_box">
                            <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="1">
                            <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="2">
                            <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="3">
                            <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="4">
                            <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="5">
                            <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="6">
                           
                        </div>
                        <input type="hidden"  name="reference_code" class="form-control" id="">
                        <small id="" class="form-text text-muted"> </small>
                    </div>

                </div>

                
            </div>

        </form>
            
        </div>
    

     <div class="modal-footer">
        <button type="button" onclick="add_reference_code()" class="btn btn-primary">Add </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg"  id="update_branch_model"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Update Branch</h5>
            
        </div>


        <div class="modal-body">

            <div class="container-fluid" id="update_branch_container_body">
               

                
            </div>

      
            
        </div>
    

     <div class="modal-footer">
        <button type="button" onclick="update_branch()" class="btn btn-primary">Update </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
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
{{-- <!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script> --}}


  
  <script>

function handle_change(e){
  console.log( e.target.files[0].name);
  e.target.files[0].name
document.getElementById("show_file_name").innerHTML = e.target.files[0].name 
}



function upload_file(){
  let appending = new FormData();
  appending.append('excel_file',document.getElementById("excel_file").files[0]);
  fetch(`excel_file_refere`, {
    method: 'POST',
    body: appending
  })
   .then(response => response.json())
  .then(data => {
   if(data['condition']==true){
    all_reference_code();

     swal('success',data['message'],'success')
   }else{
    swal('Opps',data['message'],'error')

   }
   
   
  })
  .catch(error => {
    console.error(error)
    swal('Opps',data['message'],'error')
  })

}



window.onload = ()=>{
    
   all_reference_code();
}

let ref_code_one =   document.getElementsByClassName('ref_code_one')

for (const ele  of ref_code_one) {
   
   ele.addEventListener('keyup',function(){
       
      if(this.id != 6 && this.value.length >0){
    
       document.getElementById(Number(this.id)+1).focus();
      }
      let all_ref_code ='';
      for (const ele  of ref_code_one) {
       all_ref_code += ele.value
      }

      document.getElementsByName('reference_code')[0].value= all_ref_code
      
   })
}





function add_reference_code(){
    let reference_code_All = Object.fromEntries(new FormData(document.forms['reference_code_All']));

   console.log(reference_code_All)
    fetch('/reference_code_adding', {
    method: 'POST',
    body:JSON.stringify(reference_code_All),
    headers: new Headers({
                'Content-Type': 'application/json',
              
            })
  })
  .then(response => response.json())
  .then(data => {
    console.log(data);
if(data['condition']==true){
//   get_branch_all_data();
    swal("successful", "Successfully Added", "success"); 
    $('#exampleModal').modal('hide')
    all_reference_code();
}else{
    swal("Opps!", "Something went wrong", "error"); 
}
   

  })
}




function all_reference_code(){
  let elem = ``;
  fetch(`all_reference_code`)
  .then(response =>response.json())
  .then(data=>{

    let i = 1;
    data.forEach(d=>{
      elem += /*html*/`
    <tr>
      <td>${i++}</td>
       <td class="text-uppercase">${d['reference_code']}</td>
       <td>${d['status'] !=1?'<b style ="color:red">Used</b>':'<b style="color:green">Not Use</b>'}</td>
       <td>
        <a class="${d['status'] ==1?' btn btn-warning':' btn btn-dark'}"  disabled="${d['status'] !=1?'true':'false'} "  onclick="${d['status']==1?`action_reference('${d['id']}','get_one')`:``}"><i class="nav-icon fas fa-edit"></i> </a>
        <b>|</b>
       <a class="btn ${d['status'] ==1?' btn-danger':' btn-dark'}" disabled="${d['status'] !=1?'true':'false'} " ${d['status'] !=1?'true':'false'} onclick="${d['status']==1?`action_reference('${d['id']}','delete')`:``}"><i class="far fa-trash-alt"></i></a></td>  
    </tr>
    `;

    })

    document.getElementById('all_reference_code').innerHTML = elem;
  
  })
}

function action_reference(id,action){

fetch(`get_one_reference_code/${id}/${action}`)
.then(response=>response.json())
.then(data=>{
  if(action=='delete'){

  if(data['condition']==true){
    all_reference_code()
    swal("successful", `${data['message']}`, "success"); 
  }else if(data['condition']==false){
    swal("Opps!", `${data['message']}`, "error"); 
  }
}

if(action=='get_one'){
  let elem = '';
      
  let opData = '<option value="">Select District</option> ';
  data.forEach(d=>{


  District.forEach(function (data){
  opData += `<option  ${d['district']==data['name']?'selected':''} value="${data['name']}">${data['name']}</option>`;

  })
  


    elem +=/*html*/`
    <form name="reference_code_update">
                <div class="row">
                   
                  
                    

                   
                  

                
                        <input type='hidden'value="${d['id']}" name='id'/>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12" >
                        <label for="">Reference Code (রেফারেন্স কোড )</label>
                       
                        <input type="text" value="${d['reference_code']}" name="reference_code" class="form-control" id="">
                        <small id="" class="form-text text-muted"> </small>
                        
                      </div>

                </div>

                
           

        </form>
    
    `;
  })

  $('#update_branch_model').modal('show')
  document.getElementById('update_branch_container_body').innerHTML=elem;

}

})
}



//update branch 
function update_branch(){

  let reference_code_update = Object.fromEntries(new FormData(document.forms['reference_code_update']));

fetch('/reference_code_update', {
method: 'POST',
body:JSON.stringify(reference_code_update),
headers: new Headers({
            'Content-Type': 'application/json',
          
        })
})
.then(response => response.json())
.then(data => {
  
if(data['condition']==true){
  all_reference_code()
  $('#update_branch_model').modal('hide')

swal("successful", "Successfully Updated", "success"); 


}else{
swal("Opps!", "Something went wrong", "error"); 
}


})

}
  </script>

@endsection