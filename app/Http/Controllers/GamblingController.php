<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TicketRepository;
use App\Repositories\BetRepository;
use Illuminate\Support\Facades\Auth;
use App\Models\Bet;
use App\Models\User;
use App\Models\Ticket;
use App\Notifications\GetTicketNotification;
use App\Notifications\ResponseTicketNotification;

class GamblingController extends Controller
{
 
    public function index(TicketRepository $ticketRepo)
    {
        $ready = $ticketRepo->ticket_play();

        return view('gambling.index' , ['ready' => $ready]);
    }

    public function show(TicketRepository $ticketRepo, int $id) 
    {
        $ticket = $ticketRepo->find($id);
        $game_data = Ticket::find($id)->games()->withPivot('your_type')->get();

        return view('gambling.ticket' , ['ticket' => $ticket, 'game_data' => $game_data]);
    }

    public function create(Request $request)
    {
        $max_bet = $request->input('max_bet');

        $request->validate([
            'amount' => ['required','numeric', 'max:'. $max_bet ],
        ]);

        $user = User::find($request->input('owner_id'));
        $sender = User::find(Auth::id());
        $user->notify(new GetTicketNotification($sender->name));

        $bet = new Bet;
        $bet->user_id = Auth::id();
        $bet->ticket_id = $request->input('ticket_id');
        $bet->amount = $request->input('amount');
        $bet->status = 'waiting';
        $bet->save();

        return redirect()->action([TicketController::class, 'index'])->with('success','Ticket taked');
    }

    public function update(BetRepository $BetRepo, int $id, int $player_id)
    {
        $user = User::find($player_id);
        $sender = User::find(Auth::id());
        $user->notify(new ResponseTicketNotification($sender->name));

        $ticket = $BetRepo->find($id);
        $ticket->status = 'accepted';
        $ticket->save();

        return redirect()->action([TicketController::class, 'index'])->with('success','Ticket accepted');

    }

    public function delete(BetRepository $betRepo, int $id) 
    {
        $bet = $betRepo->delete($id);

        return back()->with('success','removed correctly');
    }
    
}
