<?php

namespace App\Jobs;

use App\Models\User;
use App\Services\ApiService;
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
        $user = User::where('id',$this->customerId)->first();
        $user->api_customer_id = $airCustomer->id;
        $user->save();

        
    }
}
