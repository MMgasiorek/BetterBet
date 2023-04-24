@extends('layouts.app')

@section('content')

<div class="container alkat">
    <div class="row mt-2">
        <h3 class="text-center"> Results </h3>
    </div>
    <div class="row mt-4">
        <div class="card">
            <div class="card-header text-center">
                <h6 class="text-body-secondary">Ticket ID : {{ $ticket->id }}</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive " style="max-height:450px;">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Home</th>
                            <th scope="col">Score</th>
                            <th scope="col">Away</th>
                            <th scope="col">Score</th>
                            <th scope="col">Result</th>
                            </tr>
                        </thead>
                        @foreach ($ticket->games as $games)
                        <tbody>
                            <tr>
                            <th scope="row">{{ $games->id }}</th>
                            <td>{{ $games->name_home }}</td>
                            <td>{{ $games->score_home }}</td>
                            <td>{{ $games->name_away }}</td>
                            <td>{{ $games->score_away}}</td>
                            <td>
                            @if ($games->pivot->your_type === 1 && $games->score_home > $games->score_away || $games->pivot->your_type === 'X' && $games->score_home === $games->score_away || $games->pivot->your_type === 2 && $games->score_home < $games->score_away)

                            <button type="button" class="btn btn-danger btn-sm">+</button>

                            @else

                            <button type="button" class="btn btn-success btn-sm">+</button>

                            @endif   
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


@endsection




