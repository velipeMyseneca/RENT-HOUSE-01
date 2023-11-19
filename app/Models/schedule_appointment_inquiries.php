<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class schedule_appointment_inquiries extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'list_id',
        'date_schedule',
        'message'    
    ];
}
