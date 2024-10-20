<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Services\FlightBookingService;

class RecentBooking extends Component
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

        return view('components.recent-booking')->with([
            'bookings' => $this->flightBookingService->getLatestBookings()
        ]);
    }
}
