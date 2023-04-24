<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\ApiController;
use App\Repositories\GameRepository;
use App\Models\Game;
use App\Models\Ticket;
use App\Repositories\TicketRepository;

class CheckResults extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check:matches';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'downloading match results, entering team goal values ​​into the database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $game = new Game;
        $ticket = new Ticket;
        $gameRepo = new GameRepository($game);
        $ticketRepo = new TicketRepository($ticket);
        $controller = new ApiController;
        $controller->get_scores($gameRepo);
        $controller->update($gameRepo, $ticketRepo);
    }
}
