<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\LocationsImportController;

class LoadCsv extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'load:csv';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Load excel csv data';

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
    public function handle(LocationsImportController $locationsImportController)
    {
        $locationsImportController->import();
        return 0;
    }
}
