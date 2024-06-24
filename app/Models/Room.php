<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = ['room_number', 'room_level', 'room_type', 'facilities', 'rate', 'status'];

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
