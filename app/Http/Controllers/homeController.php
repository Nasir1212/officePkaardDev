<?php

namespace App\Http\Controllers;
use Shuchkin\SimpleXLSX;

use Illuminate\Http\Request;
use App\Models\Withdraw_payment;
use App\Models\franchise_profile;
use App\Models\Campain_chart;
use App\Models\card_registation;
use App\Models\branch_user;
use App\Models\OTP;
use App\Models\IP;
use App\Models\All_Reference;
use App\Models\Reference_rogram;
use Illuminate\Http\Response;
use App\Models\Category;
use App\Mail\AdminOtpMail;
use App\Models\District;
use App\Models\Affiliation_product;
use App\Models\Affiliation_partner;
use App\Models\aff_sub_discount_product;
use App\Models\AffiliationPartnerRequest;
use App\Models\TopSliderModel;
use App\Models\BottomRightSlider;
use App\Models\BottomLeftSlider;
use App\Models\CardDelivery;




use Illuminate\Support\Facades\Mail;
class homeController extends Controller
{
    public function get_all_register(){

       $data =  card_registation::all();
       return view('all_card_register');


    }

    public function get_all_card_register($offset,$search_value){
      if($search_value =='undefined'){
       $total_count = count(card_registation::all());
      $data =  card_registation::orderBy('id', 'DESC')->offset($offset-1)->limit(500)->get();
      return json_encode( array('data'=>$data,'total_count'=>$total_count)); 
      }else{
      
         $data =  card_registation::orderBy('id', 'DESC')
         ->where('card_id','LIKE','%'.$search_value.'%')
         ->orWhere('cda_address_details','LIKE','%'.$search_value.'%')
         ->orWhere('cda_apartment_no','LIKE','%'.$search_value.'%')
         ->orWhere('cda_district','LIKE','%'.$search_value.'%')
         ->orWhere('cda_division','LIKE','%'.$search_value.'%')
         ->orWhere('cda_house_no','LIKE','%'.$search_value.'%')
         ->orWhere('cda_road_no','LIKE','%'.$search_value.'%')
         ->orWhere('cda_upzilla','LIKE','%'.$search_value.'%')
         ->orWhere('cda_Thana','LIKE','%'.$search_value.'%')
         ->orWhere('cda_village','LIKE','%'.$search_value.'%')
         ->orWhere('date_of_birth','LIKE','%'.$search_value.'%')
         ->orWhere('district','LIKE','%'.$search_value.'%')
         ->orWhere('division','LIKE','%'.$search_value.'%')
         ->orWhere('email','LIKE','%'.$search_value.'%')
         ->orWhere('full_name','LIKE','%'.$search_value.'%')
         ->orWhere('gender','LIKE','%'.$search_value.'%')
         ->orWhere('nationality','LIKE','%'.$search_value.'%')
         ->orWhere('phone_number','LIKE','%'.$search_value.'%')
         ->orWhere('reference_code','LIKE','%'.$search_value.'%')
         ->orWhere('mediam','LIKE','%'.$search_value.'%')
         ->orWhere('profession','LIKE','%'.$search_value.'%')
         ->orWhere('register_date','LIKE','%'.$search_value.'%')
         ->orWhere('invoice_number','LIKE','%'.$search_value.'%')
         ->offset($offset-1)
         ->limit(500)
         ->get();

         $total_counting = card_registation::where('card_id','LIKE','%'.$search_value.'%')
         ->orWhere('cda_address_details','LIKE','%'.$search_value.'%')
         ->orWhere('cda_apartment_no','LIKE','%'.$search_value.'%')
         ->orWhere('cda_district','LIKE','%'.$search_value.'%')
         ->orWhere('cda_division','LIKE','%'.$search_value.'%')
         ->orWhere('cda_house_no','LIKE','%'.$search_value.'%')
         ->orWhere('cda_road_no','LIKE','%'.$search_value.'%')
         ->orWhere('cda_upzilla','LIKE','%'.$search_value.'%')
         ->orWhere('cda_Thana','LIKE','%'.$search_value.'%')
         ->orWhere('cda_village','LIKE','%'.$search_value.'%')
         ->orWhere('date_of_birth','LIKE','%'.$search_value.'%')
         ->orWhere('district','LIKE','%'.$search_value.'%')
         ->orWhere('division','LIKE','%'.$search_value.'%')
         ->orWhere('email','LIKE','%'.$search_value.'%')
         ->orWhere('full_name','LIKE','%'.$search_value.'%')
         ->orWhere('gender','LIKE','%'.$search_value.'%')
         ->orWhere('nationality','LIKE','%'.$search_value.'%')
         ->orWhere('phone_number','LIKE','%'.$search_value.'%')
         ->orWhere('reference_code','LIKE','%'.$search_value.'%')
         ->orWhere('mediam','LIKE','%'.$search_value.'%')
         ->orWhere('profession','LIKE','%'.$search_value.'%')
         ->orWhere('register_date','LIKE','%'.$search_value.'%')
         ->orWhere('invoice_number','LIKE','%'.$search_value.'%')
         ->get();

        
         $total_count = count( $total_counting);
         return json_encode( array('data'=>$data,'total_count'=>$total_count)); 

      }
    
    }

    public function invoice($card_id){
      $data =  card_registation::where(['card_id'=>$card_id])->get();
      return view('invoice',['data'=>$data]);

    }

    
    public function print_invoice($card_id){
      $data =  card_registation::where(['card_id'=>$card_id])->get();
      return view('print_invoice',['data'=>$data]);

    }


    public function dashboard(){
     
   if(session()->get('mode') =='branch' || session()->get('mode')== 'reference_rogram'){
      $reference_code =session()->get('data')[0]['reference_code'];

      $total_reg = card_registation::where(['reference_code'=>$reference_code])->count();
      $daily=  card_registation::where(['reference_code'=>$reference_code])->where(['register_date'=>date('Y/m/d')])->count();
      $monthly= card_registation::where(['reference_code'=>$reference_code])->where('register_date','LIKE','_____'.date('m').'___')->count();

      return view('dashboard',['total_reg'=>$total_reg,'daily'=>$daily,'monthly'=>$monthly]);


   }
      $visitor = count( IP::where(['date'=>date('Y/m/d')])->get());
      $total_reg = count( card_registation::all());
      $daily=  count(card_registation::where(['register_date'=>date('Y/m/d')])->get());
      $monthly=  count(card_registation::where('register_date','LIKE','_____'.date('m').'___')->get());

      return view('dashboard',['total_reg'=>$total_reg,'daily'=>$daily,'monthly'=>$monthly,'visitor'=>$visitor]);
   }
   

    
    public function  get_one_data_card_register($id){
      $data  =  card_registation::where(['id'=>$id])->get();
      return $data;
    }

    public function update_feedback(Request $req){
      $result = card_registation::where(['id'=>$req->input("id")])->update([
         'feedback'=>$req->input('feedback'),
      ]);

         if($result){       
         return  json_encode(array('message'=>'feedback saved','condition'=>true));
         }else{
         return json_encode(array('message'=>' feedback not saved ','condition'=>false));
         }
    }
    
    public function all_reference_code(){
    return  $result =  All_Reference::all();

    }

    public function confirm_call($id){
      $result = card_registation::where(['id'=>$id])->update([
         'is_call'=>true,
      ]);

         if($result){       
         return  json_encode(array('message'=>'Thanks for calling ','condition'=>true));
         }else{
         return json_encode(array('message'=>' calling confirm failed ','condition'=>false));
         }
   
   }

