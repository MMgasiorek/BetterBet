@extends('layouts.app')

@section('content')

<div class="container mt-4 alkat">
    <div class="row mt-2">
        <h3 class="text-center"> Available Games </h3>
    </div>
    <div class="row mt-2">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive " style="max-height:450px;">
                        <table class="table table-sm">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Home</th>
                                <th scope="col">Away</th>
                                <th scope="col">Home Odd</th>
                                <th scope="col">Away Odd</th>
                                <th scope="col">Start</th>
                                </tr>
                            </thead>
                            @foreach ($games as $game)
                            <tbody>
                                <tr>
                                <th scope="row">{{ $game->id }}</th>
                                <td>{{ $game->name_home }}</td>
                                <td>{{ $game->name_away }}</td>
                                <td>{{ $game->over_price }}</td>
                                <td>{{ $game->under_price }}</td>
                                <td>{{ $game->start_time }}</td>
                                <td>
                                    <a href="{{ URL::to('/show_game' , [$game->id] )}}">
                                        <button type="button" class="btn btn-primary btn-sm">Bet</button>
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
        <div class="col-2">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    @if (empty($ticket))
                    <li class="list-group-item">Currently have no Ticket</li>
                    @else 
                    <li class="list-group-item"><h6 class="text-center"> Your Ticket ID : {{ $ticket->id }}<h6></li>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>



@endsection
