<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDioceseDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'diocese_feast',
        'responsable_name',
        'responsable_image',
        'secretary_name',
        'secretary_image',
        'cdn_president',
        'cdn_president_image',
        'adress',
        'planning',
        'training_niche',
        'user_id',
        'associate_seat',
    ];
}