    public function get_one_reference_code($id,$action){
       if($action=='get_one'){
         return  $result =  All_Reference::where(['id'=>$id])->get();


       }else if($action=='delete'){
         $delete  = All_Reference::where(['id'=>$id])->delete();
         if($delete){
            return json_encode(array('condition'=>true,'message'=>'successfully deleted'));
         }else{
            return json_encode(array('condition'=>false,'message'=>' delete failed'));

         }
       }


      
  
      }

      public function reference_code_update(Request $req){
         $id = $req->input("id");
         $reference_code = $req->input("reference_code");

         $result = All_Reference::where(['id'=>$id])->update([
            'reference_code' =>$reference_code
            ]);
   
            if($result){
                     
               return  json_encode(array('message'=>'successfully Reference Code Updated ','condition'=>true));
            }else{
               return json_encode(array('message'=>' Reference Code Update  failed ','condition'=>false));
            }

      }
       public function reference_code_adding(Request $req){
         $reference_code = $req->input('reference_code');
         $result =  All_Reference::insert([
         'reference_code' =>strtolower($reference_code)
         ]);

         if($result){
                  
            return  json_encode(array('message'=>'successfully Reference Code Added ','condition'=>true));
         }else{
            return json_encode(array('message'=>' Reference Code Add  failed ','condition'=>false));
         }
       }
        public function card_registation_add(Request $req){

 
            $cda_address_details= $req->input('cda_address_details');  
            $cda_apartment_no = $req->input('cda_apartment_no'); 
            $cda_district = $req->input('cda_district'); 
            $cda_division = $req->input('cda_division'); 
            $cda_house_no = $req->input('cda_house_no'); 
            $cda_road_no = $req->input('cda_road_no');  
            $cda_upzilla = $req->input('cda_upzilla');  
            $cda_village = $req->input('cda_village');  
            $cda_Thana =$req->input('cda_Thana');
            $date_of_birth = $req->input('date_of_birth');    
            $district = $req->input('district'); 
            $division = $req->input('division'); 
            $email = $req->input('email');  
            $full_name = $req->input('full_name');    
            $gender = $req->input('gender');   
            $nationality = $req->input('nationality');  
            $phone_number = $req->input('phone_number');
            $reference_code = $req->input('reference_code');
            $mediam = $req->input('mediam');
            $profession = $req->input('profession');
            
         
            $card_id ='';
            $invoice_number='';
            $db_all_data =card_registation::all();
            if(count( $db_all_data) > 0){
             $card_id_in_db = card_registation::orderBy('card_id', 'desc')->take(1)->first();
             $card_id  =  $card_id_in_db['card_id']+1;
             $invoice_number= $card_id_in_db['invoice_number']+1;
            }else{
             $card_id =300000001;
             $invoice_number=1500001;
    
            }
            $result =  card_registation::insert([
    
                'cda_address_details' =>$cda_address_details,
                'cda_apartment_no' => $cda_apartment_no,
                'cda_district' =>$cda_district,
                'cda_division' =>$cda_division,
                'cda_house_no' =>$cda_house_no,
                'cda_road_no' =>$cda_road_no,
                'cda_upzilla' =>$cda_upzilla,
                'cda_village' =>$cda_village,
                'date_of_birth' =>$date_of_birth,
                'district' =>$district,
                'division' =>$division,
                'email' =>$email,
                'full_name' =>$full_name,
                'gender' =>$gender,
                'nationality' =>$nationality,
                'phone_number' =>$phone_number,
                'reference_code' =>$reference_code,
                'cda_Thana'=>$cda_Thana,
                'card_id'=>$card_id,
                'mediam'=>$mediam,
                'profession'=>$profession,
                'invoice_number'=>$invoice_number,
                'register_date'=> date('Y/m/d') 
                
              
            ]);

                // return  json_encode(array('message'=>'successfully Registation','condition'=>true));

                if($result){
                  
                   return  json_encode(array('message'=>'successfully Registation','condition'=>true));
                }else{
                   return json_encode(array('message'=>'failed Registation','condition'=>false));
                }
    
          
      } 


      public function branch(){

        return view('branch_view');
      }

      public function branch_user(Request $req){
            $name = $req->input('name');
            $district = $req->input('district');
            $mail = $req->input('mail');
            $password =crypt($req->input('password'), 'pkaard') ;
            $reference_code = $req->input('reference_code');

            $result = branch_user::insert([
                        'name'=>$name,
                        'district'=>$district,
                        'mail'=>$mail,
                        'password'=>$password,
                        'reference_code'=>$reference_code
            ]);

         if($result){
           $r = All_Reference::where(['reference_code'=>$reference_code])->update(['status'=>2]);      
            return  json_encode(array('message'=>'successfully Added','condition'=>true));
         }else{
            return json_encode(array('message'=>'failed Add','condition'=>false));
         }
               
      }
    
      public function get_branch_all_data(){
         $data =  branch_user::all();
         
         return json_encode($data);
      }

      public function handle_branch_action($id,$action){
         if($action=='get_one'):
            $data =  branch_user::where(['id'=>$id])->get();
            return json_decode($data);
         endif;

         if($action=='delete'):
         $delete =    branch_user::where(['id'=>$id])->delete();
         if($delete){
            return json_encode(array('condition'=>true,'message'=>'successfully deleted'));
         }else{
            return json_encode(array('condition'=>false,'message'=>' delete failed'));

         }
         endif;

      }

      public function update_branch(Request $req){
         $id = $req->input('id');
         $name = $req->input('name');
         $district = $req->input('district');
         $mail = $req->input('mail');
        
         $reference_code = $req->input('reference_code');

        $result =  branch_user::where(['id'=>$id])->update([
            'name'=>$name,
            'district'=>$district,
            'mail'=>$mail,
            'reference_code'=>$reference_code
            
         ]);

         if($result){
            return json_encode(array('condition'=>true,'message'=>'Updated successfully'));
         }else{
            return json_encode(array('condition'=>false,'message'=>'Updated failed'));
         }
      }
    
      public function Franchiac_summary_details($reference_code){

       $balance =  All_Reference::where(['reference_code'=>$reference_code])->get(['wallet']);
       $total_reg = count( card_registation::where(['reference_code'=>$reference_code])->get());
       $daily_regis=  count(card_registation::where(['register_date'=>date('Y/m/d'),'reference_code'=>$reference_code])->get());
       $monthly_regis=  count(card_registation::where('register_date','LIKE','_____'.date('m').'___')->where(['reference_code'=>$reference_code])->get());
       $total_deliv = count( card_registation::where(['reference_code'=>$reference_code,'status'=>2])->get());
       $monthly_deliv=  count(card_registation::where('register_date','LIKE','_____'.date('m').'___')->where(['reference_code'=>$reference_code,'status'=>2])->get());
       $total_return = count( card_registation::where(['reference_code'=>$reference_code,'status'=>3])->get());
       $monthly_return=  count(card_registation::where('register_date','LIKE','_____'.date('m').'___')->where(['reference_code'=>$reference_code,'status'=>3])->get());
//  dd($balance[0]['wallet']);
//  dd($monthly_regis);
         return view('Franchiac_summary_details',['balance'=>$balance[0]['wallet'],'total_reg'=>$total_reg,'daily_regis'=>$daily_regis,'monthly_regis'=>$monthly_regis,'total_deliv'=>$total_deliv,'monthly_deliv'=>$monthly_deliv,'total_return'=>$total_return,'monthly_return'=>$monthly_return]);

      }

      public function login_check(Request $req){

         $mail = $req->input('mail');
         $password = crypt($req->input('password'), 'pkaard') ;
        $result =  branch_user::where(['mail'=>$mail,'password'=>$password])->count();

      if($result==1){
         $data =  branch_user::where(['mail'=>$mail,'password'=>$password])->get();
         $req->session()->put(['data'=>$data]);
         $req->session()->put(['mode'=>'branch']);
         $req->session()->put(['is_login'=>true]);
         // return redirect('/');
         // return $req->session()->get('is_login');
          return $req->session()->all();
      }else{

         $result =  Reference_rogram::where(['phone'=>$mail,'password'=>$password])->count();
         if($result==1){
            $data =  Reference_rogram::where(['phone'=>$mail,'password'=>$password])->get();
            $req->session()->put(['data'=>$data]);
            $req->session()->put(['mode'=>'reference_rogram']);
            $req->session()->put(['is_login'=>true]);
            // return redirect('/');
            // return $req->session()->get('is_login');
             return $req->session()->all();
         }else{
            return json_encode(array('condition'=>false,'message'=>'Email/Phone or Passwrod not matched'));

         }


      }
      }

      public function send_otp_admin($mail){

         if($mail == 'nnasiruddin1996@gmail.com' || $mail == 'info.pkaardltd@gmail.com'):
         
        $otp  =  rand(100000,999999);
        $mail =  Mail::to($mail)->send(new AdminOtpMail($otp));

        if($mail):
          $sending_otp =  OTP::insert([
              'otp'=>$otp,
              'is_expired'=>0,
              'create_at'=>date("Y-m-d H:i:s")
            
            ]);

            if($sending_otp):
               return json_encode(array('condition'=>true,'message'=>'OTP successfully Send in your mail'));
            else:
               return json_encode(array('condition'=>false,'message'=>'OTP Failed'));

            endif;

        

         endif;

        
      else:
         return json_encode(array('condition'=>false,'message'=>'Email not matched'));

   endif;
         // return $otp;

      // return   OTP::where(['otp'=>$otp,'is_expired'=>'0','create_at'=>'NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR'])->get();

      //return $results = \DB::select('SELECT  * FROM `otp_expired` WHERE `is_expired`=0 AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)');
      }


      public function admin_otp_check(Request $req){

         $otp = $req->input('otp');

         $result = \DB::select('SELECT  * FROM `otp_expired` WHERE `is_expired`=0 AND `otp`=:otp AND NOW() <= DATE_ADD(create_at, INTERVAL 24 HOUR)',['otp'=>$otp]);
         if(count($result)>0){
            
            \DB::update('UPDATE  `otp_expired` SET  `is_expired` = 1 where `otp` = ?', [$otp]);

           
         $req->session()->put(['mode'=>'admin']);
         $req->session()->put(['is_login'=>true]);

         // $response = new Response('pkaard');
         // $time = 1; // 60 * 60 * 24 * 365;
         // $response->withCookie(cookie('mode', 'admin',  $time));
         // $response->withCookie(cookie('is_login', true, $time ));

         \DB::delete('DELETE  FROM `otp_expired` WHERE  `is_expired` = 1 OR NOW() > DATE_ADD(create_at, INTERVAL 24 HOUR)');
         return  $req->session()->all();
       
        // return json_encode(array('mode'=>$req->cookie('mode'),'is_login'=>$req->cookie('is_login')));
         }else{
            return json_encode(array('condition'=>false,'message'=>'Your OTP not correct'));
         }

      }

      public function logout_auth(Request $req){
       $req->session()->flush();
       return json_encode(array('condition'=>true));
      }

      public function counting_by_reference(){

         $result = \DB::select('SELECT  COUNT(reference_code) AS ref_total, reference_code FROM `card_registation` GROUP BY reference_code');

         return $result;


      }



      public function excel_file_upload(Request $req){

       $excel_file =   $req->file('excel_file');

       $xlsx = SimpleXLSX::parse($excel_file);
       $header_values = $rows = [];
    foreach ( $xlsx->rows() as $k => $r ) {
        if ( $k === 0 ) {
            $header_values = $r;
            continue;
        }
        $rows[] = array_combine( $header_values, $r );
    }
    return $rows ;

    
      }


      public function excel_file_refere(Request $req){
         $excel_file =   $req->file('excel_file');

         $xlsx = SimpleXLSX::parse($excel_file);
         $header_values = $rows = [];
      foreach ( $xlsx->rows() as $k => $r ) {
          if ( $k === 0 ) {
              $header_values = $r;
              continue;
          }
          $rows[] = array_combine( $header_values, $r );
      }
  
      foreach( $rows as $data){
       
         // return  $data;
         if(isset($data['Reference Code'])){
      if(count(All_Reference::where(['reference_code'=>strtolower($data['Reference Code'])])->get()) ==0){
      
         $result =  All_Reference::insert([
            'reference_code' =>strtolower($data['Reference Code'])
            ]);

      }
     

      }else{
         return json_encode(array('condition'=>false,'message'=>'It is not suitable file'));

      }

   }
   return json_encode(array('condition'=>true,'message'=>'Uploaded Successfully'));
      }

      public function handle_reperence_program_action($id,$action){
         if($action=='get_one'):
            $data =  Reference_rogram::where(['id'=>$id])->get();
            return json_decode($data);
         endif;

         if($action=='delete'):
         $delete =    Reference_rogram::where(['id'=>$id])->delete();
         if($delete){
            return json_encode(array('condition'=>true,'message'=>'successfully deleted'));
         }else{
            return json_encode(array('condition'=>false,'message'=>' delete failed'));

         }
         endif;

      }
      public function update_reference_program(Request $req){
         $id = $req->input('id');
         $name = $req->input('name');
         $phone = $req->input('phone');
        
         $reference_code = $req->input('reference_code');

        $result =  Reference_rogram::where(['id'=>$id])->update([
            'name'=>$name,
            'phone'=>$phone,
           
            
         ]);

         if($result){
            return json_encode(array('condition'=>true,'message'=>'Updated successfully'));
         }else{
            return json_encode(array('condition'=>false,'message'=>'Updated failed'));
         }
      }
      public function add_reference_rogram(Request $req){
      $name = $req->input('name');
      $phone = $req->input('phone');
      $password =crypt($req->input('password'), 'pkaard') ;
      $reference_code = $req->input('reference_code');

    $result = Reference_rogram::insert([
                'name'=>$name,
                'phone'=>$phone,
                'password'=>$password,
                'reference_code'=>$reference_code
    ]);

 if($result){
   $r = All_Reference::where(['reference_code'=>$reference_code])->update(['status'=>2]);      
    return  json_encode(array('message'=>'successfully Added','condition'=>true));
 }else{
    return json_encode(array('message'=>'failed Add','condition'=>false));
 }
       

      }

      public function get_all_reference_rogram(){
         return Reference_rogram::all();
      }

