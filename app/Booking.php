<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//use App\User;

class Booking extends Model
{
    protected $fillable = [
        'user_id', 'hotel_id', 'room_number', 'duration', 'arrival_date',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }

}
