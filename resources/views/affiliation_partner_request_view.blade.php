{{-- @dd($data); --}}
@extends('master.master')

@section('content')

<style>
  .margin_top{
    margin-top:2rem !important;
  }

  .generating_access{
    width: 20rem;
    margin: auto;
  }
  .arrow_icon i{

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
            <h4 class="m-0">Affiliation Sign Up</h4>
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
                <th scope="col">Company Name</th>
                <th scope="col">Phone</th>
                <th scope="col">Logo</th>
                <th scope="col">Action </th>

              </tr>
            </thead>
            <tbody id="table_body">
             
            
            </tbody>
           
          </table>
<hr>
          <div class="float-right " style="width: 9rem;">
            {{-- <a href="/add_affiliation_product_view" class="btn btn-danger btn-sm  btn-block">Next</a> --}}
          </div>
      
      <!-- /.card-body -->
    </div>
  

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


</div>

<div class="modal fade affiliation_sign_up_one" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="card">
        <div class="card-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="card-title">
            
            <h5 class="tex-muted">Affiliation Sign Up Info </h5>
            
          </div>
        </div>
        <div class="card-body">
          <table class="table   table-striped">
            <thead class="thead-light">
              <tr>
                <th>Title</th>
                <th>Info</th>
              </tr>
            </thead>
            <tbody id="affiliation_sign_up_info_table">
             
            </tbody>
          </table>
        </div>
      </div>
     
     
    </div>
  </div>
</div>


<div class="modal fade affiliationSignUPConfirmation" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-md">
    <div class="modal-content">
      <div class="card">
        <div class="card-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <div class="card-title">
            <h5 class="tex-muted">Affiliation SignUp Confirmation </h5>
          </div>
        </div>
        <div class="card-body">
         

          <div class="generating_access">
           
            <form name="generate_access">

              <div class="form-group">
                <div class="d-flex justify-content-between align-items-center">
                <img style="width: 80px;height: 60px;" src="https://pkaard.com/assets/images/pkaard_logo.jpeg" alt="">
               <div class="arrow_icon">
                <i class="fa fa-long-arrow-right d-block"></i>
                <i class="fa fa-long-arrow-left d-block"></i>
              </div>
                <img style="width: 80px;height: 60px;"  src="" id="affiliation_logo" alt="">
              </div>
              </div>
              <div class="form-group">
                <label for="company_name" class="form-text text-muted"> <small  class="form-text text-muted">Company Name </small></label>
                <input type="text" disabled name="company_name" class="form-control" id="company_name"  placeholder="Enter email">
                
              </div>

              <div class="form-group">
                <label for="mail" class="form-text text-muted"> <small  class="form-text text-muted">User Mail</small></label>
                <input type="email" name="user_mail" class="form-control" id="mail"  placeholder="Enter email">
                
              </div>

              <div class="form-group">
                <label for="phone" class="form-text text-muted"> <small  class="form-text text-muted">User Phone</small></label>
                <input type="text" name="user_phone"  class="form-control" id="phone"  placeholder="Enter Phone No">
                <input type="hidden" name="id"  class="form-control">
                
              </div>

              <div class="form-group">
                <label for="password" class="form-text text-muted"> <small  class="form-text text-muted">User Password</small></label>
                <input type="text" name="user_password" class="form-control" id="password"  placeholder="Enter Password">
                
              </div>

              <div class="form-group">
                <button type="button" onclick="generating_password()" class="btn btn-sm btn-block btn-info">Generate Password</button>
              </div>

              <div class="form-group">
                <button type="button" onclick="handle_signup_confirm()" class="btn btn-lg btn-primary btn-block">Submit</button>
              </div>

            
            
            </form>
          </div>
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
<script src="{{ asset('assets/plugins/summernote/summernote-bs4.min.js')}}"></script>
  
<script>
    
   async function load_sign_up(){
    let view='';
    let imgBlob ;
        const response = await fetch(`${location.origin}/affiliation_partner_request`)      
        const result = await response.json();
        console.log(result);

        if(response.status==200){
          if(result.length >0){
            result.forEach((d,i)=>{
                //  imgBlob = window.URL.createObjectURL(d['company_logo']) ;
                view +=`
                <tr>
                    <td>${++i}</td>
                    
                    <td>${d['company_name']}</td>
                    <td>${d['contact_number']}</td>
                    <td> <img style="width:100px;height:90px" src='${d['company_logo']}' /></td>
                    <td>
                        <button class='btn btn-sm btn-success' onclick="sign_up_confirmation('${d['id']}')" > SignUp Confirm</button>
                        <button class='btn btn-sm btn-info' onclick="show_more('${d['id']}')"> More </button>
                    </td>


                </tr>
                
                `;
})
          }}
          
document.getElementById("table_body").innerHTML= view;

    }
    load_sign_up();

  async  function show_more(id){
    

    let view = '';
      $(".affiliation_sign_up_one").modal('show')
      const response = await fetch(`${location.origin}/affiliation_partner_request_id/${id}`)      
        const result = await response.json();
        if(response.status==200){
          if(result.length >0){
            result.forEach((d,i)=>{
               
                view +=`
                <tr>
                    <td> Company Name </td>
                    <td>${d['company_name']}</td>

                </tr>
                <tr>
                  <td>Contact Number </td>
                  <td>${d['contact_number']}</td>
                </tr>

                <tr>
                  <td>Company Logo </td>
                  <td><img style="width:100px;height:90px" src='${d['company_logo']}' /></td>
                 </tr>
                <tr>

                  <tr>
                <td>Front NID</td>
                <td> <img style="width:100px;height:90px" src='${d['front_nid']}' alt='Front NID Null ' /></td>
                  </tr>
                                    
                  <tr>
                <td>Front NID</td>
                <td> <img style="width:100px;height:90px" src='${d['back_nid']}' alt='Back NID Null ' /></td>
                  </tr>
                                    
                
                                    
                  <tr>
                <td>Sign</td>
                <td> <img style="width:100px;height:90px" src=' ${d['sign_img']}' alt='Sign Img ' /></td>
                  </tr>


                <tr>
                  <td>Mail</td>
                  <td>${d['email_address']}</td>

                  </tr>
               
                  
                  <td> Busness Type </td>
                  <td>${d['busness_type']} </td>

                  
                </tr>

                 <tr>
                <td>Company Owner Name </td>
                <td>${d['company_owner_name']}</td>
                  </tr>


                  <tr>
                <td>Company Tin Number  </td>
                <td>${d['company_tin']}</td>
                  </tr>


                  <tr>
                <td>Company Owner Name </td>
                <td>${d['company_owner_name']}</td>
                  </tr>

                  <tr>
                <td>Contact's Name</td>
                <td>${d['contact_full_name']}</td>
                  </tr>
                    
                  <tr>
                <td>Contact's Role</td>
                <td>${d['contact_role']}</td>
                  </tr>
                    
                    
                  <tr>
                <td>Discount / Privilege</td>
                <td>${d['discount_privilege']}</td>
                  </tr>
                  
                 
                  <tr>
                <td>Website / Facebook Link</td>
                <td> ${d['discount_privilege']}</td>
                  </tr>
                                    
                  <tr>
                <td>Signing Authority</td>
                <td> ${d['signing_authority']}</td>
                  </tr>
                                    
                `;
})

document.getElementById("affiliation_sign_up_info_table").innerHTML= view;

          }}
    }


 async function sign_up_confirmation(id){

  $(".affiliationSignUPConfirmation").modal('show')
  generating_password();
      const response = await fetch(`${location.origin}/affiliation_partner_request_id/${id}`)      
        const result = await response.json();
        let FormElem = document.forms['generate_access'];
        FormElem.user_phone.value = result[0]['contact_number']
        FormElem.company_name.value = result[0]['company_name']
        FormElem.user_mail.value = result[0]['email_address'];
        FormElem.id.value = result[0]['id'];
        document.getElementById("affiliation_logo").src=result[0]['company_logo']
 }

 function generating_password(){

  let FormElem = document.forms['generate_access'];
  let pass = '';
   let str = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789$&%*#@!";

   for (let i = 0; i < 9; i++) {
    
   let char = Math.floor(Math.random()* str.length+1);
   pass+=str.charAt(char);
    
   }
FormElem.user_password.value = pass
 }


 async function handle_signup_confirm () {
  let form_data = Object.fromEntries(new FormData(document.forms['generate_access']));
console.log(form_data);
  //affiliation_partner_accept

    try {
      response  = await fetch(`/affiliation_partner_accept`,{
      method:'POST',
      body:JSON.stringify(form_data),
    headers: new Headers({
    'Content-Type': 'application/json',

    })
      })
      result  = await response.json();
      console.log(result);
          if(result['condition'] == true){
              swal("Thanks! ", `${result['message']}`, "success"); 
              $(".affiliationSignUPConfirmation").modal('hide')

              load_sign_up();
          }else{
            swal("Opps ! ", `${result['message']}`, "error"); 

          }
      } catch (error) {
      console.log(error)
      swal("Opps ! ", `Something Went Wrong`, "error"); 

     
      }


 }

</script>

@endsection