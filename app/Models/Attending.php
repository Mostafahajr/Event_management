<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attending extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'num_tickets'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function events() {
        return $this->belongsTo(Event::class);
    }
}
