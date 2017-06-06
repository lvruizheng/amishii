<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Http\Request;
use Cookie;
use Crypt;
use Config;
use \Common\Common;

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
    protected $redirectTo = '/';

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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
    
    //登陆页面
    public function showLoginForm(Request $request)
    {
        $arr = array('status'=>'200');
        $reque = $request->all();
        $rules    = [
            'callback'     => 'required',
            'details'      => 'required',
            '_secret'      => 'required',
        ];
    
        $v = Validator::make($reque, $rules);
    
        if ($v->fails()) {
            $arr['status'] = 3;
            return response($reque['callback'].'('.json_encode($arr).')');
        }
    
        $user_cont = Crypt::decrypt($reque['details']);
    
        //验证是否有效
        $new_secret = MD5($reque['details'].Common::$auth_secret);
        if($reque['_secret'] != $new_secret){
            $arr['status'] = 2;
            return response($reque['callback'].'('.json_encode($arr).')');die;
        }
    
        return response($reque['callback'].'('.json_encode($arr).')')->withCookie(Cookie::forever('nk', $user_cont['nk']))->withCookie(Cookie::forever('uid',$user_cont['uid']));
    }
    
    /**
     * 登出
     */
    public function logout(Request $request)
    {
        $reque = $request->all();
        $arr = array('status'=>'200');
    
        return response($reque['callback'].'('.json_encode($arr).')')->withCookie(Cookie::forget('nk'))->withCookie(Cookie::forget('uid'));
    }
}
