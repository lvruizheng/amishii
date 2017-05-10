<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Services\Helper;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\json_decode;

use Auth;
use Cookie;

class HomeController extends Controller
{
    public function __construct()
    {
        //$this->middleware('auth');
    }
    
    public function index(Request $request)
    {
//         $res = Helper::sendHttp();
// 	    var_dump($res);die;
        return view('home');
    }
    
}
