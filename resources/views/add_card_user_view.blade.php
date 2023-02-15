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
            <h1 class="m-0">Add Card User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Card User</li>
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
        <h3 class="card-title">Add Your Card User</h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">

        <div class="registration_container">
            
            <div class="form registration_steping registration_step_one ">
        
                    <h4 class="text-warning text-center font-weight-bold mb-3">Step One</h4>     
        
             <div>
                   
        
        <form name="form_data">
        <div class="row">
        
        <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for="">Phone Number ( মোবাইল নাম্বার )  <i class="text-danger">*</i></label>
            <input type="text" name="phone_number" class="form-control" id="" placeholder="Phone Number">
            <small id="" class="form-text text-muted"> </small>
        </div>
        
        
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for=""> Email (ইমেইল) <i class="text-danger">*</i></label>
            <input type="text" name="email" class="form-control" id="" aria-describedby="emailHelp" placeholder=" Email Address ">
            <small id="" class="form-text text-muted"> </small>
        </div>
        
        <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="">How did you hear about the Pkaard?  (আপনি Pkaard সম্পর্কে কোন মাধ্যম থেকে জেনেছেন) <i class="text-danger">*</i></label>
            <select  name="mediam" id="" class="form-control">
                <option value="">Select Your Choice</option>
                <option value="Website">Website</option>
                <option value="Facebook">Facebook</option>
                <option value="LinkedIn">LinkedIn</option>
                <option value="Instagram">Instagram</option>
                <option value="What’s App ">What’s App </option>
                <option value="Email">Email</option>
                <option value="Friends/Family">Friends/Family</option>
                <option value="Promotional SMS">Promotional SMS</option>
                <option value="District Coordinator ">District Coordinator </option>
                <option value="Social Influencer ">Social Influencer </option>
                <option value="Advertisement ">Advertisement </option>
                <option selected='true' value="BACKHAND ">BACKHAND </option>
                <option value="Other">Other </option>
            </select>
            <small id="" class="form-text text-muted"> </small>
        </div>
        
        
        <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for="">Reference Code (রেফারেন্স কোড )</label>
            <div class="ref_number_box">
                <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="1">
                <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="2">
                <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="3">
                <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="4">
                <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="5">
                <input type="text" maxlength="1"  class="form-control ref_code_one"  name="" id="6">
               
            </div>
            <input type="hidden" value="" name="reference_code" class="form-control" id="">
            <small id="" class="form-text text-muted"> </small>
        </div>
        
        
        
        
        
        
      
        
        </div>
        
       
        
                   
                </div>
            </div>
        
            <div class="form registration_steping  registration_step_two  ">
        
                <h4 class="text-warning text-center font-weight-bold mb-3">Step Two</h4>     
        
            <div>
                
        
          
            <div class="row">
        
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="" class="text-capitalize"> Full Name in English  (ইংরেজিতে পূর্ণ নাম ) <i class="text-danger">*</i> </label>
            <input type="text"class="form-control" name="full_name" id="" aria-describedby="emailHelp" placeholder="Name">
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for=""  class="text-capitalize"> nationality(জাতীয়তা)  <i class="text-danger">*</i></label>
            <input type="text" value="Bangladeshi" name="nationality" class="form-control text-capitalize" id="" placeholder="nationality">
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
           
        
        
            
            <div class="form-group  col-lg-6 col-md-6 col-sm-12">
                <label for="" class="text-capitalize"> Date of Birth (জন্ম তারিখ)<i class="text-danger">*</i> </label>
               
                <input type="text" id="datemask"  name="date_of_birth" class="form-control" placeholder="dd/mm/yyyy" data-inputmask-alias="datetime" data-inputmask-inputformat="mm/dd/yyyy" data-mask="" inputmode="numeric">
                {{-- <input type='text' name="date_of_birth"  placeholder="dd/mm/yyyy" class="form-control"id="datetimepicker4"/> --}}
                <small id="" class="form-text text-muted"> </small>
               
             </div>
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for="">Gender (লিঙ্গ )  <i class="text-danger">*</i></label>
            <select name="gender" id="" class="form-control">
            <option value="">Select Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="others">Others</option>
            </select>
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for="">Division (বিভাগ )  <i class="text-danger">*</i></label>
            <select name="division" id="division" onchange="handle_division(this)" class="form-control">
            <option value="">Select Division</option>
            
            </select>
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for="">District (জেলা )  <i class="text-danger">*</i></label>
            <select name="district" id="district"  class="form-control">
            <option value="">Select District</option>
           
            </select>
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <label for="" class="text-capitalize"> Profession  (পেশা) <i class="text-danger">*</i> </label>
                <input type="text"class="form-control" name="profession" id="" aria-describedby="emailHelp" placeholder=" Profession ">
                <small id="" class="form-text text-muted"> </small>
                </div>
            
        
        
            </div>
        
       
        
                
            </div>
            </div>
        
            <div class="form registration_steping  registration_step_three  ">
        
                <h4 class="text-warning text-center font-weight-bold mb-3">Step Three</h4> 
                <h5 class="text-danger text-center font-weight-bold mb-3" style="font-size: 1.8rem;">Card Delivery Address </h5>    
                <h5 class="text-danger text-center font-weight-bold mb-3" style="font-family: 'Bangla', Arial, sans-serif !important;">(কার্ড পাঠানোর ঠিকানা) </h5>    
            <div>
                
        
            <div class="row">
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="" class="text-capitalize"> Apartment No  (এপার্টমেন্ট  নং) <i class="text-danger">*</i> </label>
            <input type="text"class="form-control" name="cda_apartment_no" id="" aria-describedby="emailHelp" placeholder=" Apartment No ">
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for=""  class="text-capitalize"> House No <b> /</b> Holding No (বাসা নং)  <i class="text-danger">*</i></label>
            <input type="text"  class="form-control text-capitalize" name="cda_house_no" id="" placeholder="House No / Holding No">
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for=""  class=""> Road No  (রোড নং) <i class="text-danger">*</i></label>
          
            <input type="text" placeholder="Road No " name="cda_road_no" class="form-control " >
            <small id="" class="form-text text-muted"> </small>
        
            </div>
            
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
            <label for="" class="text-capitalize"> Area  <b> /</b> Village   (এলাকা  <b> /</b> গ্রাম) <i class="text-danger">*</i> </label>
            <input type="text"class="form-control" id="" name="cda_village" aria-describedby="emailHelp" placeholder=" Area / Village ">
            <small id="" class="form-text text-muted"> </small>
            </div>
        
            
            <div class="form-group col-lg-6 col-md-6 col-sm-12" >
                <label for="">Division (বিভাগ )  <i class="text-danger">*</i></label>
                <select name="cda_division" id="cda_division" onchange="handle_cda_division(this)" class="form-control">
                <option value="">Select Division</option>
               
                </select>
                <small id="" class="form-text text-muted"> </small>
                </div>
        
        
        
                <div class="form-group col-lg-6 col-md-6 col-sm-12" >
                <label for="">District (জেলা )  <i class="text-danger">*</i></label>
                <select name="cda_district" id="cda_district"  class="form-control">
                <option value="">Select District</option>
               
                </select>
                <small id="" class="form-text text-muted"> </small>
                </div>
        
        
        
                <div class="form-group col-lg-6 col-md-6 col-sm-12" >
                <label for="">Upzilla ( উপজেলা ) </label>
                <input type="text"  name="cda_upzilla"  id="cda_upzilla" placeholder="Upzilla"   class="form-control">
                {{-- <select name="cda_upzilla" id="cda_upzilla" class="form-control">
                <option value="">Select Upzilla</option>
                
                </select> --}}
                <small id="" class="form-text text-muted"> </small>
                </div>
        
                <div class="form-group col-lg-6 col-md-6 col-sm-12" >
            <label for=""  class="text-capitalize"> Police station <b> /</b> Thana (থানা )  <i class="text-danger">*</i></label>
            <input type="text"  class="form-control text-capitalize" name="cda_Thana" id="" placeholder="Police station /  Thana ">
            <small id="" class="form-text text-muted"> </small>
            </div>
        
        
        
        
        
            <div class="form-group col-lg-12 col-md-12 col-sm-12">
            <label for="" class="text-capitalize"> Address in Details   (বিস্তারিত ঠিকানা) <i class="text-danger">*</i> </label>
            <textarea type="text"class="form-control"rows="5" id="" name="cda_address_details" placeholder="Address in Details" aria-describedby="emailHelp"></textarea>
            <small id="" class="form-text text-muted"> </small>
            </div>
        
              <div class="form-group col-12">
            <div class="form-check ">
                <input type="checkbox" class="form-check-input" name="agree_condition" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">I have Read the terms and conditions and I agree to the terms of Data usage. (আমি তথ্যের ব্যবহার বিষয়ক শর্তাবলী পড়েছি এবং সম্মতি প্রদান করছি)  <i class="text-danger">*</i></label>
              
            </div>
            <small id="check_box_error_message" class="form-text text-muted"> </small>
        </div>

    </form>
        
            <div class="form-group col-12 d-flex justify-content-between">
               
                <button type="button" href="invoic_page.html" onclick="pkaard_submit_data()" class="btn btn-warning btn-outline-danger  text-white font-weight-bold ">Submit</button>
            </div>
        
            </div>
        
           
            </div>
      
        
                
            </div>
        
            </div>
        
           </div>
        
        
        
        
        
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
               
                <div class="modal-body" id="preview_body">
                    
                      
                     
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" onclick="final_checking()">OK</button>
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

