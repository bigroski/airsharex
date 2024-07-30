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
    public function __construct(
        private $data,
        private $userId,
        private $ticketBookingNo,
        private $paymentType,
        private $paymentRefId
    ) {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(FlightSearchService $flightSearchService): void
    {

        logger('StoreFlightTicketDetail called',$this->data);


        $storeData = [
            "payment_method" => $this->paymentType,
            "payment_ref_id" => $this->paymentRefId,
            "trip_id" => $this->data['DHTripDetail']['TripId'],
            "flight_date" => $this->data['DHTripDetail']['TripDate'],
            "requested_seats" => $this->data['TotalSeat'],
            'customer_id' => $this->userId,
            "flight_data" => $this->data,
            "booking_reference_id" => $this->ticketBookingNo,
        ];
        $flightSearchService->storeFlightticketDetails($storeData);
    }
}