      public function excel_data(Request $req){
         $ex_data = $req->input('ex_data');
         // $Mobile = $req->input('Mobile');
         // $Name = $req->input('Name');
        foreach( $ex_data as $data){
       
// return  $data;
      if(count(card_registation::where(['phone_number'=>$data['Mobile']])->get()) ==0){

         $card_id ='';
         $invoice_number='';
         $db_all_data =card_registation::all();
         if(count( $db_all_data) > 0){
         $card_id_in_db = card_registation::orderBy('card_id', 'desc')->take(1)->first();
         $card_id  =  $card_id_in_db['card_id']+1;
         $invoice_number= $card_id_in_db['invoice_number']+1;
         }else{
         $card_id =300000001;
         $invoice_number=1500001;
         // ALTER TABLE card_registation MODIFY email  varchar(255) null;
         //ALTER IGNORE TABLE card_registation ADD UNIQUE (email);
         //DROP INDEX email ON card_registation
         }
         $result =  card_registation::insert([

            'cda_address_details' =>$data['Address'],
            'nationality' =>"Bangladeshi",
            'phone_number' =>$data['Mobile'],
            'full_name' =>$data['Name'],
            'card_id'=>$card_id,
            'mediam'=>'BACKHAND',
            'invoice_number'=>$invoice_number,
            'register_date'=> date('Y/m/d') 
            
            
         ]);
         
      }
   }
   
         
   if($result){
                  
      return  json_encode(array('message'=>'Excel File Uploaded Successfully','condition'=>true));
   }else{
      return json_encode(array('message'=>'Excel File Uploaded Failed','condition'=>false));
   }


  

      }

      public function delevery_stutus(Request $req){
      
         $id = $req->input('id');
         
        $result =  card_registation::where(['id'=>$id])->update([
            'status'=>2
         ]);
          $reference_code =  card_registation::where(['id'=>$id])->get(['reference_code']);
   
         $wallet =   All_Reference::where(['reference_code'=>strtolower($reference_code[0]['reference_code'])])->get();

         $wallet_value ='';
           if(count($wallet) >0){
              $amount = 0;
              if(strlen($wallet[0]['wallet']) <= 0){
               $amount =20;
              }else{
               $amount = $wallet[0]['wallet']+20;
              }
              
           
            $wallet_update =   All_Reference::where(['reference_code'=>strtolower($reference_code[0]['reference_code'])])->update([
               'wallet' =>  $amount 
               ]);
         
          }
         
         if( $result){
            return json_encode(array('condition'=>true,'message'=>'Status Change Successfully'));
         }else{
            return json_encode(array('condition'=>false ,'message'=>'Status Change Failed'));
         }

        

      }

      public function search_reference_code($reference_code){
        $data =  All_Reference::where('reference_code','LIKE','%'.$reference_code.'%')->where(['status'=>1])->get();
         return $data;

      }

   public function update_card_data(Request $req){

      
      $id= $req->input('id');  
      $cda_address_details= $req->input('cda_address_details'); 
      $cda_apartment_no = $req->input('cda_apartment_no'); 
      $cda_district = $req->input('cda_district'); 
      $cda_division = $req->input('cda_division'); 
      $cda_house_no = $req->input('cda_house_no'); 
      $cda_road_no = $req->input('cda_road_no');  
      $cda_upzilla = $req->input('cda_upzilla');  
      $cda_village = $req->input('cda_village');  
      $cda_Thana =$req->input('cda_Thana');
      $date_of_birth = $req->input('date_of_birth');    
      $district = $req->input('district'); 
      $division = $req->input('division'); 
      $email = $req->input('email');  
      $full_name = $req->input('full_name');    
      $gender = $req->input('gender');   
      $nationality = $req->input('nationality');  
      $phone_number = $req->input('phone_number');
      $reference_code = $req->input('reference_code');
      $mediam = $req->input('mediam');
      $profession = $req->input('profession');
      
      $result =  card_registation::where(['id'=>$id])->update([
    
         'cda_address_details' =>$cda_address_details,
         'cda_apartment_no' => $cda_apartment_no,
         'cda_district' =>$cda_district,
         'cda_division' =>$cda_division,
         'cda_house_no' =>$cda_house_no,
         'cda_road_no' =>$cda_road_no,
         'cda_upzilla' =>$cda_upzilla,
         'cda_village' =>$cda_village,
         'date_of_birth' =>$date_of_birth,
         'district' =>$district,
         'division' =>$division,
         'email' =>$email,
         'full_name' =>$full_name,
         'gender' =>$gender,
         'nationality' =>$nationality,
         'phone_number' =>$phone_number,
         'reference_code' =>$reference_code,
         'cda_Thana'=>$cda_Thana,
         'mediam'=>$mediam,
         'profession'=>$profession,
         
         
       
     ]);

   
if($result){
   return json_encode(array("condition"=>true,"message"=>"Updated Succeessfully"));

}else{
   return json_encode(array('condition'=>false,"message"=>"Updated Failed"));
}
   }

   public function login_atumatic($otp){
     if($otp == session()->get('oneTime')):
           
      session()->put(['mode'=>'admin']);
      session()->put(['is_login'=>true]);
      
    return  json_encode(array('login_info'=> session()->get('is_login')));
     else:
      json_encode(array('login_info'=>false)); ;
     endif;
   }
   public function withdraw_view(){
      $reference_code = session()->get('data')[0]['reference_code'];
      $data =   franchise_profile::where(['reference_code'=>$reference_code])->get();
      return view("withdraw_view",['data'=>$data]);
   }

   public function withdraw_request(Request $req){
      $tranjection_type= $req->input('tranjection_type'); 
      $tranjection_name= $req->input('tranjection_name'); 
      $tranjection_number= $req->input('tranjection_number'); 
      $amount= $req->input('amount'); 
      $mfs_type= $req->input('mfs_type'); 

      $reference_code= $req->session()->get('data')[0]['reference_code'];
     $sum =   Withdraw_payment::where(['requester_refe'=>$reference_code,'status'=>1])->sum('amount')+$amount;
    $wallet =   All_Reference::where(['reference_code'=>$reference_code])->get()[0]['wallet'];
   //  return json_encode(array('sum'=>$sum));  
    
    if($sum > $wallet){
      return json_encode(array('condition'=>false,'message'=>"Your requested amount is more than your wallet"));  

    }else{
      $result =  Withdraw_payment::insert([

         'tranjection_type'=>$tranjection_type,
         'tranjection_name'=>$tranjection_name,
         'tranjection_number'=>$tranjection_number,
         'mfs_type'=>$mfs_type,
         'amount'=>$amount,
         'requester_refe'=>$reference_code,
         'requested_date'=>date('Y/m/d'),
               
         
      ]);

      if( $result){
         return json_encode(array('condition'=>true,'message'=>'Submitted Data Successfully'));
      }else{
         return json_encode(array('condition'=>false ,'message'=>'Submitted Data Failed'));
      }


    }
   
   
   }

   public function all_withdraw_requested(){
     $data  =  \DB::select("SELECT `withdraw_payment`.*,`all_reference`.`wallet` FROM `withdraw_payment` LEFT JOIN `all_reference` ON `withdraw_payment`.`requester_refe`=`all_reference`.`reference_code` WHERE  `withdraw_payment`.`status` = 1");
      return view("all_withdraw_requested_view",['data'=>$data]);
   }

