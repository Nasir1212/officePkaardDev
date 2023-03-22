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
        <h3 class="card-title">Your Reports</h3>
       
      </div>
      <!-- /.card-header -->
      <?php 
      $url_para =  $_SERVER['REQUEST_URI'];
      $explode_param =  explode("/",$url_para);
      $reference_code  =  $explode_param[count($explode_param)-1];
      
      
      ?>
      <div class="card-body">
        <div class="row">
            <div class="col-12">
               
                <div>
                    <a class="btn btn-warning" data-btn_status="year" onclick="showing_remp_btn('year',this)">Yearly Report </a>
                    <a  class = "btn btn-danger"  data-btn_status="month"  onclick="showing_remp_btn('month',this)" >Monthly Report  </a>
                    <a class="btn btn-info"   data-btn_status="daily"   onclick="showing_remp_btn('daily',this)">Daily Report</a>
                </div>

                <div class="yearly_report d-none" id='year'>
                  <form name="year">
                    <div>
                        <div class="form-group col-sm-12 col-md-7 col-lg-6">
                            <label for="">Select Year </label>
                            <select  class="form-control"  name="per_year" id="">
                                <option value="">Select Year</option>
                                <option >2023</option>
                                <option >2024</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input name="registation" class="form-check-input" type="checkbox">
                                <input name="reference_code" value="<?php echo  $reference_code ?>" class="form-check-input" type="hidden">
                                <label class="form-check-label">Registation</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input name="delivery" class="form-check-input" type="checkbox">
                                <label  class="form-check-label">Delivery</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input name="return" class="form-check-input" type="checkbox">
                                <label class="form-check-label">Return</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input name="revenue" class="form-check-input" type="checkbox">
                                <label class="form-check-label">Revenue </label>
                              </div>
                        </div>

                        <div>
                            <button type="button"  onclick="genereting_report('year')" class="btn btn-success">Generate Report</button>
                        </div>

                    </div>
                  </form>
                </div>


                <div class="monthly_report  d-none" id="month">
                  <form name="monthly">
                    <div>
                        <div class="form-group col-sm-12 col-md-7 col-lg-6">
                            <label for="">Select Month </label>
                            <select  class="form-control"  name="per_month" id="">
                                <option value="">Select Month</option>
                                <option value="01" >January</option>
                                <option value="02" >February</option>
                                <option value="03"  >March</option>
                                <option value="04" >April</option>
                                <option value="05" >May</option>
                                <option value="06" >June</option>
                                <option value="07" >July</option>
                                <option value="08" >August</option>
                                <option value="09" >September</option>
                                <option value="10" >October</option>
                                <option value="11" >November</option>
                                <option value="12" >December </option>
                            
                               
                            </select>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                              <input name="reference_code" value="<?php echo  $reference_code ?>" class="form-check-input" type="hidden">

                                <input name="registation" class="form-check-input" type="checkbox">
                                <label class="form-check-label">Registation</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input name="delivery" class="form-check-input" type="checkbox">
                                <label class="form-check-label">Delivery</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input name="return" class="form-check-input" type="checkbox">
                                <label class="form-check-label">Return</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input name="revenue" class="form-check-input" type="checkbox">
                                <label class="form-check-label">Revenue </label>
                              </div>
                        </div>

                        <div>
                            <button  type="button"  onclick="genereting_report('monthly')" class="btn btn-success">Generate Report</button>
                        </div>

                    </div>
                  </form>
                </div>


                <div class="monthly_report d-none" id="daily">
                  <form name="daily">
                    <div>
                        <div class="col-sm-12 col-md-7 col-lg-6 mt-3 d-flex">

                       
                        <div class="form-group ">
                            <label for=""> From </label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                              <input name="form_date" type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                              <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                        </div>

                        <div class="form-group ">
                            <label for=""> To </label> 
                            <div class="input-group date" id="reservationdateTo" data-target-input="nearest">
                              <input name="to_date" type="text" class="form-control datetimepicker-input" data-target="#reservationdateTo">
                              <div class="input-group-append" data-target="#reservationdateTo" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div>
                          </div>
                         </div>
                    </div>

                  
                        <div class="form-group">
                            <div class="form-check">
                                <input name="registation" class="form-check-input" type="checkbox">
                                <label class="form-check-label">Registation</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input name="delivery" class="form-check-input" type="checkbox">
                                <input name="reference_code" value="<?php echo  $reference_code ?>" class="form-check-input" type="hidden">
                                <label class="form-check-label">Delivery</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input name="return" class="form-check-input" type="checkbox">
                                <label class="form-check-label">Return</label>
                              </div>
                        </div>

                        <div class="form-group">
                            <div class="form-check">
                                <input name="revenue" class="form-check-input" type="checkbox">
                                <label class="form-check-label">Revenue </label>
                              </div>
                        </div>

                        <div>
                            <button type="button"  onclick="genereting_report('daily')"  class="btn btn-success">Generate Report</button>
                        </div>

                    </div>
                  </form>
                </div>
               
            </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>

    <div id="show_result">
   
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

  function genereting_report(data){
    let form_data=    Object.fromEntries(new FormData(document.forms[data]));
    console.log(form_data)
    show_result.innerHTML ='';
  
fetch('/genereting_report',
  {
    method: 'POST',
    body:JSON.stringify(form_data),
    headers: new Headers({
                'Content-Type': 'application/json',
              
            })
  } 
)
.then(response => response.json())
.then(data => {
console.log(data)

let elem = '';
let Registation_tr = form_data['registation'] =='on'?`<tr><td>Registation</td> <td>${data['registation']}</td> </tr>`:'';
let return_tr = form_data['return'] =='on'?`<tr>  <td>Return</td>  <td>${data['return']}</td></tr>`:'';
let delivery_tr = form_data['delivery'] =='on'?`<tr> <td>Delivery</td>  <td>${data['deliv']}</td></tr>`:'';
console.log(data['revenue'])
let revenue_tr =''; 
data['revenue'].forEach((d=>{
  console.log(d['amount'])
  revenue_tr +=`
<tr>
  <td>${d['paied_date']}</td>
  <td>${d['amount']}<b>৳</b></td>
</tr>
  
  `;
}))
// if( form_data['revenue'] =='on'){
 
// }

let RevenueTable = `
<table class="table table-bordered table-striped table-hover">
        <caption style="caption-side:top;text-align:center">Generating Revenue Report</caption>

        <thead>
           <tr>
             <th>Paid Date</th>
             <th>Amount</th>
           </tr>
         </thead>
         <tbody>
          ${revenue_tr}
         </tbody>
       </table>


`;

let reg_ret_del_table = `
<table class="table table-bordered table-striped table-hover">
          <caption style="caption-side:top;text-align:center">Generating Report</caption>
          <thead>
            <tr>
              <th>Title</th>
              <th>Total</th>
            </tr>
          </thead>
          
          <tbody>
            ${Registation_tr}

            ${return_tr}

            ${delivery_tr}
          </tbody>
        </table>
        <br>
       <br>
`;

 elem +=/*html*/ `

<div class="card">
      <div class="card-body">
        
      ${form_data['registation'] =='on'|| form_data['return'] =='on' || form_data['delivery'] =='on'?reg_ret_del_table :''}
      ${form_data['revenue'] =='on'? RevenueTable:""}
      </div>
    </div>

`;
show_result.innerHTML  = elem
})


  }
  </script>

@endsection