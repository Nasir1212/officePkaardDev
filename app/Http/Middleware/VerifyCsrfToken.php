<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        'card_registation_add',
        'branch_user',
        'update_branch',
        'login_check',
        'admin_otp_check',
        'excel_file_upload',
        'excel_data',
        'delevery_stutus',
        'update_card_data',
        'reference_code_adding',
        'reference_code_update',
        'excel_file_refere',
        'add_reference_rogram',
        'update_reference_program',
        'withdraw_request',
        'franchise_profile_form_insert',
        'genereting_report',
        'category_action',
        'affiliation_product_insert',
        'affiliation_product_img_path_insert',
        'add_affiliation_partner',
        'add_store_room_data',
        'add_aff_sub_discount_product',
        'update_aff_sub_discount_product',
        'upload_img_path_sub_product',
        'upload_store_room_img_path',
        'update_store_room_data',
        'default_img_path_uploader',
        'update_affiliation_partner',
        'update_affiliation_from_partner_view',
        'delete_img'
    ];
}
