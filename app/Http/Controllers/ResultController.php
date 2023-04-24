<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TicketRepository;
use App\Repositories\BetRepository;
use App\Repositories\GameRepository;
use App\Models\Ticket;


class ResultController extends Controller
{
    public function index(TicketRepository $ticketRepo, BetRepository $betRepo)
    {
        $exposed_by_me_ended = $ticketRepo->exposed_by_me_ended();
        $exposed_by_others_ended = $betRepo->exposed_by_others_ended();

        return view('gambling.result' , compact('exposed_by_me_ended', 'exposed_by_others_ended'));
    }

    public function show(TicketRepository $ticketRepo, int $id, string $type)
    {
        $ticket = $ticketRepo->switch_tickets($type, $id);

        return view('gambling.result_ticket'.$ticket[0] , ['ticket' => $ticket[1]]);
    }

    public function create(GameRepository $gameRepo)
    {
        $gameRepo->create_results();
    }

    public function update(GameRepository $gameRepo)
    {
        $games = $gameRepo->get_finished();
        $gameRepo->update_results($games);

        Ticket::whereHas('games', function ($query) {
            $query->where('result', 0);
        })->update(['result' => 1]);
    }
}
