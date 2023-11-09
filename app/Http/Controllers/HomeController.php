<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class HomeController extends Controller
{

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

    public function index(): View
    {
        $layer=Auth::user()->govofficial->employment_layer;
        $govofficial=Auth::user()->govofficial;
        // dd($govofficial);
        return view('govOfficials.userHome',compact('layer','govofficial'));
    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function adminHome(): View
    {
        return view('adminHome');
    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function managerHome(): View
    {
        return view('managerHome');

    }

}
