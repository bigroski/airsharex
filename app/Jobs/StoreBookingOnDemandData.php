<?php

namespace App\Jobs;

use App\Services\FlightBookingService;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class StoreBookingOnDemandData implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(private $data)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(FlightBookingService $flightBookingService): void
    {
         $flightBookingService->storeBookingOnDemandData($this->data);
    }
}
