<?php

namespace App\Repositories;

use App\Models\Bet;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;


class BetRepository extends BaseRepository{

    public function __construct(Bet $model){

        $this->model= $model;
    }

    public function exposed_by_others_ended()
    {
        $tickets = Ticket::whereHas('bet', function($query) {
            $query->where('user_id', '=', Auth::id());
        })
        ->where('ended', '=', true)
        ->get();

        return $tickets;
    }


}