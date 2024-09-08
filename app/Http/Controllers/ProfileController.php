<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use Bigroski\Tukicms\App\Classes\Services\UserService;

class ProfileController extends Controller
{
    public function __construct(private UserService $userService){

    }
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        // dump($request->user()->tickets);
        return view('profile.edit', [
            'user' => $request->user(),
            'tickets' => $request->user()->tickets()->orderBy('created_at', 'desc')->get()
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $request->user()->save();

        return Redirect::route('profile.edit')->with('status', 'profile-updated');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }

    public function changePassword(Request $request){
        $user  = Auth::user();
        $this->userService->changePassword($request, $user);
        $request->session()->flash('success', 'Password Successfully updated');
        return redirect()->back();
    }
}
