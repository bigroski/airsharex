<?php

namespace App\Http\Controllers\Auth;

use App\Classes\Services\MailingListService;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    public function __construct(protected MailingListService $mailingListService)
    {
       
    }
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            // 'phone' => ['required', 'string', 'lowercase',' regex:/^[0-9]{10}$/', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'type'=>$request->type,
        ]);

        if($request->type=='vendor'){
            $user->assignRole('Vendor');

        }else{
            $user->assignRole('Customer');
        }
        $mailingListData = [
            'user_id'=>$user->id,
            'email'=>$request->email,
        ];
        $mailingList = $this->mailingListService->adduserToMailingList($mailingListData);
        
        event(new Registered($user));

        Auth::login($user);
        return redirect(RouteServiceProvider::HOME);
    }
}
