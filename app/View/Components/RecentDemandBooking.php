<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Services\FlightBookingService;


class RecentDemandBooking extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(private FlightBookingService $flightBookingService)
    
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.recent-demand-booking')->with([
            'onDemands' => $this->flightBookingService->getLatestDemands()
        ]);
    }
}
