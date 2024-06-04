<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use App\Settings\BasicSetting;
use App\Settings\Appearance;
class AirshareLayout extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $basicSetting = app(BasicSetting::class);
        $appearanceSetting = app(Appearance::class);
        return view('components.airshare-layout')->with([
            'basicSetting' => $basicSetting,
            'appearanceSetting' => $appearanceSetting
        ]);
    }
}