   public function pay_payment($id){
      $withdraw_payment_data = Withdraw_payment::where(['id'=>$id])->get();
      $total_wallet =  All_Reference::where(['reference_code'=>$withdraw_payment_data[0]['requester_refe']])->get()[0]['wallet'];
      $sub_wallet = $total_wallet-$withdraw_payment_data[0]['amount'];
     $result1 =  All_Reference::where(['reference_code'=>$withdraw_payment_data[0]['requester_refe']])->update([
         'wallet'=>$sub_wallet
      ]);
      if( $result1):
$result = Withdraw_payment::where(['id'=>$id])->update([
   'status'=>2,
   'paied_date'=>date('Y/m/d')
]);

if( $result){
   return json_encode(array('condition'=>true,'message'=>'Successfully Paid'));
}else{
   return json_encode(array('condition'=>false ,'message'=>'Opps faild'));
}

endif;

return json_encode(array('condition'=>false ,'message'=>'Amount Updated Failed'));
   }

   public function withdraw_request_client_view(){
      return view('withdraw_request_client_view');
   }


   public function  withdraw_history_view(){
      $reference_code= $req->session()->get('data')[0]['reference_code'];
      $data = Withdraw_payment::where(['requester_refe'=>$reference_code,'status'=>2])->get();

      return view('withdraw_history_view',['data'=>$data]);
   }


   public function Campain_chart_view(){
      $campain = Campain_chart::all();
     return view('Campain_chart_view',['campain'=>$campain]);
   }

   public function Campain_chart_Franchiac_view(){
      $campain = Campain_chart::all();
      return view("Campain_chart_Franchiac_view",['campain'=>$campain]);
   }

   public function change_percentage_campin($id,$value){
    $result =   Campain_chart::where(['id'=>$id])->update([
         'percentage'=>$value
      ]);
      

      if( $result){
         return json_encode(array('condition'=>true,'message'=>'Changed Successfully'));
      }else{
         return json_encode(array('condition'=>false ,'message'=>'Changed  Failed'));
      }
   }

   public function franchise_profile_form_insert(Request $req){

            $account_holder_name=$req->input('account_holder_name');
            $account_number=$req->input('account_number');
            $bank_name=$req->input('bank_name');
            $branch_name=$req->input('branch_name');
            $date_of_birth=$req->input('date_of_birth');
            $emergency_name=$req->input('emergency_name');
            $emergency_phone=$req->input('emergency_phone');
            $general_mail=$req->input('general_mail');
            $mfs_name=$req->input('mfs_name');
            $mfs_number=$req->input('mfs_number');
            $mfs_type=$req->input('mfs_type');
            $mobile_phone=$req->input('mobile_phone');
            $name=$req->input('name');
            $nid_no=$req->input('nid_no');
            $office_address=$req->input('office_address');
            $pkaard_mail=$req->input('pkaard_mail');
            $routing_number=$req->input('routing_number');
            $reference_code =$req->session()->get('data')[0]['reference_code']; ;
            $insert_date = date('Y/m/d');
            
          $result =   franchise_profile::insert([
               'account_holder_name'=>$account_holder_name,
               'account_number'=>$account_number,
               'bank_name'=>$bank_name,
               'branch_name'=>$branch_name,
               'date_of_birth'=>$date_of_birth,
               'emergency_name'=>$emergency_name,
               'emergency_phone'=>$emergency_phone,
               'general_mail'=>$general_mail,
               'mfs_name'=>$mfs_name,
               'mfs_number'=>$mfs_number,
               'mfs_type'=>$mfs_type,
               'mobile_phone'=>$mobile_phone,
               'name'=>$name,
               'nid_no'=>$nid_no,
               'office_address'=>$office_address,
               'pkaard_mail'=>$pkaard_mail,
               'routing_number'=>$routing_number,
               'reference_code'=>$reference_code,
               'insert_date'=>$insert_date
            ]);

            if($result){
               return json_encode(array('condition'=>true,'message'=>'Submitted Successfully'));
            }else{
               return json_encode(array('condition'=>false ,'message'=>'Submitted  Failed'));
            }

   }

   public function profile(){
      $reference_code =session()->get('data')[0]['reference_code'];
      $data = franchise_profile::where(['reference_code'=>$reference_code])->get();
      return view('profile',['data'=>$data]);
   }
   public function is_franchise_profil_submitted_data(){
      if(session()->get('data')){
         $reference_code =session()->get('data')[0]['reference_code'];
         $is_find =  franchise_profile::where(['reference_code'=>$reference_code])->count();
         if( $is_find==1){
            return json_encode(array('condition'=>true));

         }
         return json_encode(array('condition'=>false));

      }

      return json_encode(array('condition'=>true));

   }

   public function genereting_report(Request $req){
      // $reference_code =$req->session()->get('data')[0]['reference_code']; ;
     
      $reference_code = $req->input('reference_code');
      //return json_encode(array('ref_code'=>$reference_code));
        
      if($req->has('per_year')){
        
       $per_year = $req->input('per_year');
       $per_year_regis=  card_registation::where('register_date','LIKE',''.$per_year.'%')->where(['reference_code'=>$reference_code])->count();
       $per_year_deliv =card_registation::where('register_date','LIKE',''.$per_year.'%')->where(['reference_code'=>$reference_code,'status'=>2])->count();
      $per_year_return=  card_registation::where('register_date','LIKE',''.$per_year.'%')->where(['reference_code'=>$reference_code,'status'=>3])->count();
      $per_year_revenue =  Withdraw_payment::where('paied_date','LIKE',''.$per_year.'%')->where(['requester_refe'=>$reference_code])->get();
    
    
      return \json_encode(array('registation'=>$per_year_regis,'deliv'=>$per_year_deliv,'return'=>$per_year_return,'revenue'=>$per_year_revenue));
      }

      if($req->has('per_month')){
          $per_month = $req->input('per_month');
          $monthly_regis=  card_registation::where('register_date','LIKE',''.date('Y').'_'. $per_month.'___')->where(['reference_code'=>$reference_code])->count();
          $per_month_deliv =card_registation::where('register_date','LIKE',''.date('Y').'_'. $per_month.'___')->where(['reference_code'=>$reference_code,'status'=>2])->count();
         $per_month_return=  card_registation::where('register_date','LIKE',''.date('Y').'_'. $per_month.'___')->where(['reference_code'=>$reference_code,'status'=>3])->count();
         $revenue =  Withdraw_payment::where('paied_date','LIKE',''.date('Y').'_'. $per_month.'___')->where(['requester_refe'=>$reference_code])->get();
       
       
         return \json_encode(array('registation'=>$monthly_regis,'deliv'=>$per_month_deliv,'return'=>$per_month_return,'revenue'=>$revenue));
      }

          if($req->has('form_date')){
      
          $to_date= date_format(date_create($req->input('to_date')),"Y/m/d");
          $form_date= date_format(date_create($req->input('form_date')),"Y/m/d");
               
               $per_daily_regis = count(\DB::select("SELECT * FROM `card_registation` WHERE  DATE(register_date) >= '$form_date' AND  DATE(register_date) <= '$to_date' AND `reference_code`='$reference_code'"));
               $per_daily_deliv = count(\DB::select("SELECT * FROM `card_registation` WHERE  DATE(register_date) >= '$form_date' AND  DATE(register_date) <= '$to_date' AND `reference_code`='$reference_code' AND `status`= 2"));
               $per_daily_return = count(\DB::select("SELECT * FROM `card_registation` WHERE  DATE(register_date) >= '$form_date' AND  DATE(register_date) <= '$to_date' AND `reference_code`='$reference_code'  AND `status`= 3"));
               $revenue = \DB::select("SELECT * FROM `withdraw_payment` WHERE  DATE(paied_date) >= '$form_date' AND  DATE(paied_date) <= '$to_date' AND `requester_refe`='$reference_code'");
               return \json_encode(array('registation'=>$per_daily_regis,'deliv'=>$per_daily_deliv,'return'=>$per_daily_return,'revenue'=>$revenue));

        }
        
      
   }

