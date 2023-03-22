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
        'genereting_report'
    ];
}
