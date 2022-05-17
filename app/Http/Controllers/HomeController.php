<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\RoomBook;
use Cookie;




class HomeController extends Controller
{
    public function redirect()
    {

        $usertype=Auth::user()->usertype;

        if($usertype=='1')
        {
          return view('admin.home');
        }
        else
        {

            $data = roombook::paginate(3);
            $user = auth()->user();
            $count= roombook::where('email',$user->email)->count();
            return view('user.home',compact('data','count'));
        }
    }
    public function index()
    {
        if(Auth::id())
        {
            return redirect('redirect');
        }
        else
        {
        return view ('user.home');
        }
    }

}