var form_data  = '';

window.onload = function (){
        let opData = '<option value="">Select Division</option> ';

        division.forEach(function (data){

        opData += `<option data-id="${data['id']}" value="${data['name']}">${data['name']}</option>`;
    })
    document.getElementById('division').innerHTML = opData

    document.getElementById('cda_division').innerHTML = opData
    }

    function handle_division(e){
        let opData = '<option value="">Select District</option> ';

       District.forEach(function (data){

        if(data['division_id']== e.options[e.selectedIndex].dataset.id){

        opData += `<option  data-id="${data['id']}"  value="${data['name']}">${data['name']}</option>`;

    }
        })
       document.getElementById('district').innerHTML = opData

    }


function handle_cda_division(e){
        let opData = '<option value="">Select District</option> ';
        
       District.forEach(function (data){

        if(data['division_id']== e.options[e.selectedIndex].dataset.id){

        opData += `<option  data-id="${data['id']}"  value="${data['name']}">${data['name']}</option>`;

    }
        })
       document.getElementById('cda_district').innerHTML = opData

    }



//  function handle_cda_district(e){

// let opData = '<option value="">Select Upzilla</option> ';

// Upazilas.forEach(function (data){

// if(data['district_id']== e.options[e.selectedIndex].dataset.id){

// opData += `<option  data-id="${data['id']}"  value="${data['name']}">${data['name']}</option>`;

