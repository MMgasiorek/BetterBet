<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'confirm',
        'max_bet',
        'result',
        'ended'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function games() {
        return $this->belongsToMany(Game::class)->withPivot('your_type', 'your_odd', 'result');
    }

    public function bet()  {
        return $this->hasMany(Bet::class);
    }

}
