<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserFaithfulDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'birthday',
        'sex',
        'can_give_lesson',
        'diploma_certification',
        'spoken_languages',
        'other_activity',
        'search_partner',
        'user_id',
        'grade_ecc_id',
        'function_ecc_id',
        'ministry_ecc_id',
        'instrument_ecc_id',
    ];
}
