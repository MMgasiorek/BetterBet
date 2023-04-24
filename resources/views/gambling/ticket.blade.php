@extends('layouts.app')

@section('content')

<div class="container mt-4 alkat">
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4">
                        <h6>ID:</h6>{{ $ticket->id }}
                        </div>
                        <div class="col-4">
                        <h6>Owner:</h6>{{ $ticket->user->name }}
                        </div>
                        <div class="col-4">
                        <h6>Max bet:</h6>{{ $ticket->max_bet}}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive " style="max-height:350px;">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Home</th>
                                <th scope="col">Away</th>
                                <th scope="col">Odd</th>
                                <th scope="col">Type</th>
                                </tr>
                            </thead>
                            @foreach ($ticket->games as $game)
                            <tbody>
                                <tr>
                                <th scope="row">{{$game->id}}</th>
                                <td>{{$game->name_home}}</td>
                                <td>{{$game->name_away}}</td>
                                <td>{{$game->pivot->your_odd}}</td>
                                <td>{{$game->pivot->your_type}}</td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="card-footer bg-success">
                    <h4 class="text-center text-white">Confirmed</h4>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card text-center">
                <div class="card-header">
                    <h4>Set Your Bet</h4>
                </div>
                <div class="card-body">
                    <form action="{{ url('take_ticket') }}" method="POST" role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="ticket_id" value="{{ $ticket->id }}" />
                        <input type="hidden" name="owner_id" value="{{ $ticket->user->id }}" />
                        <input type="hidden" name="max_bet" value="{{ $ticket->max_bet }}" />
                            <div class="form-group">
                                <div class="row mt-5">
                                    <div class="col-12">
                                    <label for="amount">Amount</label>
                                    <input type="text" class="form-control" name="amount"/>
                                    </div>
                                </div>
                            <div class="row">       
                                <div class="text-center">    
                                    <input type="submit" value="Take" class="btn btn-primary mt-2" />
                            </div> 
                            </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection


