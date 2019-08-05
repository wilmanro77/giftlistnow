<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
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
            'name_event' => ['required', 'string', 'max:255'],
            'date_start' => ['required', 'string', 'max:255'],
            'date_end' => ['required', 'string', 'max:255'],
            'name_boyfriend' => ['required', 'string', 'max:255'],
            'last_name_boyfriend' => ['required', 'string', 'max:255'],
            'name_girlfriend' => ['required', 'string', 'max:255'],
            'last_name_girlfriend' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'last_name' => $data['last_name'],
            'name_event' => $data['name_event'],
            'date_start' => $data['date_start'],
            'date_end' => $data['date_end'],
            'name_boyfriend' => $data['name_boyfriend'],
            'last_name_boyfriend' => $data['last_name_boyfriend'],
            'name_girlfriend' => $data['name_girlfriend'],
            'last_name_girlfriend' => $data['last_name_girlfriend'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
