@extends('layouts.app')

@section('content')

<div class="container alkat">
    <div class="row mt-2">
        <h3 class="text-center"> Add to Ticket </h3>
    </div>
    <div class="row mt-5">
        <div class="col-6">
            <div class="card text-center">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                            <h6>ID:</h6>{{ $game->id }} 
                        </div>
                        <div class="col-6">
                            <h6>Date:</h6> {{ $game->start_time }}
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <h6>Home:</h6>{{ $game->name_home}}
                        </div>
                        <div class="col-6">
                            <h6>Away:</h6> {{ $game->name_away }}
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-6">
                            <h6>Home odd:</h6>{{ $game->over_price}}
                        </div>
                        <div class="col-6">
                            <h6>Away odd:</h6> {{ $game->under_price}}
                        </div>
                    </div>                                   
                </div>
            </div>
        </div>
        <div class="col-6">
            <div class="card">
                <div class="card-header"><h6>Set Your odd and type</h6></div>
                <div class="card-body">
                    <form action="{{ url('confirm') }}" method="POST" role="form">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
                        <input type="hidden" name="game_id" value="{{ $game->id }}" />
                        <div class="form-group">
                            <div class="row">
                                <div class="col-12">
                                    <label for="your_odd">Your Odd</label>
                                        <input type="text" class="form-control" name="your_odd"/>
                                    <label for="your_type">Your Type</label>
                                        <select class="form-control" name="your_type" id="your_type">
                                            <option>1</option>
                                            <option>0</option>
                                            <option>2</option>
                                        </select>
                                </div>
                            </div>
                            <div class="row">       
                                <div class="text-center">    
                                        <input type="submit" value="Add" class="btn btn-primary btn-sm mt-2" />
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
