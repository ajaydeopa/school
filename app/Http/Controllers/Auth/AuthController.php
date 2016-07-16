<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserDetail;
use App\CollegeDetail;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = 'dashboard';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            /*'first_name' => 'required|alpha|max:20',
            'middle_name' => 'required|alpha|max:20',
            'last_name' => 'required|alpha|max:20',*/
            'college_name' => 'required|max:20',
            'collegeid' => 'required|max:20',
            'email' => 'required|email|max:40|unique:users',
            //'profile_pic' => 'required',
            'logo' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        /*return User::create([
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'collegeid' => $data['collegeid'],
            'user_type' => 1,
        ]);*/
        $user = User::create([
                    'email' => $data['email'],
                    'password' => bcrypt($data['password']),
                    'collegeid' => $data['collegeid'],
                    'user_type' => 1,
                ]);

        $college = CollegeDetail::create([
                        'collegeid' => $data['collegeid'],
                        'college_name' => $data['college_name'],
                        'logo' => $data['logo'],
                    ]);

        UserDetail::create([
            'user_id' => $user->id,
            //'first_name' => $data['first_name'],
            //'middle_name' => $data['middle_name'],
            //'last_name' => $data['last_name'],
            //'profile_pic' => $data['profile_pic'],
            'college_detail_id' => $college->id,
        ]);

        return $user;
    }
}
