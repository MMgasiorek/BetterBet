<?php

namespace App\Repositories;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class TicketRepository extends BaseRepository{

    public function __construct(Ticket $model){

        $this->model= $model;
    }

    public function switch_tickets( string $type, int $id)
    {
        switch($type) {
            case 'ready':
                $viewName = '_ready';
                break;
            case 'notready':
                $viewName = '_not_ready';
                break;
            case 'ibet':
                $viewName = '_ibet';
                break;
            case 'youbet':
                $viewName = '_youbet';
                break;
            case 'my':
                $viewName = '_my';
                break;
            case 'others':
                $viewName = '_others';
                break;
            default:
        }
        
        $ticket = Ticket::find($id);

        return [$viewName, $ticket];
    }

    public function getConfirm()
    {
        return $this->model->where('confirm', '1')->where('user_id', Auth::id())->get();
    }

    public function ticket_play()
    {
        return $this->model->where('confirm', '1')->where('user_id', '!=', Auth::id())->get();
    }

    public function getPending()
    {
        return $this->model->where('confirm', '0')->where('user_id', Auth::id())->get();
    }

    public function delete_match(int $id, int $id_game)
    {
        DB::table('game_ticket')->where('ticket_id', $id)->where('game_id', $id_game)->delete();
    }

    public function sum_odds(int $id)
    {
        $ticket = Ticket::with('games')->find($id);
        $result = 1;
        foreach ($ticket->games as $game) {
            $result *= $game->pivot->your_odd;
        }

        return $result;
    }

    public function bet_user(int $id)
    {
        $user = User::whereHas('bets', function ($query) use ($id) {
            $query->where('bet_id', $id);
        })->first();

        return $user;
    }

    public function exposed_by_me_ended()
    {
        return $this->model->where('ended', true)->where('user_id', Auth::id())->get();
    }

}