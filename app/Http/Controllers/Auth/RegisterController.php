<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['sometimes', 'string', 'max:255'],
            'user_name' => ['sometimes', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
            'type' => ['string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
            if($data['package_id'] == 1){

                // get the current time
                $current = Carbon::now();
                // add 30 days to the current time
                $package_end_date = $current->addDays(30);
            }
            elseif($data['package_id'] == 2){
                // get the current time
                $current = Carbon::now();
                // add 30 days to the current time
                $package_end_date = $current->addDays(365);
            }
            else{

            }
        // dd($data);
        return User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'user_name' => $data['user_name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type' => 'Player',
            'package_id' =>$data['package_id'],
            'package_amount'=>$data['package_amount'],
            'isKicker' => (isset($data['isKicker'])) ? 1 : 0,
            'isPunter' => (isset($data['isPunter'])) ? 1 : 0,
            'isLongSnapper' => (isset($data['isLongSnapper'])) ? 1 : 0,
            'package_status' => '1',
            'user_status' => '1',
            'package_end_date' => $package_end_date,


        ]);
    }
}
