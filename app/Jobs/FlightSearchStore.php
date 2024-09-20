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
                // 'total_price' => $data['TicketSellingRate'] * $this->requestedSeats,
                "transaction_ref_id"=>$this->transactionRefId,
                "data"=>$data
            ];
            $flightSearchService->storeSerachData($storeData); 

        }
    }
}
