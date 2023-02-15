{{-- @dd($data); --}}
@extends('master.master')

@section('content')
<style>
    .ref_number_box {
    display: grid;
    grid-template-columns: repeat(6,1fr);
    gap: 1rem;
}

.ref_res{
    position: absolute;
    top: 17rem;
    background: white;
    z-index: 200;
    width: 11rem;
    background: #efefef;
    /* display: none !important; */
   
}
.ref_res ul{
  padding: 2rem 0rem;
 
}

.ref_res li {
    list-style: none;
    cursor: pointer;
    border-bottom: 3px solid white;
    padding: 0rem 1rem
}

.ref_res li:hover{
color: white;
background: darkgrey;


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
            <h1 class="m-0">Reference Program</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reference Program</li>
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
            <h3 class="card-title"><button class="btn btn-warning"  data-toggle="modal" data-target=".bd-example-modal-lg">Add New Reference Program</button></h3>
        </div>
      
      </div>
      <!-- /.card-header -->
      <div class="card-body">

       
        
        
        
        <table class="table table-striped">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Name</th>
              <th scope="col">Phone</th>
              <th scope="col">Reference Code </th>
              <th scope="col">Action</th>
             
            </tr>
          </thead>
          <tbody id="get_branch_all_data">
           
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
    <div class="modal-content" style="position: relative">
        <div class="modal-header">
            <h5 class="modal-title">Add Reference Program</h5>
            
        </div>


        <div class="modal-body">

            <div class="container-fluid">
                <form name="add_reference_rogram">
                <div class="row">
                   
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="" class="text-capitalize"> Name </label>
                        <input type="text"class="form-control" name="name" id=""  placeholder=" Name">
                        <small id="" class="form-text text-muted"> </small>
                    </div>

                    

                
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="" class="text-capitalize"> Phone  </label>
                        <input type="text"class="form-control" name="phone" id=""  placeholder=" Phone">
                        <small id="" class="form-text text-muted"> </small>
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="" class="text-capitalize"> password </label>
                        <div class=" input-group">

                       
                       
                        <input type="password"class="form-control" name="password" id=""  placeholder=" Password">
                    

                        <div class="input-group-append" >
                            <div class="input-group-text cursor-pointer " onclick="show_password(this)">
                                <span id="icon_of" class="material-symbols-outlined  cursor-pointer"   style="cursor:  pointer !important;">visibility_off </span>

                                <span id="icon_on" class="material-symbols-outlined   cursor-pointer"  style="cursor:  pointer !important; display:none"> visibility  </span>
                            </div>
                        </div>
                        <small id="" class="form-text text-muted"> </small>

                    </div>

                    </div>

                   


                  
               

                        <div class="form-group col-lg-6 col-md-6 col-sm-12" >
                        <label for="">Reference Code (রেফারেন্স কোড )</label>
                        <div class="ref_number_box">
                            <input readonly type="text" maxlength="1"  class="form-control text-uppercase ref_code_one"  name="" id="1">
                            <input readonly type="text" maxlength="1"  class="form-control text-uppercase ref_code_one"  name="" id="2">
                            <input readonly type="text" maxlength="1"  class="form-control text-uppercase ref_code_one"  name="" id="3">
                            <input readonly type="text" maxlength="1"  class="form-control text-uppercase ref_code_one"  name="" id="4">
                            <input readonly type="text" maxlength="1"  class="form-control text-uppercase ref_code_one"  name="" id="5">
                            <input readonly type="text" maxlength="1"  class="form-control text-uppercase ref_code_one"  name="" id="6">
                           
                        </div>
                        <input type="hidden" value="" name="reference_code" class="form-control" id="">
                        <small id="" class="form-text text-muted"> </small>
                    </div>

                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="" class="text-capitalize"> Search Reference Code  </label>
                        <input type="text"class="form-control"onkeyup="search_reference_code(this);"  placeholder=" Search Reference Code ">
                        <small  class="form-text text-muted">
                       
                        </small>
                    </div>

                </div>

                
            </div>

        </form>
            
        <div class="ref_res" style="">
          <ul id="search_ref">
           
            </ul>  
        </div>
        </div>
    

     <div class="modal-footer">
        <button type="button" onclick="add_branch()" class="btn btn-primary">Add </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg"  id="update_branch_model"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Update Reference Program</h5>
            
        </div>


        <div class="modal-body">

            <div class="container-fluid" id="update_branch_container_body">
               

                
            </div>

      
            
        </div>
    

     <div class="modal-footer">
        <button type="button" onclick="update_reference_program()" class="btn btn-primary">Update </button>
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



window.onload = ()=>{
    
    get_branch_all_data()
}

let ref_code_one =   document.getElementsByClassName('ref_code_one')



function search_reference_code(e){
  console.log(e.value);
  if(e.value.length >=3){
    console.log(e)
    fetch(`search_reference_code/${e.value}`)
    .then(response=>response.json())
    .then(data=>{
      console.log(data);
      let elem='';
      data.forEach(d=>{
        elem +=`<li onclick="setReference('${d['reference_code']}')">${d['reference_code']}</li>`
      })
      document.getElementById("search_ref").innerHTML = elem
      // document.getElementsByClassName("ref_res")[0].style.display='block !important'
    })
  }
}


function add_branch(){
    let add_reference_rogram = Object.fromEntries(new FormData(document.forms['add_reference_rogram']));

   console.log(add_reference_rogram)
  
    fetch('add_reference_rogram', {
    method: 'POST',
    body:JSON.stringify(add_reference_rogram),
    headers: new Headers({
                'Content-Type': 'application/json',
              
            })
  })
  .then(response => response.json())
  .then(data => {
if(data['condition']==true){
  get_branch_all_data();

    swal("successful", "Successfully Added", "success"); 
    document.getElementsByName('reference_code')[0].value='';
    for (const ele  of ref_code_one) {
      ele.value='';
    }
    $('#exampleModal').modal('hide')
}else{
    swal("Opps!", "Something went wrong", "error"); 
}
   

  })
}

function select_district(e){
   
    document.getElementsByName('mail')[0].value = `${e.value.toLowerCase()}@pkaard.com`;
if(document.getElementsByName('mail')[1]){
  document.getElementsByName('mail')[1].value = `${e.value.toLowerCase()}@pkaard.com`;

}
  }

function show_password(e){
    if( e.children[1].style.display=='none'){
        e.children[1].style.display='block'
        e.children[0].style.display='none'
        document.getElementsByName('password')[0].type='text'
       
    }else{
        e.children[0].style.display='block'
        e.children[1].style.display='none'
         document.getElementsByName('password')[0].type='password'
       
    }
}

function get_branch_all_data(){
  let elem = ``;
  fetch(`get_all_reference_rogram`)
  .then(response =>response.json())
  .then(data=>{

    let i = 1;
    data.forEach(d=>{
      elem += /*html*/`
    <tr>
      <td>${i++}</td>
       <td>${d['name']}</td>  
       <td>${d['phone']}</td>  
     
       <td>${d['reference_code']}</td>
       <td>
        <a class="btn btn-warning"  onclick="action_branch('${d['id']}','get_one')"><i class="nav-icon fas fa-edit"></i> </a>
        <b>|</b>
       <a class="btn btn-danger"   onclick="action_branch('${d['id']}','delete')"><i class="far fa-trash-alt"></i></a></td>  
    </tr>
    `;

    })

    document.getElementById('get_branch_all_data').innerHTML = elem;

  })
}

function action_branch(id,action){

fetch(`handle_reperence_program_action/${id}/${action}`)
.then(response=>response.json())
.then(data=>{
  if(action=='delete'){

  if(data['condition']==true){
    get_branch_all_data();
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
    <form name="reference_program_updateing">
                <div class="row">
                   
                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="" class="text-capitalize"> Name </label>
                        <input type="text"class="form-control" value="${d['name']}" name="name" id=""  placeholder=" Name">
                        <small id="" class="form-text text-muted"> </small>
                    </div>

                    

                   

                    <div class="form-group col-lg-6 col-md-6 col-sm-12">
                        <label for="" class="text-capitalize"> Phone </label>
                        <input type="text"class="form-control" value="${d['phone']}" name="phone" id="mail2"  placeholder=" phone">
                        <small id="" class="form-text text-muted"> </small>
                    </div>

                
                        <input type='hidden'value="${d['id']}" name='id'/>
                        <div class="form-group col-lg-6 col-md-6 col-sm-12" >
                        <label for="">Reference Code (রেফারেন্স কোড )</label>
                       
                        <input type="text"  readonly value="${d['reference_code']}" name="reference_code" class="form-control text-uppercase" id="">
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

function setReference(e){
 const string = e;
const StringArray  = Object.assign([], string);
document.getElementsByName('reference_code')[0].value=e;
let i=0;
StringArray.forEach(d=>{
  document.getElementsByClassName('ref_code_one')[i++].value=d;
})

}

//update branch 
function update_reference_program(){

  let reference_program_updateing = Object.fromEntries(new FormData(document.forms['reference_program_updateing']));

fetch('/update_reference_program', {
method: 'POST',
body:JSON.stringify(reference_program_updateing),
headers: new Headers({
            'Content-Type': 'application/json',
          
        })
})
.then(response => response.json())
.then(data => {
  
if(data['condition']==true){
  get_branch_all_data();
  $('#update_branch_model').modal('hide')

swal("successful", "Successfully Updated", "success"); 


}else{
swal("Opps!", "Something went wrong", "error"); 
}


})

}
  </script>

@endsection