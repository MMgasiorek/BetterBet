<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'api_id',
        'start_time',
        'name_home',
        'name_away',
        'over_price',
        'over_point',
        'under_price',
        'under_point',
        'score_home',
        'score_away',
        'ended',
    ];

    public function tickets() {
        return $this->belongsToMany(Ticket::class);
    }

    public function results() {
        return $this->belongsToMany(Ticket::class)->withPivot('result');
    }

}