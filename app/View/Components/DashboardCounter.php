<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Classes\Services\CustomerService;
use App\Models\User;
use App\Services\FlightBookingService;
class DashboardCounter extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(private CustomerService $customerService, private  FlightBookingService $flightBookingService)
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $customers = User::whereHas('roles', function($query){
            $query->where('name', 'Customer');
        })->count();
        $bookings_count = $this->flightBookingService->getTotalCount();
        
        return view('components.dashboard-counter')->with([
            'customers' => $customers,
            'bookings' => $bookings_count,
            'onDemands' => $this->flightBookingService->getTotalDemandCount()
        ]);
    }
}
