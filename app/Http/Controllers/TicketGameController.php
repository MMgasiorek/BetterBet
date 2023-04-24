<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TicketRepository;
use Illuminate\Support\Facades\Auth;
use App\Models\Ticket;
use App\Http\Requests\ValidationClass;

class TicketGameController extends Controller
{
    public function create(ValidationClass $request)
    {
        $request->validated();

        $game_id = $request->input('game_id');
        $your_odd = $request->input('your_odd');
        $your_type = $request->input('your_type');
        $ticket = Ticket::where('user_id', Auth::id())->latest()->first();

        $ticket->games()->attach($game_id, ['your_odd' => $your_odd ,  'your_type' => $your_type]);

        return redirect()->action([GameController::class, 'index'])->with('success','New game added correctly');
    }

    public function delete(TicketRepository $ticketRepo, int $id, int $id_game) 
    {
        $ticketRepo->delete_match($id, $id_game);

        return back()->with('success','removed correctly');
    }

}
