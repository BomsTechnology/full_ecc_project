<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserParishDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'creation_date',
        'haverst_festival_date',
        'adress',
        'responsable_name',
        'responsable_image',
        'planning',
        'give_lesson',
        'give_lesson_detail',
        'woman_parish',
        'woman_parish_image',
        'committe_president',
        'committe_president_image',
        'visionarie_leader',
        'visionarie_leader_image',
        'choir_master',
        'choir_master_image',
        'training_responsable',
        'training_responsable_image',
        'sacristain',
        'sacristain_image',
        'user_id',
        'follower_number_id',
        'order_worship',
        'associate_seat',
        'dimension_ecc_id',
    ];
}
