<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;

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
            'firstname' => 'required|max:255',
            'surname' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'g-recaptcha-response' => 'required',
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

         



        $user =  User::create([
            'name' => $data['firstname']." ".$data['surname'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'title' => $data['title'],
            'street' => $data['street'],
            'postcode' => $data['postcode'],
            'city' => $data['city'],
            'country' => $data['country'],
            'stage' => $data['stage'],
            'phone' => $data['phone'],
            'status' => '2',
            'birthday'=>$data['birthday'],
            'firstname'=>$data['firstname'],
            'surname'=>$data['surname']
        ]);
         Mail::send('mailagentreg', array('data'=>$data), function($message) use ($data){
                $message->from('noreply@tweetworldtravel.com.au', 'Customer Registration');
                $message->to('contact@worldwidecruises.com.au', 'Admin')->subject('Worldwide River Cruises - Customer Registration');
             //   $message->to('giang@tweetworldtravel.com.au', 'Admin')->subject('Worldwide River Cruises - Customer Registration');
                //mailto:contact@worldwidecruises.com.au
            });
        return $user;
    }
}
