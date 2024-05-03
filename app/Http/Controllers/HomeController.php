<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Admin\CustomerController;
use App\Models\Log;
use session; 

//this is User model
use App\Models\User;

//this is Customer model
use App\Models\Customer;

class HomeController extends Controller
{
    public function shiftdata()
    {
        $users = User::get();
        
        foreach ($users as $key => $value){
            Customer:: create ([
                'first_name' => $value-> first_name;
                'email' => $value-> email;
            ]);

            return 'Shift data successfully...!';
        }

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
