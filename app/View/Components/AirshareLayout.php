<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Settings\BasicSetting;
use App\Settings\Appearance;
use App\Services\VendorService;
class AirshareLayout extends Component
{
    private VendorService $vendorService;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
        $this->vendorService = app(VendorService::class);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $basicSetting = app(BasicSetting::class);
        $appearanceSetting = app(Appearance::class);
        // Get the lattest vendors for footer
        $featuredVendors = $this->vendorService->featuredVendors();

        return view('components.airshare-layout')->with([
            'basicSetting' => $basicSetting,
            'appearanceSetting' => $appearanceSetting,
            'featuredVendors' => $featuredVendors
        ]);
    }
}