   public function category_view(){
      return view("category_view");
   }

   public function category_action(Request $req){
      $type=$req->input('type');

      $category_name=$req->input('category_name');

if($type=='add'):
     $result =  Category::insert([
         'category_name'=>$category_name
      ]);
   else: 
      $result =  Category::where(['id'=>$type])->update([
         'category_name'=>$category_name
      ]);

   endif;

   if($result){
      return json_encode(array('condition'=>true));
   }else{
      return json_encode(array('condition'=>false ));
   }


   }

   static public function all_category(){
      return Category::all();
      
   }

   static public function all_district(){
      return District::all();
   }
   public function add_affiliation_product_view(){
      $category = Category::all();
      $district = District::all();
      $affiliation_partner = Affiliation_partner::where(['has_room'=>0])->get();
      return view("add_affiliation_product_view",['category'=>$category,'district'=>$district,'affiliation_partner'=>$affiliation_partner]);
   }

   public function add_store_room_data(Request $req){

      $address = $req->input('address');
      $category_id = $req->input('category_id');
      $company_id = $req->input('company_id');
      $discount = $req->input('discount');
      $district_id = $req->input('district_id');
      $title = $req->input('title');
      $create_at= date("Y/m/d");

      
    $result =   Affiliation_product::insert([
         "address"=>$address,
         "category_id"=>$category_id,
         "company_id"=>$company_id,
         "discount"=>$discount,
         "district_id"=>$district_id,
         "title"=>$title,
         "create_at"=>$create_at,
         'is_room'=>1
      ]);

      if($result){
        
         return json_encode(array('condition'=>true));
      }else{
         return json_encode(array('condition'=>false ));
      }
   
     
   }

   public function get_by_company_id_room_data($id){
   //  return  Affiliation_product::where(['company_id'=>$id])->get();

   return $result = \DB::select("SELECT affiliation_product.*, category.category_name,districts.name FROM affiliation_product LEFT JOIN category ON affiliation_product.category_id = category.id LEFT JOIN districts ON affiliation_product.district_id =districts.id WHERE company_id =$id  AND is_room=1");


   }
   

   public function add_affiliation_product_img_view(){
      return view('add_affiliation_product_img_view');
   }

   public function affiliation_product_insert(Request $req){

            $address = $req->input('address');
            $category_id = $req->input('category_id');
            $company_id = $req->input('company_id');
            $details = $req->input('details');
            $discount = $req->input('discount');
            $district_id = $req->input('district_id');
            $phone = $req->input('phone');
            $title = $req->input('title');
            $privilege = $req->input('privilege');
            $regular_price = $req->input('regular_price');

            $create_at= date("Y/m/d");

            
          $result =   Affiliation_product::insert([
               "address"=>$address,
               "category_id"=>$category_id,
               "company_id"=>$company_id,
               "details"=>$details,
               "district_id"=>$district_id,
               "phone"=>$phone,
               "title"=>$title,
               "privilege"=>$privilege,
               'regular_price'=>$regular_price,
               "create_at"=>$create_at,
            ]);

            if($result){
               $id = Affiliation_product::latest('id')->first();
               return json_encode(array('condition'=>true,'id'=>$id['id']));
            }else{
               return json_encode(array('condition'=>false ));
            }
   
   }

   public function affiliation_product_img_path_insert(Request $req){

      $img_path = $req->input('img_path');
      $product_id = $req->input('product_id');

   $all_img_path =  Affiliation_product::where(['id' => $product_id])->get(["img_path"]);


   if(is_null($all_img_path[0]['img_path'])){
      
       $result = Affiliation_product::where(['id'=>$product_id])->update([
         'img_path'=> $img_path
        ]);
   }else{
    
         $result = Affiliation_product::where(['id'=>$product_id])->update([
            'img_path'=>$all_img_path[0]['img_path'].",".$img_path
         ]);
   }

   $data =   Affiliation_product::where(['id' => $product_id])->get(["img_path"]);
   $data[0]['img_path'];
   if(count(explode(",",$data[0]['img_path'])) > 21){

   }

   return  $data[0]['img_path'];
      

      // if($result){
         
      //    return json_encode(array('condition'=>true));
      // }else{
      //    return json_encode(array('condition'=>false ));
      // }

   }



  public function  all_affiliation_partner_view(){
   //  $all_affiliation = Affiliation_partner::all();

    $category = Category::all();
    $district = District::all();
    $affiliation_partner = Affiliation_partner::where(['has_room'=>0])->get();
    
    return view("all_affiliation_partner_view",['category'=>$category,'district'=>$district,'affiliation_partner'=>$affiliation_partner]);
   //  return view("all_affiliation_partner_view",['all_affiliation'=>$all_affiliation]);
   }

   public function add_affiliation_partner_view(){
      return view("add_affiliation_partner_view");
   }
   
   public function  all_affiliation_partner(){
      // return  $all_affiliation = Affiliation_partner::all();

      return \DB::select("SELECT  DISTINCT affiliation_partner.id, affiliation_product.company_id AS  affi_partner_id , affiliation_partner.*   FROM affiliation_partner  LEFT JOIN affiliation_product ON affiliation_partner.id = affiliation_product.company_id");
     }



   public function add_multiple_affiliation_product(){
      return view("add_multiple_affiliation_product");
   }


   public function add_affiliation_partner (Request $req){

   // $back_nid = $req->input("back_nid");
   $company_address = $req->input("company_address");
   $company_name = $req->input("company_name");
   $company_owner_name = $req->input("company_owner_name");
   $company_tin = $req->input("company_tin");
   $contact_full_name = $req->input("contact_full_name");
   $contact_number = $req->input("contact_number");
   $contact_role = $req->input("contact_role");
   $email_address = $req->input("email_address");
   // $front_nid = $req->input("front_nid");
   $password = \Hash::make($req->input("password"));
   $create_at = date("Y:m:d");

   $result = Affiliation_partner::insert([
      // 'back_nid'=>$back_nid,
      'company_address'=>$company_address,
      'company_name'=>$company_name,
      'company_owner_name'=>$company_owner_name,
      'company_tin'=>$company_tin,
      'contact_full_name'=>$contact_full_name,
      'contact_number'=>$contact_number,
      'contact_role'=>$contact_role,
      'email_address'=>$email_address,
      // 'front_nid'=>$front_nid,
      'password'=>$password,
      'create_at'=>$create_at,
      'has_room'=>$req->input("has_room")

   ]);

   if($result){
      
      return json_encode(array('condition'=>true,'company_address'=>$company_address));
   }else{
       return json_encode(array('condition'=>false ));
   }

   }

   


