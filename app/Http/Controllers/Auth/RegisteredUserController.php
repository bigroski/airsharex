<?php

namespace App\Http\Controllers\Auth;

use App\Classes\Services\CustomerService;
use App\Classes\Services\MailingListService;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRrequest;
use App\Jobs\RegisterCustomer;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use App\Services\ApiService;
use Bigroski\Tukicms\App\Models\Customer;
use Exception;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Illuminate\Support\Facades\Password;

class RegisteredUserController extends Controller
{
    public function __construct(
        protected MailingListService $mailingListService,
    private CustomerService $customerService,
    private ApiService $apiService,
    )
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

    public function createCutomer(CustomerRrequest $request){
        DB::beginTransaction();
        try{
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'type'=>"Customer"]);
            $user->assignRole('Customer');

        $customer =  $this->customerService->makeCustomer($request->all());  
            $data = [     
                "user_id"=>$user->id,           
                "Country"=>$request->country,
                "City"=> $request->city,
                "Address"=> $request->address,
                'name' => $request->name,
                'Email' => $request->email,
                'PhoneNumber' => $request->phone,
                'type'=>"Customer"];
            // dispatch(new RegisterCustomer($data,$customer->id) );
            $airCustomer  = $this->apiService->registerCustomer($data);
            $customer = Customer::where('id',$customer->id)->first();
            $customer->api_customer_id = $airCustomer->id;
            $customer->save();
            DB::commit();
            $booking = [];
            // return view('booking')->with('result', $booking);

        }catch(Exception $e){
        DB::rollBack();
        $error = 'An error occurred: ' . $e->getMessage();
        logger($error);
        // return view('booking')->with('error', $error);


        }
    }

    public function forgotPassword(){

    }
    public function verifyPassword(){

    }
    public function resetPassword(Request $request){
        $request->validate(['email' => 'required|email']);
     
        $status = Password::sendResetLink(
            $request->only('email')
        );
        return $status === Password::RESET_LINK_SENT
                    ? back()->with(['status' => __($status)])
                    : back()->withErrors(['email' => __($status)]);
        // dump($all);
    }
    public function processResetPassword(){
        
    }
}