// }
// })
// document.getElementById('cda_upzilla').innerHTML = opData


// }

let registration_steping =  document.getElementsByClassName("registration_steping");
    let bs_stepper_circle =  document.getElementsByClassName("bs-stepper-circle");
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

$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })


function pkaard_submit_data(){

  
 form_data = Object.fromEntries(new FormData(document.forms['form_data']));


mandatory_message( form_data)      

document.getElementById(`check_box_error_message`).innerHTML ='';

if(document.getElementsByName(`agree_condition`)[0].checked == false){
 document.getElementById(`check_box_error_message`).innerHTML = `<p class='text-danger'> please ! check box in mandatory </P>`
}

let modal_content = /*html*/`
<div>
    <p><b>Check info </b></p>
        <table class="table">

            <tbody>
            <tr>
                <th>Phone </th>
                <td>${ form_data['phone_number']}</td>
            </tr>
            <tr>
                <th>Email </th>
                <td>${ form_data['email']}</td>
            </tr>

            <tr>
                <th>Mediam </th>
                <td>${ form_data['mediam']}</td>
            </tr>

            

            <tr>
                <th>Reference Code </th>
                <td>${ form_data['reference_code']}</td>
            </tr>

            <tr>
                <th>Name</th>
                <td>${ form_data['full_name']}</td>
            </tr>

              <tr>
                <th>Nationality</th>
                <td>${ form_data['nationality']}</td>
            </tr>

              <tr>
                <th>date  of birth</th>
                <td>${ form_data['date_of_birth']}</td>
            </tr>

              <tr>
                <th>Gender</th>
                <td class="text-capitalize">${ form_data['gender']}</td>
            </tr>

              <tr>
                <th>Division</th>
                <td>${ form_data['division']}</td>
            </tr>

              <tr>
                <th>District</th>
                <td>${ form_data['district']}</td>
            </tr>
           
            <tr>
                <th>Profession</th>
                <td>${ form_data['profession']}</td>
            </tr>
           

            
            </tbody>
        </table>
        <h5 class="text-danger text-align-center">Card Delivery Address</h5>
        <table  class="table">
            
            <tbody >
                <tr>
                    <th>Apartment no</th>
                    <td>${ form_data['cda_apartment_no']}</td>
                </tr>
                 <tr>
                    <th> House / Holding no</th>
                    <td>${ form_data['cda_house_no']}</td>
                </tr>
                <tr>
                    <th>Road no</th>
                    <td>${ form_data['cda_road_no']}</td>
                </tr>
                 <tr>
                    <th> Area /  Village</th>
                    <td>${ form_data['cda_village']}</td>
                </tr>
                 <tr>
                    <th>Division</th>
                    <td>${ form_data['cda_division']}</td>
                </tr>
                 <tr>
                    <th>District</th>
                    <td>${ form_data['cda_district']}</td>
                </tr>
                 <tr>
                    <th>Upzilla</th>
                    <td>${ form_data['cda_upzilla']}</td>
                </tr>
                <tr>
                    <th>Police station/Thana</th>
                    <td>${ form_data['cda_Thana']}</td>
                </tr>
              
                 <tr>
                    <th>Address details</th>
                    <td>${ form_data['cda_address_details']}</td>
                </tr>
                
            </tbody>


        </table>
    
</div>

`;

document.getElementById("preview_body").innerHTML = modal_content


if( form_data['cda_apartment_no'].length >0 &&  form_data['cda_house_no'].length >0 &&  form_data['cda_road_no'].length >0 &&  form_data['cda_village'].length >0 &&  form_data['cda_division'].length >0 &&  form_data['cda_district'].length >0  &&  form_data['cda_address_details'].length >0 && document.getElementsByName(`agree_condition`)[0].checked == true ){
    $('#exampleModal').modal('show')
}
// $('#exampleModal').modal('show')


}

function mandatory_message(input_data){
    let elem ='';
    for (const key in input_data) {
          
          if(key=='reference_code' || key=='agree_condition' || key == 'cda_upzilla' || key=='email'){
          continue
          }
          elem = document.getElementsByName(`${key}`)[0]
          elem.nextElementSibling.innerHTML='';
         
          if(elem.value.length  == 0 ){             
              elem.nextElementSibling.innerHTML = `<p class='text-danger'> please ! <b class='text-warning'>${elem.previousElementSibling.innerText}</b> is mandatory</p>`   
          }
          
          
      }

   }


   function final_checking(){
   

    $('#exampleModal').modal('hide')


console.log(form_data)
 send_data_in_server(form_data);
}

function  send_data_in_server(server_data){


fetch('card_registation_add', {
    method: 'POST',
    body:JSON.stringify(server_data),
    headers: new Headers({
                'Content-Type': 'application/json',
              
            })
  })
  .then(response => response.json())
  .then(data => {
if(data['condition']==true){
    swal("successful", "Successfully Registation", "success"); 
}else{
    swal("Opps!", "Something went wrong", "error"); 
}
    

  })
}

  </script>

@endsection