<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TicketRepository;
use App\Repositories\BetRepository;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\GameController;
use App\Models\Ticket;
use App\Models\User;


class TicketController extends Controller
{
    public function index(TicketRepository $ticketRepo, BetRepository $betRepo)
    {
        $ready = $ticketRepo->getConfirm();
        $pending = $ticketRepo->getPending();
        $my_bets = $betRepo->exposed_by_others_ended();
        $user = User::find(Auth::id());     

        return view('ticket.index', compact('ready', 'pending', 'my_bets', 'user'));
    }

    public function show(TicketRepository $ticketRepo, int $id, string $type)
    {
        $ticket = $ticketRepo->switch_tickets($type, $id);
        $odds = $ticketRepo->sum_odds($id);

        return view('ticket.tickets.ticket'.$ticket[0] , ['ticket' => $ticket[1], 'odds' => $odds]);
    }
    
    public function create()
    {
        $ticket = new Ticket;
        $ticket->user_id = Auth::id();
        $ticket->confirm = false;
        $ticket->max_bet = 1;
        $ticket->save();

        return redirect()->action([GameController::class, 'index']);
    }


    public function update(TicketRepository $ticketRepo, int $id)
    {
        $ticket = $ticketRepo->find($id);
        $ticket->confirm = '1';
        $ticket->sum_odds = $ticketRepo->sum_odds($id);
        $ticket->save();

        return redirect()->action([TicketController::class, 'index'])->with('success','Ticket odded');

    }

    public function delete(TicketRepository $ticketRepo, int $id) 
    {
        $ticketRepo->delete($id);

        return back()->with('success','removed correctly');
    }

}
