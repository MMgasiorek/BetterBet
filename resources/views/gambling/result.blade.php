@extends('layouts.app')

@section('content')

<div class="container alkat">
    <div class="row mt-2">
        <h3 class="text-center"> Results </h3>
    </div>
    <div class="row mt-4">
        <div class="col-6">
            <div class="card">
                <div class="card-header text-center">
                    <h6 class="text-body-secondary">Others play my Tickets</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive " style="max-height:450px;">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Oponent</th>
                                <th scope="col">Date</th>
                                <th scope="col">Result</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            @foreach ($exposed_by_me_ended as $ticket)
                            <tbody>
                                <tr>
                                <th scope="row">{{$ticket->id}}</th>
                                <td>Tymczas</td>
                                <td>{{$ticket->created_at}}</td>
                                @if ( $ticket->result == true)
                                <td>
                                <button type="button" class="btn btn-success btn-sm">+</button>
                                </td>
                                @else 
                                <td>
                                <button type="button" class="btn btn-danger btn-sm">+</button>
                                </td>
                                @endif
                                <td>
                                    <a href="{{ URL::to('/show' , [$ticket->id , 'my'] )}}">
                                        <button type="button" class="btn btn-primary btn-sm">Show</button>
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
        <div class="col-6">
        <div class="card">
                <div class="card-header text-center">
                    <h6 class="text-body-secondary">I play This</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive " style="max-height:450px;">
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">Owner</th>
                                <th scope="col">Date</th>
                                <th scope="col">Result</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>
                            @foreach ($exposed_by_others_ended as $ticket)
                            <tbody>
                                <tr>
                                <th scope="row">{{$ticket->id}}</th>
                                <td>{{$ticket->user->name}}</td>
                                <td>{{$ticket->amount}}</td>
                                @if ( $ticket->result == true)
                                <td>
                                <button type="button" class="btn btn-success btn-sm">+</button>
                                </td>
                                @else 
                                <td>
                                <button type="button" class="btn btn-danger btn-sm">+</button>
                                </td>
                                @endif
                                <td>
                                    <a href="{{ URL::to('/show' , [$ticket->id , 'others'] )}}">
                                        <button type="button" class="btn btn-primary btn-sm">Show</button>
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

    <div>
</div>


@endsection


