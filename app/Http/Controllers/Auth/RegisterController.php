<?php

namespace GiftListNow\Http\Controllers\Auth;

use GiftListNow\User;
use GiftListNow\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
    protected $redirectTo = '/home';

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
            'last_name' => ['required', 'string', 'max:255'],
            'event_name' => ['required', 'string', 'max:255'],
            'start_date' => ['required', 'string', 'max:255'],
            'end_date' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    protected function generateCodeEvent()
    {
        $codeEvent = mt_rand(1000, 9999);

        return $codeEvent;
    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \GiftListNow\User
     */
    protected function create(array $data)
    {
        //dd($data["event_name"]);
        return User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'name_event' => $data['event_name'],
            'date_start' => $data['start_date'],
            'date_end' => $data['end_date'],
            'email' => $data['email'],
            'event_code' => $this->generateCodeEvent(),
            'password' => Hash::make($data['password'])
        ]);
    }
}
