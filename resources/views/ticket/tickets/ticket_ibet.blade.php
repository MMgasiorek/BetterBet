@extends('layouts.app')

@section('content')

<div class="container alkat">
    <div class="row mt-2">
        <h3 class="text-center"> My playing Ticket </h3>
    </div>
    <div class="row mt-2"> 
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-4">
                            <h6 class="text-center text-body-secondary">Ticket Number : {{ $ticket->id }}</h6>
                        </div>
                        <div class="col-4">
                            <h6 class="text-center text-body-secondary">Ticket owner : {{ $ticket->user->name }}</h6>
                        </div>
                        <div class="col-4">
                            <h6 class="text-center text-body-secondary">Total Odds : {{ $odds }}</h6>
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
                                <th scope="col">Home_Odd</th>
                                <th scope="col">Away</th>
                                <th scope="col">Away_Odd</th>
                                <th scope="col">Your_Odd</th>
                                <th scope="col">Your_Type</th>
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
                                <td>{{ $game->pivot->your_odd }}<td>
                                <td>{{ $game->pivot->your_type }}<td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-6">
        @foreach ($ticket->bet as $bet)
            @if ( $bet->status == 'accepted' )
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-body-secondary">Status</h6>
                    </div>
                    <div class="card-body bg-success">
                        <h4 class="text-center text-white">Accepted</h4>
                    </div>
                </div>
            @else 
                <div class="card">
                    <div class="card-header">
                        <h6 class="text-body-secondary">Status</h6>
                    </div>
                    <div class="card-body bg-warning">
                        <h4 class="text-center text-white">Waiting</h4>
                    </div>
                </div>           
            @endif
        
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="text-body-secondary">Stake</h6>
                        </div>
                        <div class="card-body">
                            {{ $bet->amount }} 
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="text-body-secondary">Total Odds</h6>
                        </div>
                        <div class="card-body">
                            {{ $odds }} 
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header">
                            <h6 class="text-body-secondary">Possible Win</h6>
                        </div>
                        <div class="card-body bg-success">
                        {{ $odds * $bet->amount }}
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        @endforeach
    </div>
</div>

@endsection