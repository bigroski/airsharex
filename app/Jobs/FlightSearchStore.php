<?php

namespace App\Jobs;

use App\Services\FlightSearchService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class FlightSearchStore implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(private $searchData,private $requestedSeats,private $transactionRefId,private $masterSerarchId)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(FlightSearchService $flightSearchService): void
    {
       
        foreach($this->searchData as $data){
            logger('flight store search',[$this->searchData]);

            $storeData = [
               "search_master_id"=>$this->masterSerarchId,
                "trip_id"=>$data['TripId'],
                "queue_date"=>$data['TripDate'],
                "requested_seats"=>$this->requestedSeats,
                // "search_master_id"=>"A98B48B9-38A5-4744-9986-C11EB0EC65BF",
                // "queue_id"=> "F0B5BE4E-72A1-4244-9E87-2B14FB0BD80B",
                // "queue_date"=> "2024-06-30",
                "transaction_ref_id"=>$this->transactionRefId,
                "data"=>$data
            ];
            $flightSearchService->storeSerachData($storeData); 

        }
    }
}
