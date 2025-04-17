<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    // Allow mass assignment for these attributes
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'room_type',
        'check_in',
        'check_out',
        'guests_adults',
        'guests_children',
        'package',
        'special_requests',
        'is_paid', // Add this line
    ];
}