  public function  add_aff_sub_discount_product(Request $req){


 $result = aff_sub_discount_product::insert([
      'affiliation_product_id'=>$req->input("affiliation_product_id"),
      'details'=>$req->input("details"),
      'privilege'=>$req->input("privilege"),
      'title'=>$req->input("title"),
      'regular_price'=>$req->input("regular_price"),
      'create_at'=>date('Y/m/d'),
   ]);

   if($result){
     
      return json_encode(array('condition'=>true));
   }else{
      return json_encode(array('condition'=>false ));
   }
  }

  public function get_one_aff_sub_discount_product($id){

  //return aff_sub_discount_product::where(['affiliation_product_id'=>$id])->get();

  return \DB::select("SELECT aff_sub_discount_product.*, affiliation_product.title as room_name  FROM aff_sub_discount_product LEFT JOIN affiliation_product ON aff_sub_discount_product.affiliation_product_id = affiliation_product.id WHERE aff_sub_discount_product.affiliation_product_id = $id");

  }

  public function get_one_edit_product_details($id){

   return aff_sub_discount_product::where(['id'=>$id])->get();

  }

  public function update_aff_sub_discount_product(Request $req){

   $result = aff_sub_discount_product::where(['id'=>$req->input("id")])->update([
      'details'=>$req->input("details"),
      'privilege'=>$req->input("privilege"),
      'title'=>$req->input("title"),
      'regular_price'=>$req->input("regular_price"),
   
   ]);


   if($result){
     
      return json_encode(array('condition'=>true));
   }else{
      return json_encode(array('condition'=>false ));
   }


  }

  public function upload_img_path_sub_product(Request $req){


   $img_path = $req->input('img_path');
 $product_id = $req->input('product_id');

$all_img_path =  aff_sub_discount_product::where(['id'=>$product_id])->get(["img_path"]);

if(is_null($all_img_path[0]['img_path'])){
   
    $result = aff_sub_discount_product::where(['id'=>$product_id])->update([
      'img_path'=> $img_path
     ]);
}else{
 
      $result = aff_sub_discount_product::where(['id'=>$product_id])->update([
         'img_path'=>$all_img_path[0]['img_path'].",".$img_path
      ]);
}



      if($result){
         
         return json_encode(array('condition'=>true));
      }else{
         return json_encode(array('condition'=>false ));
      }

  }


  public function get_img_path_aff_sub_discount_product($id){
  return $all_img_path =  aff_sub_discount_product::where(['id'=>$id])->get();
  }


  public function upload_store_room_img_path(Request $req){

   $result = Affiliation_product::where(['id'=>$req->input("id")])->update([
      'img_path'=>$req->input("img_path")
   ]);
 if($result){
         
         return json_encode(array('condition'=>true,'path'=>$req->input("img_path")));
      }else{
         return json_encode(array('condition'=>false,'path'=>$req->input("img_path")));
      }

  }

  public function store_room_img_path($id){

  $result =  Affiliation_product::where(['id'=>$id])->get();

  return ['img_path'=>$result[0]['img_path']];

  }

  public function get_one_store_room_data($id){

  return  $result =  Affiliation_product::where(['id'=>$id])->get();

   }
 public function update_store_room_data(Request $req){


   $result=  Affiliation_product::where(['id'=>$req->input("id")])->update([
      'address'=>$req->input("address"),
      'category_id'=>$req->input("category_id"),
      'district_id'=>$req->input("district_id"),
      'discount'=>$req->input("discount"),
      'title'=>$req->input("title"),
      
   ]);


   if($result){
         
      return json_encode(array('condition'=>true,'message'=>"Updated Successfully ...."));
   }else{
      return json_encode(array('condition'=>false,'message'=>"Updated Failed ...."));
   }

 }


 public function default_img_path_uploader(Request $req){

   $tc_name = $req->input('tc_name');

   $all_img_path =  \DB::table($req->input("t_name"))->where([$req->input("c_t_c_name")=>$req->input("t_id")])->get([$tc_name]);

   $myarray = array();  
   if(is_null($all_img_path[0]->{$tc_name})){
   
      

      $myarray[$tc_name] = $req->input("img_path");
    
       $result =   \DB::table($req->input("t_name"))->where([$req->input("c_t_c_name")=>$req->input("t_id")])->update($myarray);


  }else{
   
       $myarray[$tc_name] = $all_img_path[0]->{$tc_name}.",".$req->input("img_path");
      $result =   \DB::table($req->input("t_name"))->where([$req->input("c_t_c_name")=>$req->input("t_id")])->update($myarray);
  }

         if($result){
                  
            return json_encode(array('condition'=>true));
         }else{
            return json_encode(array('condition'=>false ));
         }


 }


 public function  get_one_affiliation_partner($id){

  return Affiliation_partner::where(['id'=>$id])->get();
 }

  function update_affiliation_partner(Request $req){
   $result = Affiliation_partner::where(['id'=>$req->input("id")])->update([

      "company_address"=>$req->input("company_address"),
      "company_name"=>$req->input("company_name"),

      "company_owner_name"=>$req->input("company_owner_name"),

      "company_tin"=>$req->input("company_tin"),

      "contact_full_name"=>$req->input("contact_full_name"),
      "contact_number"=>$req->input("contact_number"),
      "contact_role"=>$req->input("contact_role"),
      "email_address"=>$req->input("email_address"),

   ]);

   if($result){
         
      return json_encode(array('condition'=>true,'message'=>"Updated Successfully ...."));
   }else{
      return json_encode(array('condition'=>false,'message'=>"Updated Failed ...."));
   }

  }


  public function get_one_affiliation_product_by_company_id($id){

  return \DB::select("SELECT affiliation_product.*, affiliation_partner.company_name AS search_company_name_update  FROM `affiliation_product` LEFT JOIN affiliation_partner ON affiliation_product.company_id = affiliation_partner.id  WHERE affiliation_product.company_id = $id");


   // return  $result =  Affiliation_product::where(['company_id'=>$id])->get();

  }


 public function update_affiliation_from_partner_view(Request $req){

   $result=  Affiliation_product::where(['id'=>$req->input("id")])->update([
      'address'=>$req->input("address"),
      'category_id'=>$req->input("category_id"),
      'district_id'=>$req->input("district_id"),
      'title'=>$req->input("title"),
      'phone'=>$req->input("phone"),
      'regular_price'=>$req->input("regular_price"),
      'details'=>$req->input("details"),
      'privilege'=>$req->input("privilege"),

         
      
      
   ]);


   if($result){
         
      return json_encode(array('condition'=>true,'message'=>"Updated Successfully ...."));
   }else{
      return json_encode(array('condition'=>false,'message'=>"Updated Failed ...."));
   }


  }



  function delete_img(Request $req){

   $url_path = "http://img.pkaard.com/delete_img.php";
   $data = array("delete_file_path"=> $req->input("img_path"));
   $options = array(
      "http"=>array(
         "method"=>"POST",
         'header' => 'Content-type:application/x-www-form-urlencoded',
         "content"=>http_build_query($data)
      ));
   $stream = stream_context_create($options);
   $api_request  = file_get_contents($url_path,false, $stream);
   $api_request   = json_decode($api_request);
   if( $api_request->condition ==true){
      $tc_name = $req->input('tc_name');
      $all_img_path =  \DB::table($req->input("t_name"))->where([$req->input("c_t_c_name")=>$req->input("t_id")])->get([$tc_name]);
      $explode_arr = explode(",",$all_img_path[0]->{$tc_name});
      $myarray = array();
      if(count($explode_arr) == 1){
         $myarray[$tc_name] = null ;
      }else{
         $diffing_array =  array_diff($explode_arr,array($req->input("img_path")));
         $myarray[$tc_name] = implode(",",$diffing_array);

      }
      
      $result =   \DB::table($req->input("t_name"))->where([$req->input("c_t_c_name")=>$req->input("t_id")])->update($myarray);
   // return $diffing_array;
      if($result){
         return json_encode(["condition"=>true]);

      }else{
         return json_encode(["condition"=>false,"message"=>"Image path update Failed"]);

      }

   }else{
         return json_encode(["condition"=>false,"message"=>$api_request->message]);
   }
   
   
   }

