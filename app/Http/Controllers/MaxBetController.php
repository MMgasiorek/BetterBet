<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TicketRepository;
use App\Http\Requests\ValidationClass;

class MaxBetController extends Controller
{
    public function store(ValidationClass $request, TicketRepository $ticketRepo)
    {
        $request->validated();

        $ticket = $ticketRepo->find($request->input('ticket_id'));
        $ticket->max_bet = $request->input('max_bet');
        $ticket->save();

        return back()->with('success','Max_Bet set');
    }
}
