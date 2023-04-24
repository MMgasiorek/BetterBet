@extends('layouts.app')

@section('content')

<div class="container alkat">
    <div class="row mt-4">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-center text-body-secondary">Available Tickets</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive " style="max-height:450px;">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">User</th>
                                <th scope="col">Odd Sum</th>
                                <th scope="col">Action</th>
                                <th scope="col"></th>
                                </tr>
                            </thead>
                            @foreach($ready as $ticket)
                            <tbody>
                                <tr>
                                <th scope="row">{{ $ticket->id }}</th>
                                <td>{{ $ticket->user->name }}</td>
                                <td>{{ $ticket->sum_odds }}</td>
                                <td>
                                    <a href="{{ URL::to('/set_ticket' , [$ticket->id] )}}">
                                        <button type="button" class="btn btn-success btn-sm">Check</button>
                                    </a>  
                                </td>
                                <td>
                                    <span class="badge badge-pulsate-hot">Hot</span>
                                    <span class="badge badge-pulsate-wow">New</span>
                                    <span class="badge badge-pulsate-fif">50</span>
                                </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="row">
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header"><h2 class="text-center">Our Tips #1</h2></div>
                            <div class="card-body">
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                        target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card shadow mb-4">
                        <div class="card-header"><h2 class="text-center">Our Tips #2</h2></div>
                            <div class="card-body">
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                        target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card shadow mb-4">
                            <div class="card-body">
                                    <p>Add some quality, svg illustrations to your project courtesy of <a
                                        target="_blank" rel="nofollow" href="https://undraw.co/">unDraw</a>, a
                                        constantly updated collection of beautiful svg images that you can use
                                        completely free and without attribution!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

