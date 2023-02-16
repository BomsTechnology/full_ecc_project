<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSeatDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'adress',
        'email_adress_2',
        'planning',
        'pastor',
        'pastor_image',
        'trustee_member_1',
        'trustee_member_1_image',
        'trustee_member_2',
        'trustee_member_2_image',
        'trustee_member_3',
        'trustee_member_3_image',
        'trustee_member_4',
        'trustee_member_4_image',
        'trustee_member_5',
        'trustee_member_5_image',
        'trustee_member_6',
        'trustee_member_6_image',
        'trustee_member_7',
        'trustee_member_7_image',
        'user_id',
    ];
}
