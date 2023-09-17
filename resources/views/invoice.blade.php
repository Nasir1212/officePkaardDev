@extends('master.master')

@section('content')


<style id="invoice_style">
    body{
background:#eee;
margin-top:20px;
}
.text-danger strong {
        color: #9f181c;
    }
    .receipt-main {
        background: #ffffff none repeat scroll 0 0;
        border-bottom: 12px solid #333333;
        border-top: 12px solid #9f181c;
        margin-top: 50px;
        margin-bottom: 50px;
        padding: 40px 30px !important;
        position: relative;
        box-shadow: 0 1px 21px #acacac;
        color: #333333;
        font-family: open sans;
        width: 100%;
    }
    .receipt-main p {
        color: #333333;
        font-family: open sans;
        line-height: 1.42857;
    }
    .receipt-footer h1 {
        font-size: 15px;
        font-weight: 400 !important;
        margin: 0 !important;
    }
    .receipt-main::after {
        background: #414143 none repeat scroll 0 0;
        content: "";
        height: 5px;
        left: 0;
        position: absolute;
        right: 0;
        top: -13px;
    }
    .receipt-main thead {
        background: #414143 none repeat scroll 0 0;
    }
    .receipt-main thead th {
        color:#fff;
    }
    .receipt-right h5 {
        font-size: 16px;
        font-weight: bold;
        margin: 0 0 7px 0;
    }
    .receipt-right p {
        font-size: 12px;
        margin: 0px;
    }
    .receipt-right p i {
        text-align: center;
        width: 18px;
    }
    .receipt-main td {
        padding: 9px 20px !important;
    }
    .receipt-main th {
        padding: 13px 20px !important;
    }
    .receipt-main td {
        font-size: 13px;
        font-weight: initial !important;
    }
    .receipt-main td p:last-child {
        margin: 0;
        padding: 0;
    }	
    .receipt-main td h2 {
        font-size: 20px;
        font-weight: 900;
        margin: 0;
        text-transform: uppercase;
    }
    .receipt-header-mid .receipt-left h1 {
        font-weight: 100;
        margin: 34px 0 0;
        text-align: right;
        text-transform: uppercase;
    }
    .receipt-header-mid {
        margin: 24px 0;
        overflow: hidden;
    }
    
    #container {
        background-color: #dcdcdc;
    }
    .main{
        width: 80%;
        float: right;
    }

    @media screen and (max-width: 567px) {
    .receipt-main{
        padding: 10px 8px !important;
    }
    
    }

    @media screen and (max-width: 965px) {
  
    .main{
        width: 100% !important;

    }
    }

    @media screen and (max-width: 450px) {
    .receipt-main{
        padding: 10px 8px !important;
     
    }
  
    .receipt-main th {
    padding: 6px 6px !important;
    font-size: 0.8rem;
}
.receipt-main td h2 {
    font-size: 13px;
   
   
}
    
}


</style>



<div class="row main"  >
    <div class="col-12">   
        <div class="row">
           
           <div class="receipt-main">
               <div class="row">
                <div class="col-12">

             
                   <div class="receipt-header d-flex justify-content-between">
                       <div class="">
                           <div class="receipt-left">
                               <img class=" img-responsive" alt="iamgurdeeposahan" src="{{asset('./assets/images/pkaard_logo.jpeg')}} " style="width: 6rem;height: 3rem;">
                           </div>
                       </div>
                       <div class="text-right">
                           <div class="receipt-right invoice_company_inof p_lg">
                               <h5>Company info</h5>
                               <p>096-77-888-222<i class="fa fa-phone"></i></p>
                               <p>support@pkaard.com <i class="fa fa-envelope-o"></i></p>
                               <p>Bangladesh <i class="fa fa-location-arrow"></i></p>
                           </div>

                           <div style="text-align: left;" class="receipt-right   d-none p_sm">
                               <h5>Company info</h5>
                               <p><i class="fa fa-phone"></i>096-77-888-222</p>
                               <p><i class="fa fa-envelope-o"></i>support@pkaard.com </p>
                               <p><i class="fa fa-location-arrow"></i>Bangladesh </p>
                           </div>
                       </div>
                   </div>
               </div>
            </div>
               <div class="row">
                <div class="col-12">

              
                   <div class="invoic_customer_invoice_no receipt-header receipt-header-mid d-flex  justify-content-between">
                       <div class="text-left">


                           <div class="receipt-right">
                               <h5>Customer info </h5>
                               <p><b>Name</b> {{$data[0]['full_name']}}</p>
                               <p><b>Mobile :</b> {{$data[0]['phone_number']}}</p>
                               <p><b>Email :</b> {{$data[0]['email']}} </p>
                               <p><b>Registration No :</b>1509002{{$data[0]['card_id']}} </p>
                               <p><b>Address :</b>Division  {{$data[0]['division']}},District   {{$data[0]['district']}},Upzilla {{$data[0]['upzilla']}},  </p>
                               <p> <b> Full Address: </b> {{$data[0]['cda_address_details']}}</p>
                            </div>
                       </div>
                      
                           <div class="receipt-left">
                               <h5><b>INVOICE # </b>  pd{{$data[0]['invoice_number']}}</h5>
                               <h6> <b>Submission Date :</b>{{ date('j F, Y', strtotime($data[0]['register_date'])) }} </h6>
                               <h6> <b>Delivery Date  :</b> Card will be delivered within 30 days </h6>
                           </div>
                      
                   </div>
               </div>

            </div>
               
               <div class="row ">
                   <table class="table table-bordered ">
                       <thead>
                           <tr>
                               <th>Description</th>
                               <th>Unit price</th>
                               <th>Price/BDT  </th>
                               <th>Total</th>
                           </tr>
                       </thead>
                       <tbody>
                          <tr>
                            <td>Pkaard Privilege Card </td>
                            <td>1000.00 BDT</td>
                            <td>00.00 BDT</td>
                            <td>00.00 BDT</td>
                          </tr>

                          <tr>
                            <td>Delivery Charge </td>
                            <td>200.00 BDT </td>
                            <td>200.00 BDT </td>
                            <td>200.00 BDT </td>
                          </tr>

                           <tr>
                              <td></td>
                              <td></td>
                               <td class="text-right"><h2><strong>Total: </strong></h2></td>
                               <td class="text-left text-danger"><h2><strong><i class="fa fa-bdt"></i> 200.00 BDT</strong></h2></td>
                           </tr>
                       </tbody>
                   </table>
               </div>
              
               <div  style="float: right;cursor: pointer;" onclick="print_invoice('{{$data[0]['card_id']}} ');">
                <p><span class="material-symbols-outlined">print</span></p>
               </div>
               
           </div>    
       </div>
  </div>
</div>


<script>
 function print_invoice(card_id){
   
let mywindow = window.open(`${location.origin}/print_invoice/${card_id}`,"_blank","toolbar=yes,scrollbars=yes,resizable=yes,top=5,left=5,width=1200,height=1000");
mywindow.focus(); // necessary for IE >= 10*/

mywindow.print();

 }
</script>

@endsection