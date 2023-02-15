{{-- @dd($data); --}}
@extends('master.master')

@section('content')

<style>
    #show_district{
        list-style: none
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
            <h1 class="m-0">Corporate Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Corporate Report </li>
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
        <h3 class="card-title">DataTable with default features</h3>
       
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="row">
           <div class="col-12">
            
            <div class="yearly_report">
              <div class="row">
                  <div class="form-group col-sm-12 col-md-6 col-lg-6">
                      <label for="">Select Year </label>
                      <select  class="form-control"  name="" id="">
                          <option value="">Select Year</option>
                          <option value="">2023</option>
                      </select>
                  </div>

                  <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label for="">Select Month </label>
                    <select  class="form-control"  name="" id="">
                      <option value="">Select Month</option>
                      <option value="">January</option>
                      <option value="">February</option>
                      <option value="">March</option>
                      <option value="">April</option>
                      <option value="">May</option>
                      <option value="">June</option>
                      <option value="">July</option>
                      <option value="">August</option>
                      <option value="">September</option>
                      <option value="">October</option>
                      <option value="">November</option>
                      <option value="">December </option>
                  
                     
                  </select>
                </div>

                

                <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label for="">Select Date </label>
                    <div class=" d-flex">

                        
        
                      <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" placeholder="From">
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                    <div class="input-group date" id="reservationdateTo" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" data-target="#reservationdateTo" placeholder="To">
                      <div class="input-group-append" data-target="#reservationdateTo" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                      </div>
                  </div>
                    </div>
    
              </div>

              <div class="form-group  col-sm-12 col-md-6 col-lg-6" >
                <label for="">Select District </label>
                <select   class="form-control" name="" id="district">
                  <option value=""></option>
                </select>
              </div>

              <div class="form-group col-sm-12 col-md-6 col-lg-6">
                <label for="">Reference Code  </label>
               <input   class="form-control" placeholder="Reference Code " type="text">
            </div>
            <div class="form-group  col-sm-12 col-md-6 col-lg-6" >
              <label for="">Mark Other</label>
              <div class=" d-flex">

              
              <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Registation</label>
                  </div>
            </div>

            <div class="form-group ml-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Delivery</label>
                  </div>
            </div>

            <div class="form-group ml-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Return</label>
                  </div>
            </div>

            <div class="form-group ml-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">Revenue </label>
                  </div>
            </div>
          </div>
              
            </div>

            <div class="form-group col-12 ">
              <hr>
              <label for="">Mark Table Column</label>
              <div class="row">

                <div class="form-group col-2">
                  <div class="form-check">
                      <input class="form-check-input" type="checkbox">
                      <label class="form-check-label">Card No </label>
                    </div>
              </div>

              <div class="form-group col-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox">
                    <label class="form-check-label">CDA Address  </label>
                  </div>
            </div>

            <div class="form-group col-2">
              <div class="form-check">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">CDA Apartment No </label>
                </div>
          </div>

          

        <div class="form-group col-2">
          <div class="form-check">
              <input class="form-check-input" type="checkbox">
              <label class="form-check-label">CDA Division </label>
            </div>
      </div>

      <div class="form-group col-2">
        <div class="form-check">
            <input class="form-check-input" type="checkbox">
            <label class="form-check-label">CDA House No </label>
          </div>
    </div>

           
    <div class="form-group col-2">
      <div class="form-check">
          <input class="form-check-input" type="checkbox">
          <label class="form-check-label">CDA Road  No </label>
        </div>
  </div>

         
  <div class="form-group col-2">
    <div class="form-check">
        <input class="form-check-input" type="checkbox">
        <label class="form-check-label">CDA Upzilla </label>
      </div>
</div>



<div class="form-group col-2">
  <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label">CDA Thana </label>
    </div>
</div>

     
<div class="form-group col-2">
  <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label">CDA Village  </label>
    </div>
</div>

     
<div class="form-group col-2">
  <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label">CDA House No </label>
    </div>
</div>

<div class="form-group col-2">
  <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label">Date of Birth </label>
    </div>
</div>


<div class="form-group col-2">
  <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label">District</label>
    </div>
</div>



<div class="form-group col-2">
  <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label"> Division </label>
    </div>
</div>



<div class="form-group col-2">
  <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label">Email</label>
    </div>
</div>


<div class="form-group col-2">
  <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label"> Full Name  </label>
    </div>
</div>



<div class="form-group col-2">
  <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label">Gender</label>
    </div>
</div>



<div class="form-group col-2">
  <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label">Nationality</label>
    </div>
</div>
				


<div class="form-group col-2">
  <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label">Phone Number</label>
    </div>
</div>





<div class="form-group col-2">
  <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label">Mediam</label>
    </div>
</div>


<div class="form-group col-2">
  <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label">Profession</label>
    </div>
</div>


<div class="form-group col-2">
  <div class="form-check">
      <input class="form-check-input" type="checkbox">
      <label class="form-check-label">Invoice Number</label>
    </div>
</div>


     
  
              </div>
             






          </div>
                 
               <br>
               <br>
               <br>  
                  
                  <div>
                      <button class="btn btn-success">Generate Report</button>
                  </div>

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


<script>
    // console.log(District)
    // $('#datetimepicker4').datetimepicker({
    //     format: 'DD/MM/YYYY',
    //     viewMode: 'years',
    //     icons: {
    //               time: "fa fa-clock-o",
    //               date: "fa fa-calendar",
    //                up: "fa fa-arrow-up",
    //                down: "fa fa-arrow-down"
    //            }
         
    // });

</script>

<script>
  console.log(District)

 
  window.onload = ()=>{
let dist_ele = `<option > Select District  </option> <option> All District  </option>`;
    District.forEach(element => {
    console.log(element)
dist_ele +=`<option value='${element['name']}' >${element['name']}</option> `;


    
  });

document.getElementById('district').innerHTML = dist_ele;

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

  <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/jszip/jszip.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
  <script src="{{ asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
  <script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('assets/plugins/daterangepicker/daterangepicker.js')}}"></script>
  <script>

$('#datetimepicker4').datetimepicker({
        format: 'DD/MM/YYYY',
        viewMode: 'years',
        icons: {
                  time: "fa fa-clock-o",
                  date: "fa fa-calendar",
                   up: "fa  fa-arrow-up",
                   down: "fa fa-arrow-down"
               }
         
    });


    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    $('#reservationdateTo').datetimepicker({
        format: 'L'
    });

  
  
  </script>

@endsection