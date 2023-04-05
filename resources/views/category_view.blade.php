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
            <h1 class="m-0">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">category</li>
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
            <h3 class="card-title"><button class="btn btn-warning"  data-toggle="modal" data-target=".bd-example-modal-lg">Add New Category</button></h3>
        </div>
      
      </div>
      <!-- /.card-header -->
      <div class="card-body">

       
        
        
        
        <table class="table table-striped">
          <thead class="thead-light">
            <tr>
              <th scope="col">#</th>
              <th scope="col">Category Name </th>
              <th scope="col">Action</th>
             
            </tr>
          </thead>
          <tbody id="all_category">
           
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
    <div class="modal-dialog modal-sm">
      <div class="modal-content" style="position: relative">
         
          <div class="modal-body">
  
              <div class="container-fluid">
                  <form name="add_category">
                    <div class="row">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <label for="" class="text-capitalize"> Category Name </label>
                            <input type="text"class="form-control" name="category_name" id=""  placeholder="Enter Category Name">
                            <input type="hidden"class="form-control" name="type" value="add">

                        </div> 
                        <button type="button" onclick="add_category_name()" class="btn btn-primary btn-block">Add </button>
                    </div>
                    </form>
              
       
          </div>
      </div>
    </div>
  </div>
</div>
  



<div class="modal fade bd-example-modal-lg"  id="update_modal"  tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content" style="position: relative">
         
          <div class="modal-body">
  
              <div class="container-fluid">
                  <form name="update_category">
                    <div class="row">
                        <div class="form-group col-lg-12 col-md-12 col-sm-12">
                            <label for="" class="text-capitalize"> Update Category Name </label>
                            <input type="text"class="form-control" name="category_name" id=""  placeholder="Enter Category Name">
                            <input type="hidden"class="form-control" name="type" >

                        </div> 
                        <button type="button" onclick="update_category_action()" class="btn btn-primary btn-block">Update </button>
                    </div>
                    </form>
              
       
          </div>
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

<script>
  
  
  function all_category(){
    let tr  =``
    fetch('/all_category')

    .then(response => response.json())
    .then(data => {
        console.log(data)

let i = 1;
data.forEach(cat=>{
    tr += `
    <tr>
        <td>${i++}</td>
        <td>${cat['category_name']}</td>
        <td><button onclick="update_category_model('${cat['id']}','${cat['category_name']}')" class="btn btn-info"><i class="far fa-edit" aria-hidden="true"></i> Edit </button></td>
    </tr>
    `
})

console.log(tr)
        //all_category.innerHTML = tr;
//console.log(all_category)
document.getElementById("all_category").innerHTML  = tr;
    })
  }
  all_category();

  function add_category_name(){
 
    let form_data=    Object.fromEntries(new FormData(document.forms["add_category"]));
            
        fetch('/category_action', {
            method: 'POST',
            body:JSON.stringify(form_data),
            headers: new Headers({
                        'Content-Type': 'application/json',
                    
                    })
        })
        .then(response => response.json())
        .then(data => {
        if(data['condition']==true){
            swal("successful", "Successfully added", "success"); 
            all_category();
                $('#exampleModal').modal('hide')
        }else{
            swal("Opps!", "Something went wrong", "error"); 
        }
    

  })
    
  }

  function update_category_model(id,cate_name){
    console.log(id)
    document.getElementsByName("type")[1].value = id;
    document.getElementsByName("category_name")[1].value = cate_name;
    $('#update_modal').modal('show')

    

  }

  function update_category_action(){
    let form_data=    Object.fromEntries(new FormData(document.forms["update_category"]));
            
            fetch('/category_action', {
                method: 'POST',
                body:JSON.stringify(form_data),
                headers: new Headers({
                            'Content-Type': 'application/json',
                        
                        })
            })
            .then(response => response.json())
            .then(data => {
            if(data['condition']==true){
                swal("successful", "Successfully Updated", "success"); 
                all_category();
                $('#update_modal').modal('hide')

            }else{
                swal("Opps!", "Something went wrong", "error"); 
            }
        
    
      })
  }


</script>





@endsection