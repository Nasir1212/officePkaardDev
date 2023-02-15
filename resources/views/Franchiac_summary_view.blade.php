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
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
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
               
                <ul id="show_district" class="row">
                  @if(Session::get('mode')=='branch')
                  <div class='col-3'>
                    <div class="small-box  bg-success">
                        <div class="inner">
                          <h3>53<sup style="font-size: 20px"></sup></h3>
          
                          <p>Feni</p>
                        </div>
                        <div class="icon">
                          <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="{{url('Franchiac_summary_details')}}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                </div>
                 @endif
                </ul>
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
    @if(Session::get('mode')=='admin')
window.onload= ()=>{

  

  showing_branch()

   
    
//let branch = ['Chattogram','Dhaka','Comilla','Sherpur','Satkhira','Feni','Khulna','Mymensingh','Panchagarh','Gopalganj','Kushtia','Nilphamari','Dinajpur','Coxsbazar'];
   
}

async function showing_branch(){


  const response1 = await fetch(`counting_by_reference`)
   const counting_by_reference = await response1.json()

   const response2 = await fetch(`get_branch_all_data`)
   const get_branch_all_data = await response2.json()
console.log(counting_by_reference)
console.log(get_branch_all_data)


  let district_elem = '';
    // var  background;
  
District.forEach(element => {
   var  background = ' bg-warning';
   var ref_code = '';
   var ref_count = '0';
   get_branch_all_data.forEach(ele =>{

        if(element['name'] ==ele['district']){
             background ='bg-success'
             ref_code = ele['reference_code'].toLowerCase()
             counting_by_reference.forEach(e=>{
              if(e['reference_code'] !=null){
                if(e['reference_code'].toLowerCase()==ele['reference_code'].toLowerCase()){
        console.log(e['reference_code'].toUpperCase())
        ref_count = e['ref_total'];
       
       }
              }
      
      })  

        } 
        
       
      })
 

        district_elem += /*html*/`
      <div class='col-3'>
          <div class="small-box  ${background}">
              <div class="inner">
                <h3>${ref_count}<sup style="font-size: 20px"></sup></h3>

                <p>${element['name']}</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="Franchiac_summary_details/${ref_code}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
      </div>
        `;
       

    });
 
    document.getElementById('show_district').innerHTML = district_elem


}


async function getData(){
   
   const response1 = await fetch(`counting_by_reference`)
   const counting_by_reference = await response1.json()

   const response2 = await fetch(`get_branch_all_data`)
   const get_branch_all_data = await response2.json()
console.log(data1)
console.log(data2)
   // do what you want with data1 and data2 here
}

  
  @endif;
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

$(function () {
    $("#example1").DataTable({
      "responsive": false, "lengthChange": true, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    // $('#example2').DataTable({
    //   "paging": true,
    //   "lengthChange": false,
    //   "searching": false,
    //   "ordering": true,
    //   "info": true,
    //   "autoWidth": false,
    //   "responsive": true,
    // });
  });
  
  </script>

@endsection