
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pkaard |Admin </title>

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
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-warning">
    <div class="card-header text-center">
      <a class="h1"><b><img style="width:200px ;height:100px" src="https://pkaard.com/assets/images/pkaard_logo.jpeg" alt="Pkaard"></b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg ">Who are you?</p>

      <form name="admin_otp">
              

        {{-- <div class="input-group mb-3">
          <input type="text" name="otp" class="form-control" placeholder="OTP">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div> --}}
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="button"onclick="selecting('admin');" class="btn btn-primary btn-block">Admin User</button>
            <button type="button"onclick="selecting('branch');" class="btn btn-primary btn-block">Branch/Reference Program User</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

     
     
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>

<script>
    function admin_otp_check(){
        let admin_otp =  Object.fromEntries(new FormData(document.forms['admin_otp']));
    
    console.log(admin_otp)

    fetch(`admin_otp_check`, {
method: 'POST',
body:JSON.stringify(admin_otp),
headers: new Headers({
            'Content-Type': 'application/json',
          
        })
})

.then(response=>response.json())
.then(data=>{
  console.log(data);
  SessionExport.setSession(data);
if(data['is_login']==true){
  location.href = `${location.origin}/`;
}

})
    
    }

    function selecting(d){

        if(d=='admin'){
            localStorage.setItem("user_select", 'admin');
            location.href = `${location.origin}/admin_login`;
        }
        if(d=='branch'){
            localStorage.setItem("user_select", 'branch');
            location.href = `${location.origin}/login`;

        }
    }
</script>

</body>
</html>
