<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes  
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/login',function(){
    return view('login_view');
});


Route::get('/login_atumatic/{otp}','App\Http\Controllers\homeController@login_atumatic');

Route::get('/selecting_login',function(){
    return view('selecting_login');
});


Route::get('/admin_login',function(){
    return view('admin_login_view');
});


Route::get('/admin_otp',function(){
    return view('admin_otp_view');
});


Route::get('/withdraw_view','App\Http\Controllers\homeController@withdraw_view')->middleware('login');

Route::get('/excel',function(){
    return view('exce_upload_view');
})->middleware('login');


Route::get('/add_reference_code',function(){
    return view('add_reference_code_view');
})->middleware('login');

Route::post('/reference_code_adding','App\Http\Controllers\homeController@reference_code_adding')->middleware('login');
Route::post('/excel_file_refere','App\Http\Controllers\homeController@excel_file_refere')->middleware('login');
Route::post('/reference_code_update','App\Http\Controllers\homeController@reference_code_update')->middleware('login');
Route::get('/all_reference_code','App\Http\Controllers\homeController@all_reference_code')->middleware('login');
Route::get('/get_one_reference_code/{id}/{action}','App\Http\Controllers\homeController@get_one_reference_code')->middleware('login');
Route::get('/search_reference_code/{reference_code}','App\Http\Controllers\homeController@search_reference_code')->middleware('login');
Route::get('/get_all_reference_rogram','App\Http\Controllers\homeController@get_all_reference_rogram')->middleware('login');
Route::get('/reference_program_view',function(){
    return view('reference_program');
})->middleware('login');


Route::post('/excel_file_upload','App\Http\Controllers\homeController@excel_file_upload')->middleware('login');

Route::post('/update_card_data','App\Http\Controllers\homeController@update_card_data')->middleware('login');
Route::post('/add_reference_rogram','App\Http\Controllers\homeController@add_reference_rogram')->middleware('login');

Route::get('/logout_auth','App\Http\Controllers\homeController@logout_auth');
Route::get('/send_otp_admin/{mail}','App\Http\Controllers\homeController@send_otp_admin');
Route::post('/login_check','App\Http\Controllers\homeController@login_check');
Route::post('/admin_otp_check','App\Http\Controllers\homeController@admin_otp_check');


Route::get('/invoice/{card_id}','App\Http\Controllers\homeController@invoice')->middleware('login');

Route::get('/print_invoice/{card_id}','App\Http\Controllers\homeController@print_invoice')->middleware('login');
Route::get('/counting_by_reference','App\Http\Controllers\homeController@counting_by_reference')->middleware('login');
Route::get('/handle_reperence_program_action/{id}/{action}','App\Http\Controllers\homeController@handle_reperence_program_action')->middleware('login');
Route::get('/get_one_data_card_register/{id}','App\Http\Controllers\homeController@get_one_data_card_register')->middleware('login');
Route::post('/update_reference_program','App\Http\Controllers\homeController@update_reference_program')->middleware('login');


Route::get('/list_register','App\Http\Controllers\homeController@get_all_register')->middleware('login');
Route::get('/get_all_card_register/{offset}/{search_value}','App\Http\Controllers\homeController@get_all_card_register')->middleware('login');
Route::post('/excel_data','App\Http\Controllers\homeController@excel_data')->middleware('login');
Route::post('/delevery_stutus','App\Http\Controllers\homeController@delevery_stutus')->middleware('login');

Route::post('/card_registation_add','App\Http\Controllers\homeController@card_registation_add')->middleware('login');

Route::get('/','App\Http\Controllers\homeController@dashboard')->middleware('login');

Route::get('/mail_box',function(){
    return view('mail_box');
})->middleware('login');

Route::get('/handle_branch_action/{id}/{action}','App\Http\Controllers\homeController@handle_branch_action')->middleware('login');

Route::get('/branch','App\Http\Controllers\homeController@branch')->middleware('login');
Route::get('/get_branch_all_data','App\Http\Controllers\homeController@get_branch_all_data')->middleware('login');
Route::post('/branch_user','App\Http\Controllers\homeController@branch_user')->middleware('login');

Route::post('/update_branch','App\Http\Controllers\homeController@update_branch')->middleware('login');

Route::get('/Franchiac_summary',function(){
    return view('Franchiac_summary_view');
})->middleware('login');

Route::get('Franchiac_summary_details/{reference_code}','App\Http\Controllers\homeController@Franchiac_summary_details')->middleware('login');

Route::get('overall_report/{reference_code}',function(){
    return view('overall_report_view');
})->middleware('login');
Route::get('corporate_report',function(){
return view('corporate_report');
})->middleware('login');
Route::get('profile','App\Http\Controllers\homeController@profile')->middleware('login');

Route::get('communication_view',function(){
    return view('communication_view');
})->middleware('login');

Route::get('add_card_user',function(){
    return view('add_card_user_view');
})->middleware('login');


Route::get('all_withdraw_requested_view','App\Http\Controllers\homeController@all_withdraw_requested')->middleware('login');


Route::post('withdraw_request','App\Http\Controllers\homeController@withdraw_request')->middleware('login');
Route::get('pay_payment/{id}','App\Http\Controllers\homeController@pay_payment')->middleware('login');
Route::get('withdraw_history_view','App\Http\Controllers\homeController@withdraw_history_view')->middleware('login');

Route::get('withdraw_request_client_view','App\Http\Controllers\homeController@withdraw_request_client_view')->middleware('login');


Route::get('Campain_chart_view','App\Http\Controllers\homeController@Campain_chart_view')->middleware('login');
Route::get('Campain_chart_Franchiac_view','App\Http\Controllers\homeController@Campain_chart_Franchiac_view')->middleware('login');
Route::get('change_percentage_campin/{id}/{value}','App\Http\Controllers\homeController@change_percentage_campin')->middleware('login');

Route::get('franchise_profile_form_view',function(){
    return view('franchise_profile_form_view');
})->middleware('login');

Route::post('franchise_profile_form_insert','App\Http\Controllers\homeController@franchise_profile_form_insert')->middleware('login');
Route::get('is_franchise_profil_submitted_data','App\Http\Controllers\homeController@is_franchise_profil_submitted_data')->middleware('login');
Route::post('genereting_report','App\Http\Controllers\homeController@genereting_report')->middleware('login');
Route::get('category_view','App\Http\Controllers\homeController@category_view')->middleware('login');

Route::post('category_action','App\Http\Controllers\homeController@category_action')->middleware('login');

Route::get('all_category','App\Http\Controllers\homeController@all_category')->middleware('login');


/* Affiliation */

Route::get('add_affiliation_product_view','App\Http\Controllers\homeController@add_affiliation_product_view')->middleware('login');
Route::get('add_affiliation_product_img_view','App\Http\Controllers\homeController@add_affiliation_product_img_view')->middleware('login');
Route::post('affiliation_product_insert','App\Http\Controllers\homeController@affiliation_product_insert')->middleware('login');
Route::post('affiliation_product_img_path_insert','App\Http\Controllers\homeController@affiliation_product_img_path_insert')->middleware('login');

Route::get('add_affiliation_partner_view','App\Http\Controllers\homeController@add_affiliation_partner_view')->middleware('login');
Route::post('add_affiliation_partner','App\Http\Controllers\homeController@add_affiliation_partner')->middleware('login');

// add_affiliation_partner_view


