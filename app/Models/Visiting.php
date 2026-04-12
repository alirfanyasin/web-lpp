<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Visiting extends Model
{
    protected $fillable = [
        'name',
        'nik',
        'phone',
        'email',
        'address',

        'wbp_name',
        'wbp_registration_number',
        'relationship',
        'number_of_visitor',

        'visit_date',
        'visit_session',
        'ktp_file',
        'is_agree',
        'approve',
    ];
}
