<?php

namespace App\Http\Controllers;
use Shuchkin\SimpleXLSX;

use Illuminate\Http\Request;
use App\Models\Withdraw_payment;
use App\Models\card_registation;
use App\Models\branch_user;
use App\Models\OTP;
use App\Models\IP;
use App\Models\All_Reference;
use App\Models\Reference_rogram;
use Illuminate\Http\Response;
use App\Mail\AdminOtpMail;
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
    
    public function all_reference_code(){
    return  $result =  All_Reference::all();

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

         if($mail == 'nnasiruddin1996@gmail.com'):
         
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
     return view('Campain_chart_view');
   }

}
