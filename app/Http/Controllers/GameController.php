<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\GameRepository;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

use Exception;

class GameController extends Controller
{
    public function index(GameRepository $gameRepo)
    {
        $games = $gameRepo->get_current();
        $ticket = Ticket::where('user_id', Auth::id())->latest()->first();

        return view('ticket.games' , ['games' => $games , 'ticket' => $ticket]);
    }

    public function show(GameRepository $gameRepo, int $id)
    {
        $game = $gameRepo->find($id);

        return view('ticket.game' , ['game' => $game]);
    }

    public function create(GameRepository $gameRepo)
    {
        $gameRepo->get_games_from_api();
    }

}