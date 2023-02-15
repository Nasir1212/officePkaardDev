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
            <h1 class="m-0">Overall Report</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Overall Report</li>
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
               
                <div>
                    <a class="btn btn-warning" data-btn_status="year" onclick="showing_remp_btn('year',this)">Yearly Report </a>
                    <a  class = "btn btn-danger"  data-btn_status="month"  onclick="showing_remp_btn('month',this)" >Monthly Report  </a>
                    <a class="btn btn-info"   data-btn_status="daily"   onclick="showing_remp_btn('daily',this)">Daily Report</a>
                </div>

                <div class="yearly_report d-none" id='year'>
                    <div>
                        <div class="form-group col-sm-12 col-md-7 col-lg-6">
                            <label for="">Select Year </label>
                            <select  class="form-control"  name="" id="">
                                <option value="">Select Year</option>
                                <option value="">2023</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Registation</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Delivery</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Return</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Revenue </label>
                              </div>
                        </div>

                        <div>
                            <button class="btn btn-success">Generate Report</button>
                        </div>

                    </div>
                </div>


                <div class="monthly_report  d-none" id="month">
                    <div>
                        <div class="form-group col-sm-12 col-md-7 col-lg-6">
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

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Registation</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Delivery</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Return</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Revenue </label>
                              </div>
                        </div>

                        <div>
                            <button class="btn btn-success">Generate Report</button>
                        </div>

                    </div>
                </div>


                <div class="monthly_report d-none" id="daily">
                    <div>
                        <div class="col-sm-12 col-md-7 col-lg-6 mt-3 d-flex">

                       
                        <div class="form-group ">
                            <label for=""> From </label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                        </div>

                        <div class="form-group ">
                            <label for=""> To </label> 
                            <div class="input-group date" id="reservationdateTo" data-target-input="nearest">
                              <input type="text" class="form-control datetimepicker-input" data-target="#reservationdateTo">
                              <div class="input-group-append" data-target="#reservationdateTo" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                         </div>
                    </div>

                  
                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Registation</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Delivery</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Return</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox">
                                <label class="form-check-label">Revenue </label>
                              </div>
                        </div>

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
{{-- <!-- AdminLTE App -->
<script src="{{asset('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets/dist/js/demo.js')}}"></script> --}}

  <script>


  

    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    $('#reservationdateTo').datetimepicker({
        format: 'L'
    });
  function showing_remp_btn(d,t){
    ['year','month','daily'].forEach(ele=>{
      document.getElementById(ele).classList.add('d-none')
      document.querySelector(`[data-btn_status="${ele}"]`).style.cssText=''
    })

    document.getElementById(d).classList.remove('d-none')
    console.log(t.dataset.btn_status)
    document.querySelector(`[data-btn_status="${d}"]`).style.cssText='background-color:green !important;color:white !important;'
    
  }
  </script>

@endsection