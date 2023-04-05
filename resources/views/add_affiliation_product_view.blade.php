{{-- @dd($data); --}}
@extends('master.master')

@section('content')

<style>
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
    </style>

<div class="card">


     <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0">Add Affiliation Product</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Affiliation</li>
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

        <form class="row">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
              <label for="">Company Name</label>
              <input type="text" id="" class="form-control"placeholder="Enter Company Name">
            </div>
           
          
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label for="">Title </label>
                <input type="text" id="" class="form-control"placeholder="Enter Title">
              </div>
             
          
              
              <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label for="">Category</label>
                <input type="text" id="" class="form-control"placeholder="Enter Category">
              </div>
             
          
              <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label for="">District</label>
                <input type="text" id="" class="form-control"placeholder="Enter District">
              </div>
             
              <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label for="">Phone</label>
                <input type="text" id="" class="form-control" placeholder="Enter Phone">
              </div>
             
              <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label for="">Privilege </label>
                <div class="row">
                    <div class="col-4 input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text ">
                            <label class="checkmark_container ">Discount
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>

                          </div>
                        </div>
                        
                        <input type="text" name="" class="form-control d-none" placeholder="Enter Discount" id="">

                      </div>

                      <div class="col-4 input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <label class="checkmark_container">BOGO
                                <input type="checkbox" >
                                <span class="checkmark"></span>
                              </label>
                          </div>
                        </div>
                      </div>


                      <div class="col-2 input-group mb-2 mr-sm-2">
                        <div class="input-group-prepend">
                          <div class="input-group-text">
                            <label class="checkmark_container">FREE
                                <input type="checkbox">
                                <span class="checkmark"></span>
                              </label>
                          </div>
                        </div>
                      </div>

                      
                </div>
            </div>
            
              <div class="form-group col-sm-12 col-md-12 col-lg-12">
                <label for="">Address </label>
               <textarea class="form-control"  placeholder="Enter Address" name="" id="" cols="5" rows="5"></textarea>
              </div>
             
            
              <div class="form-group col-sm-12 col-md-12 col-lg-12">
                <label for="">Product Details </label>
                <textarea id="compose-textarea" class="form-control">
               <h4>Describe Your Product</h4>
                </textarea>
            </div>
           <div>
            <button class="btn btn-info">Submit </button>
           </div>
          </form>
     
      
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
         $(function () {
    //Add text editor
    $('#compose-textarea').summernote({
        placeholder: 'Describe Your Product<',
        tabsize: 2,
        height: 200,

    })
  })
  </script>
@endsection