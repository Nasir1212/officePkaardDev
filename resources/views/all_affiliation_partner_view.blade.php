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
          <i class="position-absolute img_close_icon"> &#10007;</i>
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
          <i class="position-absolute img_close_icon"> &#10007;</i>
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
              tc_name:evt.name
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
            console.log(affiliation)

            if(affiliation.has_room ==1){
              RoomBtn = `<a href="/add_multiple_affiliation_product?id=${affiliation.id}" class="btn btn-info btn-sm" >Store Room</a>`
            }else {
              RoomBtn=  ` <a onclick="modal_show_product('${affiliation.id}')" class="btn btn-success btn-sm" >Show Product </a>`
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

        console.log(view);
        console.log("HI")



      //  }
  
} catch (error) {
  console.log(error)
}

 }





</script>

@endsection