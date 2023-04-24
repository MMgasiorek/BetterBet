@extends('layouts.app')

@section('content')

<div class="container alkat">
    <div class="row mt-2">
        <h1 class="text-center">Tickets to confirm</h1>
    </div>
    <div class="row mt-2"> 
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-3">
                            <h6 class="text-center text-body-secondary">Ticket Number : {{ $ticket->id }}</h6>
                        </div>
                        <div class="col-3">
                            <h6 class="text-center text-body-secondary">Total Odds : {{ $odds }}</h6>
                        </div>
                        <div class="col-6">
                            <div class="row">
                                <div class="col-3">
                                    <form action="{{ url('set_max_bet') }}" method="POST" role="form">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <input type="hidden" name="ticket_id" value="{{ $ticket->id }}" />
                                    <label for="max_bet">Set Max bet</label>
                                </div>

                                <div class="col-3">
                                <input type="text" class="form-control" name="max_bet"/>
                                </div>

                                <div class="col-3">
                                    <div class="text-center">    
                                        <input type="submit" value="Add" class="btn btn-warning btn-sm" />
                                    </div> 
                                </div>
                                <div class="col-3">
                                    <div class="text-center">    
                                        <a href="{{ URL::to('/confirm_ticket' , [$ticket->id] )}}">
                                            <button type="button" class="btn btn-success btn-sm">Confirm</button>
                                        </a>  
                                    </div> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">ID</th>
                                <th scope="col">League</th>
                                <th scope="col">Home</th>
                                <th scope="col">Home_Bet</th>
                                <th scope="col">Away</th>
                                <th scope="col">Away_Bet</th>
                                <th scope="col">Change_type</th>
                                <th scope="col">Change_odd</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            @foreach ($ticket->games as $game) 
                            <tbody>
                                <tr>
                                <td>{{ $game->id }}</td>
                                <td>{{ $game->league }}</td>
                                <td>{{ $game->name_home }}</td>
                                <td>{{ $game->over_price }}</td>
                                <td>{{ $game->name_away }}</td>
                                <td>{{ $game->under_price }}</td>
                                <td>                    
                                    <form action="{{ url('edit_type') }}" method="POST" role="form">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <input type="hidden" name="ticket_id" value="{{ $ticket->id }}" />
                                        <input type="hidden" name="game_id" value="{{ $game->id }}" />
                                            <div class="form-group">
                                                <select class="form-control" name="new_type" id="new_type">
                                                    <option>1</option>
                                                    <option>0</option>
                                                    <option>2</option>
                                                </select>                              
                                            </div>
                                            <div class="text-center mt-1">
                                                <input type="submit" value="Change" class="btn btn-primary btn-sm" />
                                            </div>
                                    </form>
                                </td>
                                <td>        
                                    <form action="{{ url('edit_odd') }}" method="POST" role="form">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                                        <input type="hidden" name="ticket_id" value="{{ $ticket->id }}" />
                                        <input type="hidden" name="game_id" value="{{ $game->id }}" />
                                            <div class="form-group">
                                                <input type="text" placeholder="{{ $game->pivot->your_odd }}" class="form-control" name="new_odd"/>                            
                                            </div>
                                            <div class="text-center mt-1">
                                                <input type="submit" value="Change" class="btn btn-primary btn-sm" />
                                            </div>
                                    </form>
                                </td>
                                <td>
                                    <a href="{{ URL::to('/delete_game' , [$ticket->id , $game->id] )}}">
                                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                    </a>  
                                </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection