<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roombook;
use App\Models\Roombooks;
use Illuminate\Support\Facades\Auth;
use App\User;

class PaymentController extends Controller
{
     public function payment()
 {
    $user=auth()->user();
    $roombooks=Roombook::all() ;
    $roombooks=roombook::where('email',$user['email'])->get();



    return view ('user.payment',compact('roombooks'));
 }
 //public function proceedtopay(Requrest $requrest)
 //{
    //$user=auth()->user();
    //$roombooks=roombook::where('email',$user['email'])->get();
    //$total = $roombook->price * $roombook->nodays;
    //foreach($roombooks as $roombook)
    //{
        //$total =  $roombook->price * $roombook->nodays;
   // }
   // $firstname = $requrest->input('firstname');
   // $lastname = $requrest->input('lastname');
   // $email = $requrest->input('email');
    //$phone = $requrest->input('phone');
    //$address = $requrest->input('address');
    //$city = $requrest->input('city');
    //$state = $requrest->input('state');
   // $pin = $requrest->input('pin');

    //return response()->json([
        //'firstname'=>  $firstname,
       // 'lastname'=> $lastname,
       // 'email'=>$email,
       // 'phone'=>$phone,
        //'address'=>$address,
       // 'city'=>$city,
        //'state'=>$state,
       // 'pin'=>$pin,
        //'total'=>$total

    //]);

  public function paymentprocess()
   {
   return view('user.paymentprocess');
   }
   public function proceedtopay()
   {
   return view('user.proceedtopay');
   }
   public function thankyou()
   {
   return view('user.thankyou');
   }
   public function paymentgateway()
   {
   return view('user.paymentgateway');
   }
   public function billing()
   {
    $user=auth()->user();
    $roombooks=Roombook::all() ;
    $roombooks=roombook::where('email',$user['email'])->get();



    return view ('user.billing',compact('roombooks'));
   //return view('user.billing');
   }
   public function payments()
   {
    $user=auth()->user();
    $roombooks=Roombook::all() ;
    $roombooks=roombook::where('email',$user['email'])->get();
    return view ('admin.payments',compact('roombooks'));
   }
   public function print()
   {
    $user=auth()->user();
    $roombooks=Roombook::all() ;
    $roombooks=roombook::where('email',$user['email'])->get();
    return view ('admin.print',compact('roombooks'));
   }
   public function profit()
   {
    $user=auth()->user();
    $roombooks=Roombook::all() ;
    $roombooks=roombook::where('email',$user['email'])->get();
    return view ('admin.profit',compact('roombooks'));
   }

}