   public function affiliation_partner_request(){
     return AffiliationPartnerRequest::get();
   }

  public function  affiliation_partner_request_id($id){
   return AffiliationPartnerRequest::where(['id'=>$id])->get();
   }

   public function affiliation_partner_accept(Request $req){

    $res =   AffiliationPartnerRequest::where(['id'=>$req->input("id")])->get();

   //  $data = array("enq_img"=>$res[0]->sign_img);
   // return json_encode(['img_path_from_office'=> $this->upload_img_api($data)->img_path]);

   $password = \Hash::make($req->input("user_password"));
   $create_at = date("Y:m:d");
  $checking_mail =  Affiliation_partner::where(['email_address'=>$req->input("user_mail")])->count();
  $checing_phone =  Affiliation_partner::where(['contact_number'=>$req->input("user_phone")])->count();


   if($checking_mail > 0){
      return json_encode(['condition'=>false,'message'=>"This email has been taken"]);
   }

   if($checing_phone > 0){
      return json_encode(['condition'=>false,'message'=>"This phone number has been taken"]);
   }

   $result = Affiliation_partner::insert([
      'back_nid'=>$res[0]->back_nid != null ? $this->upload_img_api(["enq_img"=>$res[0]->back_nid])->img_path:null,
      'company_logo'=>$this->upload_img_api(["enq_img"=>$res[0]->company_logo])->img_path,
      'sign_img'=>$this->upload_img_api(["enq_img"=>$res[0]->sign_img])->img_path,
      'company_address'=>$res[0]->company_address,
      'busness_type'=>$res[0]->busness_type,
      'discount_privilege'=>$res[0]->discount_privilege,
      'link'=>$res[0]->link,
      'signing_authority'=>$res[0]->signing_authority,
      'create_at'=>$res[0]->create_at,// It is for signin date;
      'company_name'=>$res[0]->company_name,
      'company_owner_name'=>$res[0]->company_owner_name,
      'company_tin'=>$res[0]->company_tin,
      'contact_full_name'=>$res[0]->contact_full_name,
      'contact_number'=>$req->input("user_phone"),
      'contact_role'=>$res[0]->contact_role,
      'email_address'=>$req->input("user_mail"),
      'front_nid'=>$res[0]->front_nid != null ? $this->upload_img_api(["enq_img"=>$res[0]->front_nid])->img_path:null,
      'password'=>$password,
      'confirmation_date'=>$create_at,
   ]);

   if($result){
     $delete =   AffiliationPartnerRequest::where(['id'=>$req->input("id")])->delete();
    if( $delete ){
      return json_encode(['condition'=>true,'message'=>'Successfully Sign Up Confirm']);

    }else{
      return json_encode(['condition'=>false,'message'=>' Exiting Data Drop Failed ']);

    }
   }else{
      json_encode(['condition'=>false,'message'=>' Sign Up Confirmation Failed']);

   }


   }

   public function upload_img_api($img){
 // return $req;
 $url_path = "http://localhost:9000/encode_img.php";
 
 $options = array(
    "http"=>array(
       "method"=>"POST",
       'header' => 'Content-type:application/x-www-form-urlencoded',//Content-Type: image/png
       "content"=>http_build_query($img)
    ));
    
 $stream = stream_context_create($options);
 $api_request  = file_get_contents($url_path,false, $stream);
return $api_request   = json_decode($api_request);
   }

   public function all_slider_img(){

      return json_encode(['TopSlider'=>TopSliderModel::get(),'bottomLeftSlider'=>BottomLeftSlider::get(),'bottomRightSlider'=>BottomRightSlider::get()]);

   }

   public function top_slider_img(Request $req){

      $result= TopSliderModel::insert([
         'img_path'=>$req->input("img_path"),
      ]);
      if($result){
         return json_encode(["condition"=>true,'message'=>"Image Uploaded Successfully"]);

      }else{
         return json_encode(["condition"=>false,"message"=>"Image path update Failed"]);

      }
      
   }

   public function bottom_left_slider_img(Request $req){

      $result= BottomLeftSlider::insert([
         'img_path'=>$req->input("img_path"),
      ]);
      if($result){
         return json_encode(["condition"=>true,'message'=>"Image Uploaded Successfully"]);

      }else{
         return json_encode(["condition"=>false,"message"=>"Image path update Failed"]);

      }
      
   }

   public function bottom_right_slider_img(Request $req){

      $result= BottomRightSlider::insert([
         'img_path'=>$req->input("img_path"),
      ]);

      if($result){
         return json_encode(["condition"=>true,'message'=>"Image Uploaded Successfully"]);

      }else{
         return json_encode(["condition"=>false,"message"=>"Image path update Failed"]);

      }
      
   }

   public function slide_img_delete(Request $req){

      // return $req;

      if($req->input("slide") =='TopSlider'){
       $delete =  TopSliderModel::where(['id'=>$req->input("id")])->delete();
      }

      if($req->input("slide") =='bottomRightSlider'){
         $delete =    BottomRightSlider::where(['id'=>$req->input("id")])->delete();
      }

      if($req->input("slide") =='bottomLeftSlider'){
         $delete =  BottomLeftSlider::where(['id'=>$req->input("id")])->delete();
      }

      if($delete){
         return json_encode(["condition"=>true,'message'=>"Image Deleted Successfully"]);

      }else{
         return json_encode(["condition"=>false,"message"=>"Image Deleted Failed"]);

      }

   }

   public function confirm_card_delivery($id){
     $registation_no =  card_registation::where(['id'=>$id])->get(['card_id']);
     $is_insert =  CardDelivery::insert([
         'registation_no'=>$registation_no[0]->card_id 
      ]);

      if($is_insert){
        $check_confirm =  card_registation::where(['id'=>$id])->update(['is_confirm'=>true]);

        if($check_confirm){
         return json_encode(["condition"=>true,'message'=>"Success Confirm"]);

        }else{
         return json_encode(["condition"=>false,"message"=>"Check Confirm Failed "]);

        }
      }else{
         return json_encode(["condition"=>false,"message"=>"Not Insert "]);

      }
   }

   public function is_print_status($reg_no){
      $result =  card_registation::where(['card_id'=>$reg_no])->update([
         'is_print'=>true
      ]);

      if($result){
         return json_encode(["condition"=>true,'message'=>"Success Confirm"]);

        }else{
         return json_encode(["condition"=>false,"message"=>"Check Confirm Failed "]);

        }

   }

   public function save_card_number(Request $req){


      // return $req;
 return $reg_no = card_registation::where(['id'=>$req->id])->get(['card_id']);
      CardDelivery::insert([
         'registation_no'=>$reg_no[0]->card_id,
         'card_no'=>$req->card_no,
      ]);

      card_registation::where(['id'=>$id])->update(['is_confirm'=>true]);

   }

}


