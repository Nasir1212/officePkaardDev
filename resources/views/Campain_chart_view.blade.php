{{-- @dd($data); --}}
@extends('master.master')

@section('content')

<div class="card">



     <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Campain Details</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Campain Details </li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="form-group col-sm-12 col-md-6 col-lg-6">

          <label for="">Campain Start</label>

          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
          </div>
          </div>


        <div class="form-group col-sm-12 col-md-6 col-lg-6">
          <label for="">Campain Deadline</label>

          <div class="input-group">
            <div class="input-group-prepend">
              <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
            </div>
            <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
          </div>
        </div>

      </div>
        <table class="table table-bordered table-striped table-hover">
            <thead >
              <tr>
                <th scope="col">#</th>
                <th scope="col">KPI</th>
                <th scope="col">Percentage</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody id="campain_table">
              <?php $i = 1; ?>
              @foreach($campain as $cam)
              <tr>
                <td>{{$i++}}</td>
              
                <td><input id="kpi" class="form-control" style="width:7.5rem" type="text" value="{{$cam->kpi}}"> </td>
                <td><input id="percentage" class="form-control" style="width:7.5rem" type="text" value="{{$cam->percentage}}%"></td>
                
                <td>
                   <button onclick="change_percentage_campin('{{$cam->id}}',this)" class="btn btn-sm btn-info"><i class='far fa-edit'></i> Change</button>
                  ||

                  <button onclick="change_percentage_campin('{{$cam->id}}',this)" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> Delete</button>

                  </td>

              </tr>
@endforeach

             
             

            <tbody>
              <tfoot>
                <tr>
                  <td colspan="3">
                   
                  </td>
                  <td>
                    <button onclick="new_campain()" class="btn btn-sm btn-outline-warning d-flex justify-center">New Campain</button>
                   


                  </td>
                </tr>
              </tfoot>

            </table>
            <div class="row">
              <div class="w-100 d-flex justify-content-around">
                <button class="btn btn-lg btn-info"><i class="fa fa-bullseye"></i> Campain Start</button>
                <button  class="btn btn-lg btn-secondary" ><i class="fa fa-calculator" > </i> Campain Calculate</button>

              </div>

            
            </div>

            <div class="row">
              <div class="col">
                <table class="table table-bordered table-striped table-hover">
                  <thead >
                    <tr>
                  
                      <th scope="col">Title </th>
                      <th scope="col">Info</th>
                    </tr>
                  </thead>
                    <tbody>
                    <tr>
                      <td>Total Card Registation</td>
                      <td>3000</td>
                    </tr>

                    <tr>
                      <td>Total  Income</td>
                      <td>600,000 TK</td>
                    </tr>

                    <tr>
                      <td>Company Income</td>
                      <td>500,000 TK</td>
                    </tr>

                    <tr>
                      <td>Franchiac  Income</td>
                      <td>100,000 TK</td>
                    </tr>

                    <tr>
                      <td>1-100 KPI</td>
                      <td>card 1000  Person 10</td>
                    </tr>

                    <tr>
                      <td>101-200 KPI</td>
                      <td>card 800  Person 7</td>
                    </tr>

                    <tr>
                      <td>201-300 KPI</td>
                      <td>card 300  Person 10</td>
                    </tr>

                    <tr>
                      <td>301-400 KPI</td>
                      <td>card 600  Person 15</td>
                    </tr>

                    <tr>
                      <td>401-500 KPI</td>
                      <td>card 1000  Person 2</td>
                    </tr>

                    </tbody>
                </table>
              </div>
            </div>
<div>
  <button class="btn btn-info float-right"><i class="fa fa-download" aria-hidden="true"></i> Download </button>
</div>
            <br>
            <br>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<script>
function change_percentage_campin(id,evt){
let ele = evt.parentElement.previousElementSibling.children[0].value;
console.log(ele)



return true;
fetch(`change_percentage_campin/${id}/${ele.replace('%','')}`)
.then(response=>response.json())
.then(data=>{
  console.log(data)
  if(data['condition']==true){
    swal("successful",data['message'], "success"); 
}else{
    swal("Opps!",data['message'], "error"); 
}
  
})
.catch(e=>{
  console.log(e)
  swal("Opps!",'Something went wrong', "error"); 
})
console.log(ele.replace('%',''))
}

function new_campain(){
 
  console.log(campain_table.children[campain_table.children.length-1].children[0].innerText);
let td = `
  <td>${Number(campain_table.children[campain_table.children.length-1].children[0].innerText)+1}</td>
  <td><input class="form-control" style="width:7.5rem" type="text" value=""></td>
  <td><input class="form-control" style="width:7.5rem" type="text" value=""></td>
  <td>
    
    <button onclick="" class="btn btn-sm btn-outline-success"><i class='fas fa-clone'></i> Submit</button>
    ||

    <button onclick="" class="btn btn-sm btn-outline-danger"> <i class='fas fa-cut'></i> Remove</button>

    </td>
`;

let tr = document.createElement('tr');
tr.innerHTML = td;

campain_table.append(tr);
}


//Datemask dd/mm/yyyy
$('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
</script>


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
  <!-- AdminLTE App -->
  {{-- <script src="{{ asset('assets/dist/js/adminlte.min.js')}}"></script> --}}
  <script>


  
  </script>

@endsection