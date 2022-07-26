<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Services\GoogleSheet;
use App\Models\Data;

class FetchSheetData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'googlesheet:fetch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'This command will fetch data from google sheet and update the data into the database.';

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
    public function handle(GoogleSheet $g)
    {
        $latestid = Data::orderBy('id', 'desc')->first()->id;
        if($latestid !== null){
            $latestid++;
        }else{
            //start from 1
            $latestid = 1;
        }

        $sheetData = $g->readGoogleSheet($latestid);  
        
        if($sheetData !== null){

            foreach ($sheetData as $key => $row) {

                $data = new Data;
                $data->date_time = $row[0];
                $data->tweet = $row[1];
                $data->price = str_replace("$"," ",$row[2]);
                $data->price_went_up = $row[3];
                $data->save();
            }

            return 'Google sheet updated successfully';

        }else{

            return 'Google sheet is already updated with the database.';

        }
    }
}
