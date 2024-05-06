<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Log;
use Session;

//this is User model
use App\Models\User;

//this is Customer model
use App\Models\Customer;

class HomeController extends Controller
{
    public function shiftdata()
    {
        $users = User::get();
        dd($users);

        }
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
}
