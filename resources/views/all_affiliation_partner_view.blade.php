{{-- @dd($data); --}}
@extends('master.master')

@section('content')

<style>
  .margin_top{
    margin-top:2rem !important;
  }

  .modal_upload_img{
  width: 10rem;
  height: 5rem;
}

.modal_upload_img img{
  width: 100%;
  height: 100%;
}

.img_close_icon{
    left: 9.2rem;
    top: -1.3rem;
    font-size: 1rem;
    cursor: pointer;
}

.has_room_check_box_container {
    display:flex;

  }

  .has_room_check_box_container input{
    width:2rem;
    height:1.4rem;
  }

  /* The container */
  .checkmark_container {
      display: block;
      position: relative;
      padding-left: 35px;
      margin-bottom: 1px;
      cursor: pointer;
      font-size: 16px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }
    
    /* Hide the browser's default checkbox */
    .checkmark_container input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
      height: 0;
      width: 0;
    }
    
    /* Create a custom checkbox */
    .checkmark {
      position: absolute;
      top: 0;
      left: 0;
      height: 25px;
      width: 25px;
      background-color: white;
    }
    
    /* On mouse-over, add a grey background color */
    .checkmark_container:hover input ~ .checkmark {
      background-color: #ccc;
    }
    
    /* When the checkbox is checked, add a blue background */
    .checkmark_container input:checked ~ .checkmark {
      background-color: #2196F3;
    }
    
    /* Create the checkmark/indicator (hidden when not checked) */
    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }
    
    /* Show the checkmark when checked */
    .checkmark_container input:checked ~ .checkmark:after {
      display: block;
    }
    
    /* Style the checkmark/indicator */
    .checkmark_container .checkmark:after {
      left: 9px;
      top: 5px;
      width: 5px;
      height: 10px;
      border: solid white;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
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
            <h4 class="m-0">List Affiliation Partner</h4>
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

    <div >
        <table class="table ">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Company</th>
                    <th>TIN No </th>
                    <th>Number</th>
                    <th>Mail</th>
                    <th>Details</th>
                    <th>NID</th>

                    <th>Action </th>

                    
                </tr>
            </thead>

            <tbody id="all_affiliation_table">
                {{-- <?php // $i=1; ?>
                @foreach($all_affiliation as $affiliation)
               
                <tr>
                    <td>{{$i++}}</td>
                    <td>{{$affiliation->company_name}}</td>
                    <td>{{$affiliation->company_tin}}</td>
                    <td>{{$affiliation->contact_number}}</td>
                    <td>{{$affiliation->email_address}}</td>
                   
                    <td><a class="btn btn-info btn-sm"  onclick="details_handle_modal('{{$affiliation->id}}')">Details</a></td>
                    <td><a class="btn btn-warning btn-sm" onclick="nid_handle_modal('{{$affiliation->id}}')" >NID Card</a></td>

                    <td> 
                      @if($affiliation->has_room ==1)
                        <a href="/add_multiple_affiliation_product?id={{$affiliation->id}}" class="btn btn-info btn-sm" >Store Room</a>
                      @elseif($affiliation->has_room ==0)
                      <a onclick="modal_show_product('{{$affiliation->id}}')" class="btn btn-success btn-sm" >Show Product </a>
                      @endif
                      </td>

                </tr>
                @endforeach --}}
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


  <!-- Room Edit  Modal --->
 <div class="modal fade " id="affiliation_partner_nid" tabindex="-1" role="dialog"  aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" >Affiliation Partner NID </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="card-body d-flex ">
        
        <input type="hidden" id="t_id">

        <div>
        <div class="form-group col-sm-12 col-md-6 col-lg-6" id="front_nid_input">
        <label for="modal_Img_room">Front NID </label>
        <input type="file"  name="front_nid" data-t_name="affiliation_partner" onchange="upload_affi_patnar_img(this)" class="form-control" placeholder="Enter Upto Percent">
        </div> 
     
        <div class="front_nid position-relative"  id="front_nid_img">
          <i class="position-absolute img_close_icon" onclick="delete_img(this)"> &#10007;</i>
          <div class="modal_upload_img">
            <img src="" alt="">
          </div>
        </div>
      </div>

      <div>
        <div class="form-group col-sm-12 col-md-6 col-lg-6" id="back_nid_input">
        <label for="modal_Img_room">Backend NID </label>
        <input type="file"  name="back_nid"  data-t_name="affiliation_partner"  onchange="upload_affi_patnar_img(this)" class="form-control" placeholder="Enter Upto Percent">
        </div> 
     
        <div class="front_nid position-relative"  id="back_nid_img">
          <i class="position-absolute img_close_icon" onclick="delete_img(this)"> &#10007;</i>
          <div class="modal_upload_img">
            <img src="" alt="">
          </div>
        </div>
      </div>
      
      <!-- /.card-body -->
    </div>
  </div>
</div>
</div> 



</div>



<!-- Modal for Affiliation Details button  -->
<div class="modal fade" id="modal_affiliation_details_btn" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Affiliation Partner Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
        
<div>
  <form class="row" name="affiliation_partner_form_details">
      <div class="form-group col-sm-12 col-md-6 col-lg-6">
        <label for="">Company Name </label>
        <input type="text" class="form-control"  name="company_name"  placeholder="Company Name">
      </div>

      <div class="form-group col-sm-12 col-md-6 col-lg-6">
          <label for="">Company Owner Name </label>
          <input type="text" class="form-control"  name="company_owner_name" placeholder="Company Owner Name">
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
          <label for="">Company TIN </label>
          <input type="text" class="form-control"  name="company_tin" placeholder="Company TIN ">
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
          <label for="">Company Address </label>
          <textarea style="height: 40px" name="company_address" class="form-control" placeholder="Company Address "> </textarea>
        </div>

        <div class="form-group col-sm-12 col-md-12 col-lg-12">
          <label for="">Contact Details </label>
         
          <div class="row">
              <div class="col-md-6 col-sm-12 col-lg-6   mb-3">
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text" id="nidno">Your Role</span>
                      </div>

                      <select class="form-control" name="contact_role" >
                          <option value="0">Select Role</option>
                          <option>Owner</option>
                          <option>Manager</option>
                          <option>Employer</option> 
                        </select>           
                      </div>  
              </div>
              <div class="col-md-6 col-ms-12 col-lg-6  mb-3 ">
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text " for="contact_full_name">Full Name</span>
                      </div>
                      <input type="text" placeholder="Full Name" class="form-control col-md-12"   name="contact_full_name" >
                    </div> 
              </div>

             

              <div class="col-md-6 col-ms-12 col-lg-6  mb-3 ">
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text "  for="dateofbirth">Contact Number</span>
                      </div>
                      <input type="text" placeholder="Contact Number" class="form-control col-md-12" name="contact_number">
                      <input type="hidden" name="id">

                    </div> 
              </div>

              <div class="col-md-6 col-ms-12 col-lg-6  mb-3 ">
                  <div class="input-group">
                      <div class="input-group-prepend">
                        <span class="input-group-text " for="">Email Address</span>
                      </div>
                      <input type="text" placeholder="Email Address" class="form-control col-md-12"  name="email_address" >
                    </div> 
              </div>
          </div>

        </div>
        <div class="form-group col-sm-12 col-md-12 col-lg-12">
          <div class="row">
              <div class="form-group col-sm-12 col-md-6 col-lg-6 has_room_check_box_container">
              <input type="checkbox" disabled="true" class="form-control"  name="has_room" placeholder="Company TIN ">
              <label for="">Has multi category discount ?  </label>
           </div>
          </div>
        </div>               
    </form>
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="update_affiliation_partner()">Update </button>
      </div>
    </div>
  </div>
</div>
 


<div class="modal fade" id="modal_affiliation_product" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Affiliation Partner Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">    
        <div>
          <form class="row" name="affiliation_product_update">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
              <label for="">Company Name</label>
              <input type="hidden" name="company_id">
              <input type="text" disabled='true' onfocus="focusin(this)" name="search_company_name_update" onkeypress="search_input(this)" onfocusout="focusout(this)"   class="form-control"placeholder="Enter Company Name">
                
              <div class="child_drop_down d-none">
                <ul>
                  @foreach($affiliation_partner as $partner)
                  <li id="{{$partner->id}}">{{$partner->company_name}}</li>
                  @endforeach
                </ul>
              </div>
           
            </div>
           
          
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label for="">Title </label>
                <input type="text" id="" name="title" class="form-control"placeholder="Enter Title">
              </div>
             
          
              
              <div class="form-group col-sm-12 col-md-4 col-lg-4  position-relative">
                <label for="">Category</label>
                <input type="hidden" name="category_id">
                <input onfocus="focusin(this)" name="search_category_update" onkeypress="search_input(this)" onfocusout="focusout(this)" type="text" id="" class="form-control"placeholder="Enter Category">
                <div class="child_drop_down d-none">
                  <ul id="category_container_update_com">
                    @foreach($category as $cate)
                    <li id="{{$cate->id}}">{{$cate->category_name}}</li>
                    @endforeach
                  </ul>
                </div>
              </div>
             
          
              <div class="form-group col-sm-12 col-md-4 col-lg-4  position-relative">
                <label for="">District</label>
                <input type="hidden" name="district_id">

                <input onfocus="focusin(this)" name="district_search_update" onkeypress="search_input(this)" onfocusout="focusout(this)"  type="text" id="" class="form-control"placeholder="Enter District">
                <div class="child_drop_down d-none">
                  <ul id="disctrict_container_update_com">
                    @foreach($district  as $dis)
                    <li id="{{$dis->id}}">{{$dis->name}}</li>
                    @endforeach
                  </ul>
                </div>
              </div>

              <div class="form-group col-sm-12 col-md-4 col-lg-4 position-relative">
                <label for="">Regular price</label>
                

                <input name="regular_price"  class="form-control" placeholder="Regular price">
                
              </div>
             
              <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label for="">Phone</label>
                <input type="text" id="" name="phone" class="form-control" placeholder="Enter Phone">
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
            
              <div class="form-group col-sm-12 col-md-12 col-lg-12">
                <label for="">Address </label>
               <textarea class="form-control" name="address"  placeholder="Enter Address" cols="5" rows="5"></textarea>
              </div>
             
            
              <div class="form-group col-sm-12 col-md-12 col-lg-12">
                <label for="">Product Details </label>
                <input type="hidden" name="id">
                <textarea id="compose-textarea"  class="form-control">
               <h4>Describe Your Product</h4>
                </textarea>
            </div>
           <div>
           </div>
          </form>
     
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="update_affiliation_product()">Update </button>
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

      <form name="image_handle">
        <input type="hidden" name="t_name">
        <input type="hidden" name="tc_name">
        <input type="hidden" name="t_id">
        <input type="hidden" name="c_t_c_name">

      </form>

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
    function product_details(){
        let url = location.origin
       window.history.pushState({urlPath:'/add_multiple_affiliation_product'}, "Home", '/add_multiple_affiliation_product');
      history.forward();

 }

 async function nid_handle_modal(value){

  $("#affiliation_partner_nid").modal("show")

  document.getElementById("t_id").value = value;
  get_one_affiliation_partner(value)
  console.log(value)
 }

 async function upload_affi_patnar_img(evt){

 

  const formData = new FormData();
    formData.append('pkaard_img',evt.files[0]);    
    try{
        const response = await fetch(`https://img.pkaard.com/upload_img.php`,{
            method:'POST',
            // mode: 'no-cors',
            body:formData           
        } );
       
        const result = await response.json();
        console.log(result);
        if(response.status==200){
         
                  let server_data  = {
              img_path:result['img_path'],
              t_name:evt.dataset.t_name,
              t_id: document.getElementById("t_id").value,
              tc_name:evt.name,
              c_t_c_name:"id"
              }

              console.log(server_data)

              try{
        const response = await fetch(`${location.origin}/default_img_path_uploader`,{
            method:'POST',
            body:JSON.stringify(server_data),
            headers: new Headers({
            'Content-Type': 'application/json',
          
        })       
        });
       
        const result = await response.json();
        console.log(result);
        if(response.status==200){
          if(result['condition'] == true){
            get_one_affiliation_partner(document.getElementById("t_id").value);
          } 
        }
    }catch(e){
        console.log(e);
    }

        }else{
        
          swal("Opps!", "Something went wrong in Image Server", "error");
        }
      
        
    }catch(e){
        console.log(e);
       

    }



 }

async function get_one_affiliation_partner (id){


try {
  const response = await fetch(`${location.origin}/get_one_affiliation_partner/${id}`)      
        const result = await response.json();
        
          let front_nid_img  =  document.getElementById("front_nid_img");
          let front_nid_input =  document.getElementById("front_nid_input");

          let back_nid_img  =  document.getElementById("back_nid_img");
          let back_nid_input =  document.getElementById("back_nid_input");

        if(response.status==200){

         if(result[0]['front_nid']==null){
          front_nid_img.style.display='none';
          front_nid_input.style.display='block'

         }else{
          front_nid_img.style.display='block';
          front_nid_input.style.display='none'
          front_nid_img.getElementsByTagName("img")[0].src = `https://img.pkaard.com/images/${result[0]['front_nid']}`;


         }

         if(result[0]['back_nid']==null){
          back_nid_img.style.display='none';
          back_nid_input.style.display='block'

         }else{
          back_nid_img.style.display='block';
          back_nid_input.style.display='none'
          back_nid_img.getElementsByTagName("img")[0].src = `https://img.pkaard.com/images/${result[0]['back_nid']}`;


         }

       


        }
  
} catch (error) {
  
}

 }

async function  details_handle_modal(id){

  $("#modal_affiliation_details_btn").modal("show")
try {
  const response = await fetch(`${location.origin}/get_one_affiliation_partner/${id}`)      
        const result = await response.json();       
      if(response.status ==200){
        let FormElem = document.forms['affiliation_partner_form_details'].elements;
        for (const name of document.forms['affiliation_partner_form_details']) {
          FormElem[`${name["name"]}`].value =  result[0][`${name["name"]}`];
          result[0]['has_room']==  1  && name["name"] == 'has_room'?FormElem.has_room.checked = true : FormElem.has_room.checked = false;         
        }
      }  
} catch (error) {
 console.log(error) 
}

 }

async function update_affiliation_partner(){

  let server_data = Object.fromEntries(new FormData(document.forms['affiliation_partner_form_details']));
console.log(server_data);


try{
        const response = await fetch(`${location.origin}/update_affiliation_partner`,{
            method:'POST',
            // mode: 'no-cors',
            body:JSON.stringify(server_data),
            headers: new Headers({
            'Content-Type': 'application/json',
          
        })
      })
       
        const result = await response.json();
        console.log(result);
        if(response.status==200){
          if(result.condition == true){

            all_affiliation_partner();
            swal("Thanks", `${result.message}`, "success");
            $("#modal_affiliation_details_btn").modal("hide")

          }else{

            swal("Opps", `${result.message}`, "error");
          }
        
        }
    }catch(e){
        console.log(e);
       
        swal("Opps", `Something went wrong`, "error");

    }

 }

 all_affiliation_partner();

async function all_affiliation_partner(){

  
try {
  const response = await fetch(`${location.origin}/all_affiliation_partner`)      
        const result = await response.json()
        console.log(result)
        // if(response.status==200){
          let view = "";
          let RoomBtn ="" ;
          let i =1;

          for (const affiliation of result) {

            if(affiliation.has_room ==1){
              RoomBtn = `<a href="/add_multiple_affiliation_product?id=${affiliation.id}" class="btn btn-info btn-sm" >Store Room</a>`
            }else {
              RoomBtn=  ` <a onclick="modal_show_product('${affiliation.id}')" class="btn btn-success btn-sm" >Product </a> | <a onclick="handle_product_img('${affiliation.id}')" class="btn btn-danger btn-sm" >Imaige </a>`
            } 
            view += `
            <tr>
                <td>${i++}</td>
                <td>${affiliation.company_name}</td>
                <td>${affiliation.company_tin}</td>
                <td>${affiliation.contact_number}</td>
                <td>${affiliation.email_address}</td>
                
                <td><a class="btn btn-info btn-sm"  onclick="details_handle_modal('${affiliation.id}')">Details</a></td>
                <td><a class="btn btn-warning btn-sm" onclick="nid_handle_modal('${affiliation.id}')" >NID Card</a></td>

                <td> 
                  ${RoomBtn}
                </td>

            </tr>
        
        
        `;
          }
         document.getElementById("all_affiliation_table").innerHTML = view;
  
} catch (error) {
  console.log(error)
}

 }

 async function modal_show_product(id){
$("#modal_affiliation_product").modal("show")

try {
  /*
    url path //get_one_affiliation_product_by_company_id is fetcing affiliation_product table 
  */
  const response = await fetch(`${location.origin}/get_one_affiliation_product_by_company_id/${id}`)      
        const result = await response.json(); 
        console.log(result);
        debugger;
        if(response.status ==200){
          $('#compose-textarea').summernote('code', result[0]['details']);

        let formElem = document.forms['affiliation_product_update'];
        document.getElementById("category_container_update_com").children.forEach((li)=>{
        if(li.id== result[0]['category_id'] ){
          formElem.search_category_update.value = li.innerText;
            return;
        }

        })
        document.getElementById("disctrict_container_update_com").children.forEach((li)=>{
        if(li.id== result[0]['district_id'] ){
          formElem.district_search_update.value = li.innerText;
          return;
        }

        
        })  

        let FormElem = document.forms['affiliation_product_update'].elements;
      
        if(isNaN(Number(result[0]['privilege'])) ==false){

          FormElem['discount_mark'].click();
          document.getElementById("input_discount").value =  result[0]['privilege'];
         
        }else if(isNaN(Number(result[0]['privilege'])) == true &&  result[0]['privilege'] =="free"){
          FormElem['free'].click();
        }else if(isNaN(Number(result[0]['privilege'])) == true  &&  result[0]['privilege'] =="bogo"){
          FormElem['bogo'].click();

        }

            for (const nameEl of document.forms['affiliation_product_update']) {

              for(const object_name in result[0]){

                if(nameEl["name"] == object_name && object_name != "discount" ){
            FormElem[`${nameEl["name"]}`].value =  result[0][`${nameEl["name"]}`];

                break;
              }
           }
        }
      }  
} catch (error) {
 console.log(error) 
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


  for (const check_box of document.querySelectorAll("input[type='checkbox']")) {
    check_box.onclick=function(){

      for (const check of document.querySelectorAll("input[type='checkbox']")) {
        check.checked=false;
    discount_container.classList.remove('d-none')
    input_discount.classList.add('d-none')
    
      }

      this.checked = true;
     if(this.id=='discount' && this.checked ==true){
    let input_div = this.parentElement.parentElement.parentElement;
    discount_container.classList.add('d-none')
    input_discount.classList.remove('d-none')
     }
    
    }
  }

  $(function () {
    //Add text editor
    $('#compose-textarea').summernote({
        placeholder: 'Describe Your Product<',
        tabsize: 2,
        height: 200,

    })
  })


 async function update_affiliation_product(){
    let server_data = Object.fromEntries(new FormData(document.forms['affiliation_product_update']));


    console.log(server_data)

    let privilege = '' ;
    if(server_data['discount_mark']=='on'){
      server_data["privilege"]= server_data['discount'].replace(/%/i,"");
      
    }else if(server_data['bogo']=='on'){
      server_data["privilege"] ="bogo";
    }else if(server_data['free']== "on"){
      server_data["privilege"] ="free";
    }
    server_data["details"]= $("#compose-textarea").summernote('code');



    try{
        const response = await fetch(`${location.origin}/update_affiliation_from_partner_view`,{
            method:'POST',
            body:JSON.stringify(server_data),
            headers: new Headers({
            'Content-Type': 'application/json',
          
        })       
        });
       
        const result = await response.json();
        console.log(result);
        if(response.status==200){
          
        if(result.condition == true){

        all_affiliation_partner();
        swal("Thanks", `${result.message}`, "success");
        // $("#modal_affiliation_product").modal("hide")
        modal_show_product(server_data["id"])
        
        }else{

        swal("Opps", `${result.message}`, "error");
        }
        }
    }catch(e){
        console.log(e);
    }

    
    console.log(server_data)

   
  }


  async function handle_product_img (id) {

    $("#img_upload_modal").modal("show")
    get_img_path(id);
  }


  async function get_img_path(id){

try{
      const response = await fetch(`${location.origin}/get_one_affiliation_product_by_company_id/${id}`)
       
      const result = await response.json();
     
      let view='';
      if(response.status==200){
       
      console.log(result.length )
      debugger;
      let img_src =   result[0]['img_path'] !=null ||  result[0]['img_path'] !=undefined?  result[0]['img_path'].split(","):[]
      console.log(img_src)
       
     let FormElem =   document.forms["image_handle"].elements;
     FormElem.t_id.value =  result[0]['company_id'];
     FormElem.tc_name.value = "img_path";
     FormElem.c_t_c_name.value = "company_id";
     FormElem.t_name.value = "affiliation_product"

     
      img_src.forEach((d)=>{
        
         view += `
        <div class="container_modal_upload_img position-relative">
        <i class="position-absolute img_close_icon" onclick="delete_img(this);"> &#10007;</i>
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

      document.getElementsByClassName("img_card_body")[0].innerHTML = view;
    }
      }
  catch(e){
      console.log(e);
  }

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
         
           
      
        
      debugger;

      let server_data = Object.fromEntries(new FormData(document.forms['image_handle']));

        server_data["img_path"] = result["img_path"]
          //upload_img_path_sub_product(server_data)
          console.log(server_data['t_id'])
          default_img_path_uploader(server_data,function(){
            get_img_path(server_data['t_id']);
          })

          }else{
          
            swal("Opps!", "Something went wrong", "error"); 

          }
        
        
    }catch(e){
        console.log(e);
       

    }


}


async function default_img_path_uploader (server_data={},callbackFun){


           

              console.log(server_data)

              try{
        const response = await fetch(`${location.origin}/default_img_path_uploader`,{
            method:'POST',
            body:JSON.stringify(server_data),
            headers: new Headers({
            'Content-Type': 'application/json',
          
        })       
        });
       
        const result = await response.json();
        console.log(result);
        if(response.status==200){
          if(result['condition'] == true){
            //get_one_affiliation_partner(document.getElementById("t_id").value);

            callbackFun();
          } 
        }
    }catch(e){
        console.log(e);
    }
}



async function delete_img(evt){

  $img_url = evt.nextElementSibling.children[0].src.split('/');
  let server_data = Object.fromEntries(new FormData(document.forms['image_handle']));
server_data['img_path'] = $img_url[$img_url.length - 1];

console.log(server_data)

  try{
        const response = await fetch(`${location.origin}/delete_img`,{
            method:'POST',
            body:JSON.stringify(server_data),
            headers: new Headers({
            'Content-Type': 'application/json',
          
        })       
        });
       
        const result = await response.json();
        console.log(result);
        if(response.status==200){
          if(result['condition'] == true){
            get_img_path(server_data['t_id']);
           // get_one_affiliation_partner(document.getElementById("t_id").value);
          }else{
            swal("Opps!", result['message'], "error");

          }
        }
    }catch(e){
        console.log(e);
        swal("Opps!","Something went Wrong", "error");

    }

}


     

</script>

@endsection