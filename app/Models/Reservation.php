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
        'phone',
        'email',
        'address', // Ensure this is included
        'city',
        'state',
        'postal_code',
        'check_in',
        'check_out',
        'room_type',
        'guests_adults',
        'guests_children',
        'package',
        'special_requests',
        'is_paid', // Add this line
    ];
}
