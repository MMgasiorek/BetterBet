<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\TicketRepository;
use App\Http\Requests\ValidationClass;

class TypeController extends Controller
{
    public function update(ValidationClass $request, TicketRepository $ticketRepo) 
    {
        $request->validated();

        $ticket = $ticketRepo->find($request->input('ticket_id'));
        $ticket->games()->updateExistingPivot($request->input('game_id'), ['your_type' => $request->input('new_type')]);

        return back()->with('success','type updated');
    }
}
