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
            <h4 class="m-0">Add Affiliation Partner</h4>
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
        <form class="row" name="affiliation_partner_form">
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

                    <div class="col-md-6 col-ms-12 col-lg-6  mb-3 ">
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text " for="dateofbirth">NID Copy (Front)</span>
                            </div>
                            <input type="hidden" name="front_nid" >

                            <input type="file"  class="form-control col-md-12"  name="" >
                          </div> 
                    </div>

                    <div class="col-md-6 col-ms-12 col-lg-6  mb-3 ">
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text " for="dateofbirth">NID Copy (Backend)</span>
                            </div>
                            <input type="hidden" name="back_nid" >
                            <input type="file"  class="form-control col-md-12" >
                          </div> 
                    </div>


                </div>

              </div>


              <div class="form-group col-sm-12 col-md-12 col-lg-12">
                <label for="">Set User Password  </label>

                <div class="row">
                    <div class="col-md-6 col-ms-12 col-lg-6  mb-3 ">
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text " for="dateofbirth">Password</span>
                            </div>
                            <input type="password" placeholder="Password" class="form-control col-md-12"  name="password" >
                          </div> 
                    </div>

                    <div class="col-md-6 col-ms-12 col-lg-6  mb-3 ">
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <span class="input-group-text " for="dateofbirth"> Confirm  Password</span>
                            </div>
                            <input type="text" placeholder=" Confirm  password" class="form-control col-md-12"  name="confirm_password" >
                          </div> 
                    </div>
                </div>


              </div>
  
      
              <button  type="button" onclick="submit_affiliation_partner(this)" class="btn btn-info btn-sm">Submit
                
            
            </button>
           
          </form>
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
   async function submit_affiliation_partner(evt){
    evt.innerHTML  = `<div class="spinner-border spinner-border-sm" role="status">
                    <span class="sr-only">Loading...</span>
                  </div>`;
    var formData = new FormData();
    var response = "";
    var result;
    var next = 0;

    let data = Object.fromEntries(new FormData(document.forms['affiliation_partner_form']));

    if(data['password'] != data['confirm_password']){
        swal("Opps!", `password not matched with confirm password`, "error"); 
        evt.innerHTML = "Submit"
        return false;

    }

    for (const file of document.querySelectorAll('input[type=file]')) {      
        formData.append('pkaard_img',file.files[0]);
        try {

            response  = await fetch(`https://img.pkaard.com/upload_img.php`,{
            method:'POST',
            // mode: 'no-cors',
            body:formData
        })
        result  = await response.json();
        console.log(result);
        file.previousElementSibling.value = result['img_path']
        if(result['status']===false){
        swal("Opps!", `${result['message']}`, "error"); 
        return false;
        } 
         
        next ++;           
        } catch (error) {
            console.log(error)
        }
      
    }


      
        if(next >= 2){
           var form_data = Object.fromEntries(new FormData(document.forms['affiliation_partner_form']));
            console.log(form_data)


            try {
                response  = await fetch(`/add_affiliation_partner`,{
                method:'POST',

                body:JSON.stringify(form_data),
            headers: new Headers({
            'Content-Type': 'application/json',
          
        })
                })
                result  = await response.json();
                console.log(result);
                    if(result['condition'] == true){
                        evt.innerHTML = "Submit"
                        swal("Thanks! ", `Successfully Submitted`, "success"); 
                    }
                } catch (error) {
                console.log(error)
                evt.innerHTML = "Submit"
                }


        }
   

       

    }
</script>

@endsection