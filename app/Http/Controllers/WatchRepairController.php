<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Veritrans\Veritrans;
class WatchRepairController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
        Veritrans::$serverKey = 'VT-server-8PMnKOXhCy5FZRjPD5OZkqdH';
        Veritrans::$isProduction = false;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('watch.repair');
    }
}
