
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
      <p class="login-box-msg h3">Admin</p>

      <form name="login_data">
        <div class="input-group mb-3">
          <input type="email" name="mail" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
       

       
        <div class="row">
          
          <!-- /.col -->
          <div class="col-12">
            <button type="button"onclick="login_check();" class="btn btn-primary btn-block">Submit</button>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/4.1.1/crypto-js.min.js" integrity="sha512-E8QSvWZ0eCLGk4km3hxSsNmGWbLtSCSUcewDQPQWZF6pEU8GlT8a5fF32wOl1i8ftdMhssTrF/OhyGWwonTcXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ asset('assets/js/SessionExport.js')}}"></script>

<script>
 <?php session(['oneTime' => rand(100000,999999) ]); ?>;

 let otp = {{ session()->get('oneTime') }};
console.log(otp);

  window.onload = async ()=>{
   let local_data = SessionExport.localStorage() ;
  
   if(local_data['is_login']==true){
    console.log('login_atumatic')
    const response1 = await fetch(`${location.origin}/login_atumatic/${otp}`)
   const result  = await response1.json()
   console.log(result)
   if(result['login_info']==true){
    location.href = `${location.origin}/`;
   }
   }
  }
    function login_check(){
        let login_info =  Object.fromEntries(new FormData(document.forms['login_data']));
    
    console.log(login_info)

    fetch(`send_otp_admin/${login_info['mail']}`)

.then(response=>response.json())
.then(data=>{
  console.log(data);
  if(data['condition']==true){
    location.href = `${location.origin}/admin_otp`;
  }else{
    swal ( "Oops" ,  `${data['message']}` ,  "error" )
  }
})
    
    }
</script>

</body>
</html>
