<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $fillable = [
        'costumer_name',
        'play_date',
        'field_name',
        'price',
        'status'
    ];
}
