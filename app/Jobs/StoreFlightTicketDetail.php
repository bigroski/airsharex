<?php

namespace App\Jobs;

use App\Services\FlightSearchService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class StoreFlightTicketDetail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(private $data,private $userId,private $requestedSeats)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(FlightSearchService $flightSearchService): void
    {

        logger($this->data);
        $storeData = [
            // "search_master_id"=>$this->masterSerarchId,
             "trip_id"=>$this->data['DHTripDetail']['TripId'],
             "queue_date"=>$this->data['DHTripDetail']['TripDate'],
             "requested_seats"=>$this->requestedSeats,
             'customer_id'=>$this->userId,
            //  "transaction_ref_id"=>$this->transactionRefId,
             "data"=>$this->data
         ];
         $flightSearchService->storeFlightticketDetails($storeData); 

    }
}
