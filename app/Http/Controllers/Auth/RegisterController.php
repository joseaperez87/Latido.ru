<?php

namespace App\Http\Controllers\Auth;

use App\City;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Lang;
use Illuminate\Support\Facades\Redirect;
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
    protected $redirectTo = '/registration/success';

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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showForm($id)
    {
        $data['cities'] = City::where('lang', Lang::getLocale())->get();
        $user = ['specialist' => 2, 'client' => 3];
        $data['id'] = $user[$id];
        return view('auth.register', ['data' => $data]);
    }


    public function validateMail($code){
        $code = explode("-",Crypt::decryptString($code));
        $user = User::where('email' , $code[1])->get();
        if(isset($user->id)){
            $user->active = 1;
            $user->save();
        }
        return redirect("/login");
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

        // $this->guard()->login($user);

        return $this->registered($request, $user)
            ?: redirect($this->redirectPath());
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create (array $data)
    {
        $settings = json_encode([]);
        $password = bcrypt($data['password']);
        $c_code = Crypt::encryptString($data['name']."-".$data['email']."-**");
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => $password,
            'role_id' => $data['role_id'],
            'city_id' => $data['city_id'],
            'user_settings' => $settings,
            'confirmation_code' => $c_code,
        ]);

        function adopt($text) {
            return '=?UTF-8?B?'.Base64_encode($text).'?=';
        }

        /*if($user->id){
            $admin_mail = "info@latido.ru";
            $form_subject = "Latido.ru - ".Lang::get('trans.register');
            $message = "<p>".Lang::get('mail.welcome')."</p><p><a href='".url("/")."/confirm/$c_code'>".{{ __('mail.confirm') }}."</a></p>";

            $headers = "MIME-Version: 1.0" . PHP_EOL .
                "Content-Type: text/html; charset=utf-8" . PHP_EOL .
                "From: $admin_mail" . PHP_EOL;
            mail($data['email'], adopt($form_subject), $message, $headers );
        }*/
        return $user;
    }
}
