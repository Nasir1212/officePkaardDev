
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pkaard |Franchise </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css')}}">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="{{ asset('assets/js/SessionExport.js')}}"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>

  <script src="{{ asset('assets/plugins/inputmask/jquery.inputmask.min.js')}}"></script>

</head>
<body class="hold-transition login-page">
<div class="container">
    <div class="row">
        <div class="col">
            <br>
            <br>
            <div class="card" style="width: 95%; padding: 0; margin: 0 auto;">
                <div class="card-header text-center">
                    <img style="width:200px ;height:100px" src="https://pkaard.com/assets/images/pkaard_logo.jpeg" alt="Pkaard">
          
                </div>
                <div class="card-body">
                    <p class="text-center text-muted login-box-msg ">Submit your profile data</p>
                 <div class="row">
                    <form class="needs-validation" novalidate name="profile_data">
                        <div class="form-row">
                          <div class="form-group col-lg-6 col-md-6 mb-3">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="First Name" required>
                            <div class="valid-feedback"> Looks good!</div>
                            <div class="invalid-feedback">Please provide a valid Name.</div>
                          </div>
                          <div class="col-lg-6 col-md-6 mb-3">
                            <label for="mobile_phone">Mobile Phone</label>
                            <input type="text" name="mobile_phone" class="form-control" id="mobile_phone" placeholder="Enter Mobile Phone" required>
                            <div class="valid-feedback"> Looks good!</div>
                            <div class="invalid-feedback">Please provide a valid Mobile Phone Number.</div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="general_mail">General Mail </label>
                            <div class="input-group">
                              <input type="email" class="form-control" name="general_mail" id="general_mail" placeholder="example123@gmail.com" aria-describedby="inputGroupPrepend" required>
                              <div class="invalid-feedback"> Please choose a Valid General Mail.</div>
                              <div class="valid-feedback"> Looks good!</div>
                            </div>
                          </div>

                          <div class="col-md-6 mb-3">
                            <label for="pkaard_mail">Pkaard Mail </label>
                            <div class="input-group">
                              <input type="email" class="form-control" name="pkaard_mail" id="pkaard_mail" placeholder="example@pkaard.com" aria-describedby="inputGroupPrepend" required>
                              <div class="invalid-feedback"> Please choose a Valid Pkaard Mail.</div>
                              <div class="valid-feedback"> Looks good!</div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-12 mb-3">
                            <label for="office_address">Office Address</label>
                          <textarea class="form-control"  name="office_address" id="office_address" cols="5" rows="3"required></textarea>
                            <div class="invalid-feedback">
                              Please provide a Give Office Address.
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <label for="validationCustom04">In case of emergency</label>
                            <div class="row">
                                <div class="col-md-6 col-ms-12 col-lg-6  mb-3 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text " for="emergency_name">Name</span>
                                        </div>
                                        <input type="text" name="emergency_name" id="emergency_name" class="form-control col-md-12"placeholder="Name" aria-describedby="inputGroupPrepend2" required>
                                      </div>  
                                </div>
                                <div class="col-md-6 col-ms-12 col-lg-6 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text " for="emergency_phone">Phone</span>
                                        </div>
                                        <input type="text" class="form-control col-md-12" name="emergency_phone" id="emergency_phone" placeholder="Phone" aria-describedby="inputGroupPrepend2" required>
                                      </div> 
                                </div>
                            </div>
                           
                    
                              <div class="invalid-feedback">Please provide a valid state.</div>
                          </div>
                        

                          <div class="col-md-12 mb-3">
                            <label  for="validationCustom04">NID</label>
                            <div class="row">
                                <div class="col-md-6 col-ms-12 col-lg-6   mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text " id="nidno">NID No</span>
                                        </div>
                                        <input type="text" class="form-control col-md-12" name="nid_no" id="nid_no" placeholder="NID No" aria-describedby="nidno" required>
                                      </div>  
                                </div>
                                <div class="col-md-6 col-ms-12 col-lg-6  mb-3 ">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text " for="dateofbirth">Date of Birth</span>
                                        </div>
                                        <input type="text" placeholder="dd/mm/yyyy" class="form-control col-md-12" id="date_of_birth" name="date_of_birth" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric" required>
                                      </div> 
                                </div>
                            </div>
                          
                              <div class="invalid-feedback">Please provide a valid state.</div>
                          </div>


                          <div class="col-md-12 mb-3">
                            <label  for="validationCustom04">Bank info</label>
                            <div class="row">
                                <div class="col-md-6 col-ms-12 col-lg-6 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text " for="bankname">Bank Name</span>
                                        </div>

                                          <select class="form-control" id="bank_name" name="bank_name" required>
                                            
                                            <option value="">Select Bank Name</option>
                                            <option>AB Bank Limited</option>
                                            <option>Agrani Bank Limited</option>
                                            <option>Al-Arafah Islami Bank Limited</option>
                                            <option>Bangladesh Commerce Bank Limited</option>
                                            <option>Bangladesh Development Bank Limited</option>
                                            <option>Bangladesh Krishi Bank</option>
                                            <option>Bank Al-Falah Limited</option>
                                            <option>Bank Asia Limited</option>
                                            <option>BASIC Bank Limited</option>
                                            <option>Bengal Commercial Bank Limited</option>
                                            <option>BRAC Bank Limited</option>
                                            <option>Citibank N.A</option>
                                            <option>Citizens Bank PLC</option>
                                            <option>Commercial Bank of Ceylon Limited</option>
                                            <option>Community Bank Bangladesh Limited</option>
                                            <option>Dhaka Bank Limited</option>
                                            <option>Dutch-Bangla Bank Limited</option>
                                            <option>Eastern Bank Limited</option>
                                            <option>EXIM Bank Limited</option>
                                            <option>First Security Islami Bank Limited</option>
                                            <option>Global Islami Bank Limited</option>
                                            <option>Habib Bank Ltd.</option>
                                            <option>ICB Islamic Bank Ltd.</option>
                                            <option>IFIC Bank Limited</option>
                                            <option>Islami Bank Bangladesh Ltd</option>
                                            <option>Jamuna Bank Ltd</option>
                                            <option>Janata Bank Limited</option>
                                            <option>Meghna Bank Limited</option>
                                            <option>Mercantile Bank Limited</option>
                                            <option>Midland Bank Limited</option>
                                            <option>Modhumoti Bank Limited</option>
                                            <option>Mutual Trust Bank Limited</option>
                                            <option>National Bank Limited</option>
                                            <option>National Bank of Pakistan</option>
                                            <option>National Credit & Commerce Bank Ltd</option>
                                            <option>NRB Bank Limited</option>
                                            <option>NRB Commercial Bank Limited</option>
                                            <option>One Bank Limited</option>
                                            <option>Padma Bank Limited</option>
                                            <option>Premier Bank Limited</option>
                                            <option>Prime Bank Ltd</option>
                                            <option>Probashi Kollyan Bank</option>
                                            <option>Pubali Bank Limited</option>
                                            <option>Rajshahi Krishi Unnayan Bank</option>
                                            <option>Rupali Bank Limited</option>
                                            <option>Shahjalal Islami Bank Limited</option>
                                            <option>Shimanto Bank Limited</option>
                                            <option>Social Islami Bank Ltd</option>
                                            <option>Sonali Bank Limited</option>
                                            <option>South Bangla Agriculture & Commerce Bank Limited</option>
                                            <option>Southeast Bank Limited</option>
                                            <option>Standard Bank Limited</option>
                                            <option>Standard Chartered Bank</option>
                                            <option>State Bank of India</option>
                                            <option>The City Bank Ltd.</option>
                                            <option>The Hong Kong and Shanghai Banking Corporation. Ltd.</option>
                                            <option>Trust Bank Limited</option>
                                            <option>Union Bank Limited</option>
                                            <option>United Commercial Bank Limited</option>
                                            <option>Uttara Bank Limited</option>
                                         
                                          </select>
                                                                           </div>  
                                </div>
                                <div class="col-md-6 col-ms-12 col-lg-6 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text " id="inputGroupPrepend2">Account Holder Name</span>
                                        </div>
                                        <input  class="form-control" type="text" name="account_holder_name" id="account_holder_name" placeholder="Enter Account Holder Name" required>
                                      </div> 
                                </div>

                                <div class="col-md-6 col-ms-12 col-lg-6  mb-3">
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text " id="inputGroupPrepend2">Account  Number</span>
                                      </div>
                                      <input  class="form-control" type="text" name="account_number" id="account_number" placeholder="Enter Account  Number" required>
                                    </div> 
                              </div>




                              <div class="col-md-6 col-ms-12 col-lg-6  mb-3">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text " id="inputGroupPrepend2">Branch Name</span>
                                    </div>
                                    <input  class="form-control" type="text" name="branch_name" id="branch_name" placeholder="Enter Branch Name" required>
                                  </div> 
                            </div>

                            <div class="col-md-6 col-ms-12 col-lg-6 mb-3">
                              <div class="input-group">
                                  <div class="input-group-prepend">
                                    <span class="input-group-text " id="inputGroupPrepend2">Routing  Number</span>
                                  </div>
                                  <input  class="form-control" type="text" name="routing_number" id="routing_number" placeholder="Enter Routing  Number" required>
                                </div> 
                          </div>
                            </div>
                              <div class="invalid-feedback">Please provide a valid state.</div>
                          </div>

                          <div class="col-md-12 mb-3">
                            <label  for="validationCustom04">Mobile Banking (MFS)</label>
                            <div class="row">
                                <div class="col-md-6 col-ms-12 col-lg-6 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text " id="inputGroupPrepend2">MFS Name</span>
                                        </div>

                                        <select class="form-control" id="mfs_name" name="mfs_name" required>
                        
                                          <option value="">Select MFS Name</option>
                                          <option>Bkash</option>
                                          <option>Nagad</option>
                                          <option>Rocket</option>
                                          <option>MyCash</option>
                                          <option>Upay</option>
                                          <option>OK Wallet</option>
                                          <option>Islamic Wallet</option>
                                          <option>SureCash</option>
                                          <option>TeleCash</option>
                                          <option>Tap</option>
                                          <option>FSIBL</option>
                                          <option>Meghna Bank Tap 'n Pay</option>
                                          <option>Trust Axiata pay: tap</option>
                                       
                                        </select>
                                      </div>  
                                </div>
                                <div class="col-md-6 col-ms-12 col-lg-6 mb-3">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text " id="inputGroupPrepend2"> MFS Type</span>
                                        </div>
                                        <select name="mfs_type" class="form-control" id="mfs_type" required>
                               
                                          <option value="">Select MFS Type</option>
                                          <option>Agent Number</option>
                                          <option>Personal Number</option>
                                       
                                        </select>    
                                      </div> 
                                </div>

                                <div class="col-md-6 col-ms-12 col-lg-6 mb-3">
                                  <div class="input-group">
                                      <div class="input-group-prepend">
                                        <span class="input-group-text " id="inputGroupPrepend2"> MFS Number</span>
                                      </div>
                                      <input  class="form-control" type="text" name="mfs_number" id="mfs_number" placeholder="Enter MFS Number" required>

                                    </div> 
                              </div>
                            </div>
                          
                              <div class="invalid-feedback">Please provide a valid state.</div>
                          </div>

                          

                        </div>
                        <div class="form-group">
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                            <label class="form-check-label" for="invalidCheck">
                              Agree to terms and conditions
                            </label>
                            <div class="invalid-feedback">
                              You must agree before submitting.
                            </div>
                          </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Submit form</button>
                      </form>
                      
                      <script>
                      
                      </script>
                 </div>
                </div>
              </div>
            
        </div>
    </div>
