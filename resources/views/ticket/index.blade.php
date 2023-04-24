@extends('layouts.app')

@section('content')
<div class="container alkat">
    <div class="row mt-2">
        <h3 class="text-center"> All Tickets </h3>
    </div>
    <div class="row mt-2">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-body-secondary">Ready Tickets</h6>
                </div>
                <div class="card-body">
                <div class="table-responsive " style="max-height:300px;">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Status</th>
                            <th scope="col">Max bet</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($ready as $ticket)
                            <tr>
                            <td>{{$ticket->id}}</td>
                            <td>ready</td>
                            <td>{{$ticket->max_bet}}</td>
                            <td>
                            <a href="{{ URL::to('/delete_ticket' , [$ticket->id] )}}">
                                <button type="button" id="myButton" class="btn btn-danger btn-sm">Delete</button>
                            </a>  
                            <a href="{{ URL::to('/show' , [$ticket->id , 'ready'] )}}">
                                <button type="button" class="btn btn-primary btn-sm">Edit</button>
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
                <div class="card-header">
                    <h6 class="text-body-secondary">Tickets To Confirm</h6>
                </div>
                <div class="card-body">
                <div class="table-responsive" style="max-height:300px;">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Status</th>
                            <th scope="col">Max bet</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($pending as $ticket)
                            <tr>
                            <td>{{$ticket->id}}</td>
                            <td>not confirm</td>
                            <td>{{$ticket->max_bet}}</td>
                            <td>
                            <a href="{{ URL::to('/delete_ticket' , [$ticket->id] )}}">
                                <button type="button" class="btn btn-danger btn-sm">Delete</button>              
                            </a>  
                            <a href="{{ URL::to('/show' , [$ticket->id , 'notready'] )}}">
                                <button type="button" class="btn btn-primary btn-sm">Edit</button>
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
    <div class="row mt-4">
    <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h6 class="text-body-secondary">My Bets</h6>
                </div>
                <div class="card-body">
                <div class="table-responsive" style="max-height:300px;">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Bet</th>
                            <th scope="col">Status</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                        @foreach ($my_bets as $ticket)
                            <tr>
                            <td>{{$ticket->ticket_id}}</td>
                            <td>{{$ticket->amount}}</td>
                            <td>{{$ticket->status}}</td>
                            <td>
                            <a href="{{ URL::to('/delete_bet' , [$ticket->id] )}}">
                                <button type="button" class="btn btn-danger btn-sm">Delete</button>
                            </a>  
                            <a href="{{ URL::to('/show' , [$ticket->ticket_id , 'ibet'] )}}">
                                <button type="button" class="btn btn-success btn-sm">Show</button>
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
                <div class="card-header">
                    <h6 class="text-body-secondary">My Beted Tickets</h6>
                </div>
                <div class="card-body">
                <div class="table-responsive" style="max-height:300px;">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Bet</th>
                            <th scope="col">Status</th>
                            <th scope="col">User</th>
                            <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($user->bets as $ticket)
                            <tr>
                            <td>{{$ticket->id}}</td>
                            <td>{{$ticket->amount}}</td>
                            <td>{{$ticket->status}}</td>
                            <td>{{$ticket->user->name}}</td>
                            <td>
                            <a href="{{ URL::to('/delete_ticket' , [$ticket->id] )}}">
                                <button type="button" class="btn btn-danger btn-sm">Delete</button>
                            </a>  
                            <a href="{{ URL::to('/show' , [$ticket->ticket_id , 'youbet'] )}}">
                                <button type="button" class="btn btn-success btn-sm">Show</button>
                            </a>  
                            @if ( $ticket->status == 'waiting' )  
                                <a href="{{ URL::to('/accept_ticket' , [$ticket->id , $ticket->user->id ] )}}"> 
                                    <button type="button" class="btn btn-warning btn-sm">Accept</button>
                                </a> 
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
    
</div>
@endsection
