<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Test;

class BookingController extends Controller
{
    public function booking()
    {
        return view('user.booking');
    }
    public function view1()
    {
        return view('user.view1');
    }
    public function view2()
    {
        return view('user.view2');
    }


}