</div>

<script>

function is_franchise_profil_submitted_data(){
      fetch('is_franchise_profil_submitted_data')

      .then(response => response.json())
      .then(data => {
console.log(data)

if(data['condition']==true){
  location.href = `${location.origin}/`;
}


      })

    }

    is_franchise_profil_submitted_data();


  // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
                        'use strict';
                        window.addEventListener('load', function() {
                          // Fetch all the forms we want to apply custom Bootstrap validation styles to
                          var forms = document.getElementsByClassName('needs-validation');
                          // Loop over them and prevent submission
                          var validation = Array.prototype.filter.call(forms, function(form) {
                            form.addEventListener('submit', function(event) {
                              if (form.checkValidity() === false) {
                                event.preventDefault();
                                event.stopPropagation();
                                console.log("error")
                              }else{
                                event.preventDefault();
                                console.log("OK. profile_data")
                             let profile_data=    Object.fromEntries(new FormData(document.forms['profile_data']));
                                // console.log(profile_data)

                          fetch('franchise_profile_form_insert', {
                          method: 'POST',
                          body:JSON.stringify(profile_data),
                          headers: new Headers({
                          'Content-Type': 'application/json',

                          })
                          })
                          .then(response => response.json())
                          .then(data => {

                      if(data['condition']==true){
                      swal("successful", data['message'], "success"); 
                      location.href = `${location.origin}/`;
                      }else{
                      swal("Opps!",data['message'], "error"); 
                      }
 
                          })

                              }
                              form.classList.add('was-validated');
                            }, false);
                          });
                        }, false);
                      })();


$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
//Datemask2 mm/dd/yyyy
$('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
//Money Euro
$('[data-mask]').inputmask()


</script>

</body>
</html>
