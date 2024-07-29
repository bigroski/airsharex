<?php

namespace App\Jobs;

use App\Models\User;
use App\Services\ApiService;
use Bigroski\Tukicms\App\Models\Customer;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class RegisterCustomer implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public function __construct(private $data, private $customerId)
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(ApiService $apiService): void
    {
        $airCustomer  = $apiService->registerCustomer($this->data);
        $customer = Customer::where('id',$this->customerId)->first();
        $customer->api_customer_id = $airCustomer->id;
        $customer->save();
        
    }
}
