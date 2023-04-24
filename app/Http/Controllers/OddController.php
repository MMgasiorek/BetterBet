<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TicketRepository;
use App\Http\Requests\ValidationClass;

class OddController extends Controller
{
    public function update(ValidationClass $request, TicketRepository $ticketRepo)
    {
        $request->validated();
        
        $ticket = $ticketRepo->find($request->input('ticket_id'));
        $ticket->games()->updateExistingPivot($request->input('game_id'), ['your_odd' => $request->input('new_odd')]);

        return back()->with('success','odd updated');
    }
}
