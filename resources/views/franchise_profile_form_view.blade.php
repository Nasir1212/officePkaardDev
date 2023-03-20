
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

</head>
<body class="hold-transition login-page">
<div class="container">
    <div class="row">
        <div class="col">
            <br>
            <br>
            <div class="card" style="width: 95%;">
                <div class="card-header text-center">
                    <img style="width:200px ;height:100px" src="https://pkaard.com/assets/images/pkaard_logo.jpeg" alt="Pkaard">
          
                </div>
                <div class="card-body">
                    <p class="text-center text-muted login-box-msg ">Submit your profile data</p>
                 <div class="row">
                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                          <div class="form-group col-lg-6 col-md-6 mb-3">
                            <label for="validationCustom01">Name</label>
                            <input type="text" name="name" class="form-control" id="validationCustom01" placeholder="First Name" required>
                            <div class="valid-feedback"> Looks good!</div>
                            <div class="invalid-feedback">Please provide a valid Name.</div>
                          </div>
                          <div class="col-lg-6 col-md-6 mb-3">
                            <label for="validationCustom02">Mobile Phone</label>
                            <input type="text" name="mobile_phone" class="form-control" id="validationCustom02" placeholder="Enter Mobile Phone" required>
                            <div class="valid-feedback"> Looks good!</div>
                            <div class="invalid-feedback">Please provide a valid Mobile Phone Number.</div>
                          </div>
                          <div class="col-md-6 mb-3">
                            <label for="validationCustomUsername">General Mail </label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustomUsername" placeholder="example123@gmail.com" aria-describedby="inputGroupPrepend" required>
                              <div class="invalid-feedback"> Please choose a Valid General Mail.</div>
                              <div class="valid-feedback"> Looks good!</div>
                            </div>
                          </div>

                          <div class="col-md-6 mb-3">
                            <label for="validationCustomUsername">Pkaard Mail </label>
                            <div class="input-group">
                              <input type="text" class="form-control" id="validationCustomUsername" placeholder="example@pkaard.com" aria-describedby="inputGroupPrepend" required>
                              <div class="invalid-feedback"> Please choose a Valid Pkaard Mail.</div>
                              <div class="valid-feedback"> Looks good!</div>
                            </div>
                          </div>
                        </div>
                        <div class="form-row">
                          <div class="col-md-12 mb-3">
                            <label for="validationCustom03">Office Address</label>
                          <textarea class="form-control"  name="" id="" cols="5" rows="3"required></textarea>
                            <div class="invalid-feedback">
                              Please provide a Give Office Address.
                            </div>
                          </div>
                          <div class="col-md-12 mb-3">
                            <label for="validationCustom04">In case of emergency</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text " id="inputGroupPrepend2">Name</span>
                                        </div>
                                        <input type="text" class="form-control col-md-12" id="validationDefaultUsername" placeholder="Name" aria-describedby="inputGroupPrepend2" required>
                                      </div>  
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text " id="inputGroupPrepend2">Phone</span>
                                        </div>
                                        <input type="text" class="form-control col-md-12" id="validationDefaultUsername" placeholder="Phone" aria-describedby="inputGroupPrepend2" required>
                                      </div> 
                                </div>
                            </div>
                           
                    
                              <div class="invalid-feedback">Please provide a valid state.</div>
                          </div>
                        

                          <div class="col-md-12 mb-3">
                            <label  for="validationCustom04">NID</label>
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text " id="inputGroupPrepend2">NID No</span>
                                        </div>
                                        <input type="text" class="form-control col-md-12" id="validationDefaultUsername" placeholder="NID No" aria-describedby="inputGroupPrepend2" required>
                                      </div>  
                                </div>
                                <div class="col-6">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text " id="inputGroupPrepend2">Date of Birth</span>
                                        </div>
                                        <input type="text" class="form-control col-md-12" id="validationDefaultUsername" placeholder="dd/mm/yyyy" aria-describedby="inputGroupPrepend2" required>
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
                                console.log("OK. Submitted")
                              }
                              form.classList.add('was-validated');
                            }, false);
                          });
                        }, false);
                      })();
                      </script>
                 </div>
                </div>
              </div>
            
        </div>
    </div>
</div>
<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>

<script>

let nid_data = 
    {
  "nidNumber": "1234567890",
  "dateOfBirth": "2000-11-30",
  "englishTranslation": true
}


fetch('https://porichoy.azurewebsites.net/sandbox-api/v2/verifications/autofill', {
    method: 'POST',
    body:JSON.stringify(nid_data),
    headers: new Headers({
                'Content-Type': 'application/json',
              
            })
  })
  .then(response => response.text())
  .then(data => {

    console.log(data)
  })
    

</script>

</body>
</html>
