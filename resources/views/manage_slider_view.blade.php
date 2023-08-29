{{-- @dd($data); --}}
@extends('master.master')

@section('content')

<style>

.slider_img_col span {
float: right;
font-size: 1.2rem;
cursor: pointer;
}
.slider_img_col img {
    height: 10rem;
    width: 100%;
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
            <h4 class="m-0">Manage Slider</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active">Manage Slider</li>
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

        <!-- Top Slider Image  --->
        <div class="card">
            <div class="card-header">
                <h4>Top Slider Image </h4>
            </div>
            <div class="card-body">
                <div class='row' id="TopSlider">
                    
                     

                         
                    <div class='col-sm-6 col-md-4 col-lg-4 mb-2'>
                        <div class='slider_img_col'>
                        <span  >&#10008;</span>
                        <img src="https://sgp1.digitaloceanspaces.com/gozayaan/media/uploaded_content/original-H4hWRRUdYSWeb_Special Deal .jpg" alt="" />
                        </div>
                    </div>
                   

                    <div class='col-sm-6 col-md-4 col-lg-4  mb-2'>
                        <div  class='slider_img_col'>
                        <input id='handleFile' type="file" onchange="handle_change(this);" name="top_slider" style="display:none"/>
                        <label for="handleFile" style="cursor:pointer;margin-top:1.5rem">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ_N3HVX19y1ifWseTrfLg9Ok2WihF1Xp6FMutLcisUTEPcgmEyqtO4ZMTNWN4CfRjlnk&usqp=CAU" alt="" />

                        </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- End Top Slider Image  --->

         <!-- Top Slider Image  --->
        <div class="card">
            <div class="card-header">
                <h4>Bottom Right Slider  Image </h4>
            </div>
            <div class="card-body">
                <div class='row'id="bottomRightSlider" >
                    
                     
                    
                         
                    <div class='col-sm-6 col-md-4 col-lg-4 mb-2'>
                        <div class='slider_img_col'>
                        <span  >&#10008;</span>
                        <img src="https://sgp1.digitaloceanspaces.com/gozayaan/media/uploaded_content/original-H4hWRRUdYSWeb_Special Deal .jpg" alt="" />
                        </div>
                    </div>
                   

                    <div class='col-sm-6 col-md-4 col-lg-4  mb-2'>
                        <div  class='slider_img_col'>
                        <input id='bottom_right_slider' type="file" onchange="handle_change(this);" name="bottom_right_slider"  style="display:none"/>
                        <label for="bottom_right_slider" style="cursor:pointer;margin-top:1.5rem">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ_N3HVX19y1ifWseTrfLg9Ok2WihF1Xp6FMutLcisUTEPcgmEyqtO4ZMTNWN4CfRjlnk&usqp=CAU" alt="" />

                        </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- End Top Slider Image  --->


         <!-- Top Slider Image  --->
        <div class="card">
            <div class="card-header">
                <h4>Bottom Left Slider  Image </h4>
            </div>
            <div class="card-body">
                <div class='row' id="bottomLeftSlider">
                    
                     
                     
                         
                    <div class='col-sm-6 col-md-4 col-lg-4 mb-2'>
                        <div class='slider_img_col'>
                        <span  >&#10008;</span>
                        <img src="https://sgp1.digitaloceanspaces.com/gozayaan/media/uploaded_content/original-H4hWRRUdYSWeb_Special Deal .jpg" alt="" />
                        </div>
                    </div>
                   

                    <div class='col-sm-6 col-md-4 col-lg-4  mb-2'>
                        <div  class='slider_img_col'>
                        <input id='bottom_left_slider' type="file"  onchange="handle_change(this);" name="bottom_left_slider"  style="display:none"/>
                        <label for="bottom_left_slider" style="cursor:pointer;margin-top:1.5rem">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ_N3HVX19y1ifWseTrfLg9Ok2WihF1Xp6FMutLcisUTEPcgmEyqtO4ZMTNWN4CfRjlnk&usqp=CAU" alt="" />

                        </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- End Top Slider Image  --->

      
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
   // top_slider_img
   async function get_slider_img () {
    response  = await fetch('/all_slider_img')
        result  = await response.json();
        
        let TopSliderView='';
        let bottomLeftSliderView='';
        let bottomRightSliderView='';

        result['TopSlider'].forEach((data)=>{
            TopSliderView +=`
            <div class='col-sm-6 col-md-4 col-lg-4 mb-2'>
                <div class='slider_img_col'>
                <span  onclick="Delete('TopSlider',${data['id']})">&#10008;</span>
                <img src="${data['img_path']}" alt="" />
                </div>
            </div>
            
            `;
        })

        TopSliderView+=`
            <div class='col-sm-6 col-md-4 col-lg-4  mb-2'>
                <div  class='slider_img_col'>
                <input id='handleFile' type="file" onchange="handle_change(this);" name="top_slider" style="display:none"/>
                <label for="handleFile" style="cursor:pointer;margin-top:1.5rem">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ_N3HVX19y1ifWseTrfLg9Ok2WihF1Xp6FMutLcisUTEPcgmEyqtO4ZMTNWN4CfRjlnk&usqp=CAU" alt="" />

                </label>
                </div>
            </div>
        `;

        document.getElementById("TopSlider").innerHTML= TopSliderView;


        
        result['bottomLeftSlider'].forEach((data)=>{
            bottomLeftSliderView +=`
            <div class='col-sm-6 col-md-4 col-lg-4 mb-2'>
                <div class='slider_img_col'>
                <span  onclick="Delete('bottomLeftSlider',${data['id']})">&#10008;</span>
                <img src="${data['img_path']}" alt="" />
                </div>
            </div>
            
            `;
        })

        bottomLeftSliderView+=`
            <div class='col-sm-6 col-md-4 col-lg-4  mb-2'>
            <div  class='slider_img_col'>
            <input id='bottom_left_slider' type="file"  onchange="handle_change(this);" name="bottom_left_slider"  style="display:none"/>
            <label for="bottom_left_slider" style="cursor:pointer;margin-top:1.5rem">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ_N3HVX19y1ifWseTrfLg9Ok2WihF1Xp6FMutLcisUTEPcgmEyqtO4ZMTNWN4CfRjlnk&usqp=CAU" alt="" />

            </label>
            </div>
            </div>
        `;
      
        document.getElementById("bottomLeftSlider").innerHTML= bottomLeftSliderView;


        
        result['bottomRightSlider'].forEach((data)=>{
            bottomRightSliderView +=`
            <div class='col-sm-6 col-md-4 col-lg-4 mb-2'>
                <div class='slider_img_col'>
                <span  onclick="Delete('bottomRightSlider',${data['id']})">&#10008;</span>
                <img src="${data['img_path']}" alt="" />
                </div>
            </div>
            
            `;
        })

        bottomRightSliderView+=`
            <div class='col-sm-6 col-md-4 col-lg-4  mb-2'>
                <div  class='slider_img_col'>
                <input id='bottom_right_slider' type="file" onchange="handle_change(this);" name="bottom_right_slider"  style="display:none"/>
                <label for="bottom_right_slider" style="cursor:pointer;margin-top:1.5rem">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ_N3HVX19y1ifWseTrfLg9Ok2WihF1Xp6FMutLcisUTEPcgmEyqtO4ZMTNWN4CfRjlnk&usqp=CAU" alt="" />

                </label>
                </div>
            </div>
        `;
        document.getElementById("bottomRightSlider").innerHTML= bottomRightSliderView;
   }

   get_slider_img();
  async function handle_change(evt){
    
    let data = {}
    let reader = new FileReader() 
    reader.readAsDataURL(evt.files[0])
    reader.onload = () => {    
      if (evt.files[0].type.match('image.*')) {
        data['img_path'] = reader.result;
      
        if(evt.name=='top_slider') upload_server ('/top_slider_img',data)
        if(evt.name=='bottom_left_slider') upload_server ('/bottom_left_slider_img',data)
        if(evt.name=='bottom_right_slider') upload_server ('/bottom_right_slider_img',data)
        
       
    }else{
        swal("Opps! ", `Please Select Image like png,jpeg,svg `, "error"); 
    }
    }

    return ;

       
    }


    async function upload_server (url,data) {

    
        try {
        response  = await fetch(url,{
        method:'POST',

        body:JSON.stringify(data),
        headers: new Headers({
        'Content-Type': 'application/json',

        })
        })
        result  = await response.json();
        console.log(result);
            if(result['condition'] == true){
               
                swal("Thanks! ", result['message'], "success"); 
                get_slider_img () 
            }else{
                swal("Opps! ", result['message'], "error"); 
            }
        } catch (error) {
        console.log(error)
        swal("Opps! ", `Something went Wrong`, "error"); 
        }

    }


   async function Delete(slide,id){

        console.log(slide+" "+id )

        try {
        response  = await fetch("/slide_img_delete",{
        method:'POST',

        body:JSON.stringify({
            slide:slide,
            id:id
        }),
        headers: new Headers({
        'Content-Type': 'application/json',

        })
        })
        result  = await response.json();
        console.log(result);
            if(result['condition'] == true){
               
                swal("Thanks! ", result['message'], "success"); 
                get_slider_img () 
            }else{
                swal("Opps! ", result['message'], "error"); 

            }
        } catch (error) {
        console.log(error)
        swal("Opps! ", `Something went Wrong`, "error"); 
        }


    }

</script>

@endsection