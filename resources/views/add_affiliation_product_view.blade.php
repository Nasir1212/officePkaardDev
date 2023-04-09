{{-- @dd($data); --}}
@extends('master.master')

@section('content')
{{-- @dd($category) --}}
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

        <form class="row" name="affiliation_product">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
              <label for="">Company Name</label>
              <input type="text" id="" name="company_id" class="form-control"placeholder="Enter Company Name">
            </div>
           
          
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label for="">Title </label>
                <input type="text" id="" name="title" class="form-control"placeholder="Enter Title">
              </div>
             
          
              
              <div class="form-group col-sm-12 col-md-6 col-lg-6 position-relative">
                <label for="">Category</label>
                <input type="hidden" name="category_id">
                <input onfocus="focusin(this)" onkeypress="search_input(this)" onfocusout="focusout(this)" type="text" id="" class="form-control"placeholder="Enter Category">
                <div class="child_drop_down d-none">
                  <ul>
                    @foreach($category as $cate)
                    <li id="{{$cate->id}}">{{$cate->category_name}}</li>
                    @endforeach
                  </ul>
                </div>
              </div>
             
          
              <div class="form-group col-sm-12 col-md-6 col-lg-6 position-relative">
                <label for="">District</label>
                <input type="hidden" name="district_id">

                <input onfocus="focusin(this)" onchange="search_input(this)" onfocusout="focusout(this)"  type="text" id="" class="form-control"placeholder="Enter District">
                <div class="child_drop_down d-none">
                  <ul>
                    @foreach($district  as $dis)
                    <li id="{{$dis->id}}">{{$dis->name}}</li>
                    @endforeach
                  </ul>
                </div>
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
                <textarea id="compose-textarea"  class="form-control">
               <h4>Describe Your Product</h4>
                </textarea>
            </div>
           <div>
            <button type="button" class="btn btn-info" onclick="submit_data(this)">Submit </button>
            {{-- <a  class="btn btn-info" href="/add_affiliation_product_img_view">Submit</a> --}}
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
  
<script>
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
</script>
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

  function submit_data(event){
    form_data = Object.fromEntries(new FormData(document.forms['affiliation_product']));
    console.log(form_data)

    var textareaValue = $("#compose-textarea").summernote('code');
    console.log(textareaValue)

    let data = {
      ...form_data,
      details:textareaValue

    }

    console.log(data)

  }


  </script>
@endsection