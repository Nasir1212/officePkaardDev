{{-- @dd($data); --}}
@extends('master.master')

@section('content')

<style>
 
  .margin_top{
    margin-top:2rem !important;
  }

  .child_drop_down {
    position: absolute;
    top: 4rem;
    width: 97%;
    height: 13rem;
    z-index: 1;
    overflow: hidden;
}
.child_drop_down ul {
    padding: 0;
    margin-top: 1rem;
    overflow: scroll;
    position: absolute;
    width: 100%;
    height: 100%;
}
    .child_drop_down ul li {
    list-style-type: none;
    background-color: white;
    border-bottom: 0.5px solid #ddd;
    padding: 1rem;
    cursor: pointer;
}

.child_drop_down ul li:hover{
  background-color: #ddd;
}

caption {
  
    text-align: center !important;
    caption-side: top !important;
}


.modal_upload_img{
  width: 10rem;
  height: 5rem;
}

.modal_upload_img img{
  width: 100%;
  height: 100%;
}

.img_card_body{
  display: grid;
  grid-template-columns: repeat(4,1fr);
  row-gap: 1.2rem;
}

.img_close_icon{
    left: 9.2rem;
    top: -1.3rem;
    font-size: 1rem;
    cursor: pointer;
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
            <h4 class="m-0">Product Store Panel </h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Affiliation Partner</li>
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
<div>
  <button class="btn btn-info btn-sm float-right mb-2"  data-toggle="modal" data-target="#myModal">Add Store Room </button>
</div>
    <div >
        <table class="table ">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Store Room </th>
                    <th>Upto Percent </th>
                    <th>Category</th>
                    <th>District </th>
                    <th>Action </th>

                    
                </tr>
            </thead>

            <tbody id="store_room_table">
               
               
            </tbody>
        </table>

    </div>

    <div id="product_details_id" style="display: none">
      <hr>
      <table class="table table-striped ">
        <caption>Product Details</caption>

          <thead class="thead-light ">
              <tr>
                  <th>#</th>
                  <th>Product Title </th>
                  <th>Regular Price </th>
                  <th>Percent</th>
                  <th>Store Room </th>
                  <th>Action </th>

                  
              </tr>
          </thead>

          <tbody id="product_details_table">
             
             
          </tbody>
      </table>

  </div>
    
      <!-- /.card-body -->
    </div>
  

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</div>

<div class="modal fade bd-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Store Room</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-body">

        <form class="row" name="affiliation_store_room">
           
           
          
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label for="">Room Title </label>
                <input type="text"  name="title" class="form-control"placeholder="Enter Title">
              </div>
             
          
              
              <div class="form-group col-sm-12 col-md-4 col-lg-4  position-relative">
                <label for="">Category</label>
                <input type="hidden" name="category_id">
                <input onfocus="focusin(this)" onkeypress="search_input(this)" onfocusout="focusout(this)" type="text"  class="form-control"placeholder="Enter Category">
                <div class="child_drop_down d-none">
                  <?php    $category = App\Http\Controllers\HomeController::all_category();?>
                  <ul>
                    @foreach($category as $cate)
                    <li id="{{$cate->id}}">{{$cate->category_name}}</li>
                    @endforeach
                  </ul>
                </div>
              </div>
             
          
              <div class="form-group col-sm-12 col-md-4 col-lg-4  position-relative">
                <label for="">District</label>
                <input type="hidden" name="district_id">

                <input onfocus="focusin(this)" onkeypress="search_input(this)" onfocusout="focusout(this)"  type="text"  class="form-control"placeholder="Enter District">
                <div class="child_drop_down d-none">
                  <?php $district =  App\Http\Controllers\HomeController::all_district()?>
                  <ul>
                    @foreach($district  as $dis)
                    <li id="{{$dis->id}}">{{$dis->name}}</li>
                    @endforeach
                  </ul>
                </div>
              </div>

              
             
              <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label for="">Upto percent</label>
                <input type="text"  name="discount" class="form-control" placeholder="Enter Upto Percent">
              </div>
             
             
             
            
              <div class="form-group col-sm-12 col-md-12 col-lg-12">
                <label for="">Address </label>
               <textarea class="form-control" name="address"  placeholder="Enter Address" cols="5" rows="5"></textarea>
              </div>
             
            
             
           <div>
           

            <div class="modal-footer">
              <button type="button" class="btn btn-info" onclick="add_store_room_data()">Submit </button>
              <button type="reset" class="btn btn-warning" >Reset </button>

            </div>
           </div>
          </form>
     


          
      
      <!-- /.card-body -->
    </div>
    </div>
  </div>
</div>

<!-- modal for add Product option -->

<div class="modal fade " id="add_product_modal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Affiliation Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-body">

        <form class="row" name="affiliation_product_add">
           
           
          
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
              <label for="">Product Title </label>
              <input type="text"  name="title" class="form-control"placeholder="Enter Product Title ">
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
              <label for="">Regula Price  </label>
              <input type="text" pattern="[0-9]"  title="Only Number "  name="regular_price" class="form-control"placeholder="Enter Regula Price ">
            </div>
                        
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
              <label for="">Privilege </label>
              <div class="row">
                  <div class="col-4 input-group mb-2 mr-sm-2">
                      <div id="discount_container" class="input-group-prepend">
                        <div class="input-group-text ">
                          <label class="checkmark_container ">Discount
                              <input id="discount" name="discount_mark"  type="checkbox">
                              <span class="checkmark"></span>
                            </label>

                        </div>
                      </div>
                      
                      <input type="text" id="input_discount" name="discount" class="form-control d-none" placeholder="Enter Discount" id="">

                    </div>

                    <div class="col-4 input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <label class="checkmark_container">BOGO
                              <input id="bogo" name="bogo" type="checkbox" >
                              <span class="checkmark"></span>
                            </label>
                        </div>
                      </div>
                    </div>


                    <div class="col-2 input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <label class="checkmark_container">FREE
                              <input id="free" name="free" type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                      </div>
                    </div>

                    
              </div>
          </div>
          <input type="hidden" name="affiliation_product_id" id="affiliation_product_id">

          <div class="form-group col-sm-12 col-md-12 col-lg-12">
            <label for="">Product Details </label>
            <textarea id="compose-textarea"  class="form-control">
           <h4> Describe Your Product </h4>
            </textarea>
        </div>
             
          
        </div>  

            <div class="modal-footer">
              <button type="button" class="btn btn-info" onclick="add_aff_sub_discount_product()">Submit </button>
              <button type="reset" class="btn btn-warning" >Reset </button>

            </div>
           </div>
          </form>
     


          
      
      <!-- /.card-body -->
    </div>
    </div>
  </div>
</div>


<!-- Edit Affiliation Product --->
<div class="modal fade " id="edit_product_modal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Update Affiliation Product</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-body">

        <form class="row" name="affiliation_product_edit">
           
           
          
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
              <label for="">Product Title </label>
              <input type="text"  name="title" class="form-control"placeholder="Enter Product Title ">
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
              <label for="">Regula Price  </label>
              <input type="text" pattern="[0-9]"  title="Only Number "  name="regular_price" class="form-control"placeholder="Enter Regula Price ">
            </div>
            <input type="hidden"  name="id" id="id">
      
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
              <label for="">Privilege </label>
              <div class="row">
                  <div class="col-4 input-group mb-2 mr-sm-2">
                      <div id="discount_container_edit" class="input-group-prepend">
                        <div class="input-group-text ">
                          <label class="checkmark_container ">Discount
                              <input id="discount_edit" name="discount_mark"  type="checkbox">
                              <span class="checkmark"></span>
                            </label>

                        </div>
                      </div>
                      
                      <input type="text" id="input_discount_edit" name="discount" class="form-control d-none" placeholder="Enter Discount" id="">

                    </div>

                    <div class="col-4 input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <label class="checkmark_container">BOGO
                              <input  name="bogo" type="checkbox" >
                              <span class="checkmark"></span>
                            </label>
                        </div>
                      </div>
                    </div>


                    <div class="col-2 input-group mb-2 mr-sm-2">
                      <div class="input-group-prepend">
                        <div class="input-group-text">
                          <label class="checkmark_container">FREE
                              <input  name="free" type="checkbox">
                              <span class="checkmark"></span>
                            </label>
                        </div>
                      </div>
                    </div>

                    
              </div>
          </div>
          <input type="hidden"  id="edit_affiliation_product_id" value="">

          <div class="form-group col-sm-12 col-md-12 col-lg-12">
            <label for="">Product Details </label>
            <textarea id="compose-textarea_edit"  class="form-control">
           <h4> Describe Your Product </h4>
            </textarea>
        </div>
             
          
        </div>  

            <div class="modal-footer">
              <button type="button" class="btn btn-info" onclick="update_aff_sub_discount_product()">Update </button>
              <button type="reset" class="btn btn-warning" >Reset </button>

            </div>
           </div>
          </form>
     

       
        
          
      
      <!-- /.card-body -->
    </div>
    </div>
  </div>
</div>


<!-- Room Image Modal --->
<div class="modal fade " id="upload_room_image" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Upload Room Image </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-body">

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
        <label for="modal_Img_room"><img style="width: 4rem;height: 4rem;cursor: pointer;" src="{{ asset('assets/images/2997933.png')}}" alt=""></label>
        <input type="file" style="display: none"  id="modal_Img_room" onchange="upload_store_room_img(this)" class="form-control" placeholder="Enter Upto Percent">
        </div> 
        <input type="hidden" id="img_path_id">
     
      
      <!-- /.card-body -->
    </div>
    </div>
  </div>
</div>


<!-- Image model --->
<div class="modal fade " id="img_upload_modal" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Upload Image for Product </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <input type="hidden" id="sub_product_category_db_id" value="">

      <div class="card-body img_card_body ">
              
        <div class="container_modal_upload_img position-relative">
          <div class="modal_upload_img">
            <label for="upload_img_1"><img style="width: 4rem;height: 4rem;cursor: pointer;" src="{{ asset('assets/images/2997933.png')}}" alt=""></label>
            <input style="display: none" type="file" onchange="handle_img(this)" name="" id="upload_img_1">
          </div>
        </div>


      <!-- /.card-body -->
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
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
  
     
<script>

$(function () {
    //Add text editor
    $('#compose-textarea').summernote({
        placeholder: 'Describe Your Product',
        tabsize: 2,
        height: 200,

    })

      $('#compose-textarea_edit').summernote({
        placeholder: 'Describe Your Product',
        tabsize: 2,
        height: 200,

    })


  })


 var view= ''
 async function store_room_data(){
    const searchParams = new URLSearchParams(window.location.search);
 //searchParams.get('id');
try {
  const response = await fetch(`${location.origin}/get_by_company_id_room_data/${searchParams.get('id')}`);
  const result = await response.json();
console.log(result)
result.forEach((d,i)=>{
   view +=`
  <tr>
    <td>${++i}</td>
    
    <td>${d['title']}</td>
    <td>${d['discount']}</td>
    <td>${d['category_name']}</td>
    <td>${d['name']}</td>
    <td><button class='btn btn-sm btn-warning' onclick='edit_store_room(${d['id']})'>Edit</button>
  <button class='btn btn-sm btn-success' onclick='add_product(${d['id']})'>Add Product </button>
  <button class='btn btn-sm btn-warning' onclick='get_one_aff_sub_discount_product(${d['id']})'>List Product </button>
  <button class='btn btn-sm btn-info' onclick='model_upload_img(${d['id']})'>Image</button>
</td>

  </tr>
  
  `;
})
document.getElementById("store_room_table").innerHTML = view;
 
} catch (error) {
  console.log(error)
}
  }
  store_room_data();


async function add_store_room_data(){
  const searchParams = new URLSearchParams(window.location.search);
  var form_data = Object.fromEntries(new FormData(document.forms['affiliation_store_room']));
  form_data['company_id'] = searchParams.get('id');
   console.log(form_data)
  try{
        const response = await fetch(`${location.origin}/add_store_room_data`,{
            method:'POST',
            body:JSON.stringify(form_data),
            headers: new Headers({
            'Content-Type': 'application/json',
          
        })
            
           
            
        } );
       
        const result = await response.json();
        console.log(result);
        if(response.status==200){
          if(result['condition'] == true)
          store_room_data();
      swal({
      title: "Successfully Inserted Data",
      timer: 1300
      });
        
        }
    }catch(e){
        console.log(e);
      

    }



}

    function focusin (evt){
    evt.nextElementSibling.classList.remove("d-none");
   }

   function focusout(evt){
    let li =   evt.nextElementSibling.children[0].children
  for (let i = 0; i < li.length; i++) {
  li[i].onclick=function(){
    if(this.tagName=='LI'){
        evt.value = this.innerText
        evt.previousElementSibling.value = this.id
     evt.nextElementSibling.classList.add("d-none");
    }
  }
 }
   }

   function search_input(evt){
    
    let input_value =   evt.value.toUpperCase();
    let li =   evt.nextElementSibling.children[0].children
   
    for (let i = 0; i < li.length; i++) {
   
    if (li[i].innerText.toUpperCase().indexOf(input_value) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
   }
  }


  function add_product(id){
  console.log(id)
 document.getElementById('affiliation_product_id').value=id;
    $('#add_product_modal').modal('show')
  
  }

 
function handle_check_box(Elm,discount_container,input_discount){

  for (const check_box of Elm) {
    check_box.onclick=function(){

      for (const check of Elm) {
        check.checked=false;
    discount_container.classList.remove('d-none')
    input_discount.classList.add('d-none')
    
      }

      this.checked = true;
     if(this.id=='discount' || this.id =='discount_edit' && this.checked ==true){
    let input_div = this.parentElement.parentElement.parentElement;
    discount_container.classList.add('d-none')
    input_discount.classList.remove('d-none')
     }
    
    }
  }


}


handle_check_box(document.getElementsByName("affiliation_product_add")[0].querySelectorAll("input[type='checkbox']"),document.getElementById("discount_container"),document.getElementById("input_discount"));
handle_check_box(document.getElementsByName("affiliation_product_edit")[0].querySelectorAll("input[type='checkbox']"),document.getElementById("discount_container_edit"),document.getElementById("input_discount_edit"));

  async function add_aff_sub_discount_product(){

    form_data = Object.fromEntries(new FormData(document.forms['affiliation_product_add']));
    var textareaValue = $("#compose-textarea").summernote('code');
    let privilege = '' ;
    if(form_data['discount_mark']=='on'){
      privilege = form_data['discount'].replace(/%/i,"");
      
    }else if(form_data['bogo']=='on'){
      privilege ="bogo";
    }else if(form_data
    
    ['free']== "on"){
      privilege ="free";
    }

    let server_data = {
      ...form_data,
      details:textareaValue,
      privilege:privilege,
    }
    console.log(server_data)
    try{
        const response = await fetch(`${location.origin}/add_aff_sub_discount_product`,{
            method:'POST',
            body:JSON.stringify(server_data),
            headers: new Headers({
            'Content-Type': 'application/json',        
        })         
        } );
       
        const result = await response.json();
        console.log(result);
        if(response.status==200){
          if(result['condition'] == true)
          $('#add_product_modal').modal('hide')
      swal({
      title: "Successfully Inserted Data",
      timer: 1300
      });
      

      get_one_aff_sub_discount_product(document.getElementById("affiliation_product_id").value)
        
        }
    }catch(e){
        console.log(e);
    }

  }
 async function get_one_aff_sub_discount_product(id){
 let  view = '';
  try{
        const response = await fetch(`${location.origin}/get_one_aff_sub_discount_product/${id}`)      
        const result = await response.json();
        console.log(result);
       
        if(response.status==200){
          if(result.length >0){
            result.forEach((d,i)=>{
   view +=`
  <tr>
    <td>${++i}</td>
    
    <td>${d['title']}</td>
    <td>${d['regular_price']}</td>
    <td>${d['privilege']}</td>
    <td>${d['room_name']}</td>
    <td><button class='btn btn-sm btn-warning' onclick='edit_product_details(${d['id']})'>Edit</button>
  <button class='btn btn-sm btn-warning' onclick='ImgUploadModal(${d['id']})'>Image </button></td>


  </tr>
  
  `;
})
 

$("#product_details_id").fadeIn("slow");
document.getElementById("product_details_table").innerHTML = view;
          }else{

            $("#product_details_id").fadeOut("slow");

          }
        }
        
    }catch(e){
        console.log(e);
    }
  }

async function edit_product_details(id){
  
  const response = await fetch(`${location.origin}/get_one_edit_product_details/${id}`)      
        const result = await response.json();
        console.log(result);
      
    
      document.getElementById("input_discount_edit").value = '';
      document.getElementsByName('bogo')[1].checked = false;
      document.getElementsByName('free')[1].checked = false;
      document.getElementById("discount_edit").checked =false;
      document.getElementById("discount_container_edit").classList.remove("d-none")
      document.getElementById("input_discount_edit").classList.add("d-none")


      if(result.length>0){
      document.getElementsByName('regular_price')[1].value = result[0]['regular_price'];
      document.getElementsByName('title')[2].value = result[0]['title'];
      document.getElementById("id").value = result[0]['id'];
      
      document.getElementById("edit_affiliation_product_id").value = result[0]['affiliation_product_id'];
      }
      
    if(/\d/.test(result[0]['privilege'])==true){
    document.getElementById("discount_edit").click();
    document.getElementById("input_discount_edit").value = result[0]['privilege']
    }
    if(result[0]['privilege']=='bogo'){
      document.getElementsByName('bogo')[1].checked = true
    }
    if(result[0]['privilege']=='free'){
      document.getElementsByName('free')[1].checked = true
    }
    $('#compose-textarea_edit').summernote('code', result[0]['details']);

  $('#edit_product_modal').modal('show')
}


async function update_aff_sub_discount_product(){

form_data = Object.fromEntries(new FormData(document.forms['affiliation_product_edit']));
    var textareaValue = $("#compose-textarea_edit").summernote('code');
    let privilege = '' ;
    if(form_data['discount_mark']=='on'){
      privilege = form_data['discount'].replace(/%/i,"");
      
    }else if(form_data['bogo']=='on'){
      privilege ="bogo";
    }else if(form_data
    
    ['free']== "on"){
      privilege ="free";
    }

    let server_data = {
      ...form_data,
      details:textareaValue,
      privilege:privilege,
    }
    console.log(server_data)

    
    try{
        const response = await fetch(`${location.origin}/update_aff_sub_discount_product`,{
            method:'POST',
            body:JSON.stringify(server_data),
            headers: new Headers({
            'Content-Type': 'application/json',        
        })         
        });
       
        const result = await response.json();
        console.log(result);
        if(response.status==200){
          if(result['condition'] == true)
      
      swal({
      title: "Successfully Updated",
      timer: 1300
      });

      get_one_aff_sub_discount_product(document.getElementById("edit_affiliation_product_id").value)
      $('#edit_product_modal').modal('hide')
        }
    }catch(e){
        console.log(e);
    }

}


async function ImgUploadModal  (id){
  $('#img_upload_modal').modal('show')
  document.getElementById("sub_product_category_db_id").value = id;
  get_img_path(id)
}

async function handle_img(e){
  console.log(e.files[0])
  const formData = new FormData();
    formData.append('pkaard_img',e.files[0]);    
    try{
        const response = await fetch(`https://img.pkaard.com/upload_img.php`,{
            method:'POST',
            // mode: 'no-cors',
            body:formData           
        } );
       
        const result = await response.json();
        console.log(result);
        if(response.status==200){
         
           
          let server_data = {
          product_id:document.getElementById("sub_product_category_db_id").value,
          img_path:result['img_path']
         }
          upload_img_path_sub_product(server_data)

          }else{
          
            swal("Opps!", "Something went wrong", "error"); 

          }
        
        
    }catch(e){
        console.log(e);
       

    }


}


async function upload_img_path_sub_product(data){
  console.log(data)

  try{
        const response = await fetch(`${location.origin}/upload_img_path_sub_product`,{
            method:'POST',
            // mode: 'no-cors',
            body:JSON.stringify(data),
            headers: new Headers({
            'Content-Type': 'application/json',        
        })         
        } );
       
        const result = await response.json();
        console.log(result);
        if(response.status==200){
          if(result.condition == true){
            get_img_path(document.getElementById("sub_product_category_db_id").value)
          }else{
          
            swal("Opps!", "Something went wrong", "error"); 

          }
        
        }
    }catch(e){
        console.log(e);
       

    }
}
async function get_img_path(id){

  try{
        const response = await fetch(`${location.origin}/get_img_path_aff_sub_discount_product/${id}`)
         
        const result = await response.json();
        console.log(result);
        let view='';
        if(response.status==200){
         
        console.log(result.length )
        debugger;
        let img_src =   result[0]['img_path'] !=null? result[0]['img_path'].split(","):[]
        console.log(img_src)
         
        img_src.forEach((d)=>{
          
           view += `
          <div class="container_modal_upload_img position-relative">
          <i class="position-absolute img_close_icon"> &#10007;</i>
          <div class="modal_upload_img">
            <img src="https://img.pkaard.com/images/${d}" alt="">
          </div>
        </div>
      
          
          `;
        })

        view +=` <div class="container_modal_upload_img position-relative">
          <div class="modal_upload_img">
            <label for="upload_img_1"><img style="width: 4rem;height: 4rem;cursor: pointer;" src="{{ asset('assets/images/2997933.png')}}" alt=""></label>
            <input style="display: none" type="file" onchange="handle_img(this)" name="" id="upload_img_1">
          </div>
        </div>`;
        console.log(view)

        document.getElementsByClassName("img_card_body")[0].innerHTML = view;
      }
        }
    catch(e){
        console.log(e);
    }

    }
  

 function model_upload_img(d){
document.getElementById("img_path_id").value = d;
  $('#upload_room_image').modal('show')

  
 }

 async function upload_store_room_img_path(path){
console.log(document.getElementById("img_path_id").value)
  let formData = {
    img_path:path,
    id:document.getElementById("img_path_id").value
  }
  try{
        const response = await fetch(`${location.origin}/upload_store_room_img_path`,{
            method:'POST',
            // mode: 'no-cors',
            body:formData           
        } );
       
        const result = await response.json();
        console.log(result);
        if(response.status==200){
          if(result.status == true){
         
        

          }else{

            
          }
        
        }
    }catch(e){
        console.log(e);
       

    }
 }



 async function upload_store_room_img(d){
  const formData = new FormData();
    formData.append('pkaard_img',d.files[0]);    
    try{
        const response = await fetch(`https://img.pkaard.com/upload_img.php`,{
            method:'POST',
            // mode: 'no-cors',
            body:formData           
        } );
       
        const result = await response.json();
        console.log(result);
        if(response.status==200){
          if(result.status == true){
         
          upload_store_room_img_path(result['img_path'])

          }else{

            
          }
        
        }
    }catch(e){
        console.log(e);
       

    }


}


</script>

@endsection