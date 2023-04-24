<?php

namespace App\Repositories;

use App\Models\Game;
use App\Models\Ticket;
use Illuminate\Support\Facades\Http;

use DB;
use Exception;

class GameRepository extends BaseRepository{

    public function __construct(Game $model){

        $this->model= $model;
    }

    public function get_current()
    {
        return $this->model->where('ended', false)->get();
    }

    public function get_finished()
    {
        return $this->model->where('ended', true)->get();
    }

    public function get_games_from_api()
    {
        $apiKey = 'your api_key';

        try {
            $response = Http::get('https://api.the-odds-api.com//v4/sports/soccer/odds/'.$apiKey.'&regions=eu&markets=totals');
            if ($response->successful()) {

                $data = $response->json();
                
                $matches = count($data);
    
                for ($i = 0 ; $i < $matches ; $i++)
                {
                    $game = new Game;
                    $game->api_id           = $data[$i]['id'];
                    $game->start_time       = date("Y-m-d", strtotime($data[$i]['commence_time']));
                    $game->name_home        = $data[$i]['home_team'];
                    $game->name_away        = $data[$i]['away_team'];
                    $game->leaque           = $data[$i]['sport_key'];
                    $game->over_price       = $data[$i]['bookmakers'][0]['markets'][0]['outcomes'][0]['price'];
                    $game->over_point       = $data[$i]['bookmakers'][0]['markets'][0]['outcomes'][0]['point'];
                    $game->under_price      = $data[$i]['bookmakers'][0]['markets'][0]['outcomes'][1]['price'];
                    $game->under_point      = $data[$i]['bookmakers'][0]['markets'][0]['outcomes'][1]['point'];
                    $game->save();      
                }      
            }
        } catch (Exception $e) {
            throw new Exception('Error while executing the HTTP request: '.$e->getMessage());
        }

        return true;
    }

    public function create_results()
    {
        $apiKey = 'your api_key';

        try {
            $response = Http::get('https://api.the-odds-api.com/v4/sports/soccer/scores/?daysFrom=1&'.$apiKey.'');
            if ($response->successful()) {

                $data = $response->json();
                $games = $this->get_current();
                $i = 1;
    
                foreach($games as $game)
                {
                    $game->score_home       = $data[$i]['scores'][0]['score'];
                    $game->score_away       = $data[$i]['scores'][1]['score'];
                    $game->ended            = true;
                    $game->save();
                    $i++;
                }
            }
        } catch (Exception $e) {
            throw new Exception('Error while executing the HTTP request: '.$e->getMessage());
        }

        return true;
    }

    public function update_results($games)
    {
        foreach ($games as $game)
        {
            foreach ($game->results as $ticket)
            {
                $ticket = Ticket::find($ticket->id);  
                foreach ($ticket->games as $pivo)
                {
                    if ($pivo->pivot->your_type === 1 && $game->score_home > $game->score_away ||
                        $pivo->pivot->your_type === 0 && $game->score_home === $game->score_away || 
                        $pivo->pivot->your_type === 2 && $game->score_home < $game->score_away) 
                    {
                        $ticket->games()->updateExistingPivot($game->id, ['result' => 1]);
                    } 
                    else
                    {
                        $ticket->games()->updateExistingPivot($game->id, ['result' => 2]);
                    } 
                }           
            }
        }

        return true;
    }

}