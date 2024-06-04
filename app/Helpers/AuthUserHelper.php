<?php

namespace App\Helpers;

use App\Models\User;
use App\Providers\RouteServiceProvider;

function redirectAuthUser(User $user)
{

    if ($user->type == 'vendor') {
        $vendor = $user->detailable();
        if ($vendor) {
            return redirect()->route('web.vendors.edit', $vendor->id);
        } else {
            return redirect()->route('web.vendors.create');
        }
    } elseif ($user->type == 'customer') {

        $customer = $user->detailable();
        if ($customer) {
            return redirect()->route('web.customers.edit', $customer->id);
        } else {
            return redirect()->route('web.customers.create');
        }
    } else {
        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
function redirectRegisteredUser(User $user)
{

    if ($user->type == 'vendor') {
        $vendor = $user->detailable();
       
            return redirect()->route('web.vendors.create');
        
    } else if ($user->type == 'customer') {
       
     return redirect()->route('web.customers.create');
        
    } else {
        return redirect()->intended(RouteServiceProvider::HOME);
    }
}
