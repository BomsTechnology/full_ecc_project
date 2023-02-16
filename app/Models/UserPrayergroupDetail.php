<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPrayergroupDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'creation_date',
        'social_object',
        'adress',
        'responsable_name',
        'responsable_image',
        'planning',
        'give_lesson',
        'give_lesson_detail',
        'user_id',
        'dimension_ecc_id',
        'follower_number_id',
        'order_worship',
    ];
}
