<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Roombook;
use App\Models\Roombooks;

class RazorpayController extends Controller
{
    public function payWithRazorpay()
    {
        $user=auth()->user();
    $roombooks=Roombook::all() ;
    $roombooks=roombook::where('email',$user['email'])->get();
        return view('user.payWithRazorpay',compact('roombooks'));
    }

    public function pay(Request $request)
    {
        $input = $request->all();

        $api = new Api(env('RAZOR_KEY'), env('RAZOR_SECRET'));

        $payment = $api->payment->fetch($request->razorpay_payment_id);

        if(count($input)  && !empty($input['razorpay_payment_id'])) {
            try {

                $payment->capture(array('amount'=>$payment['amount']));

            } catch (\Exception $e) {
                return  $e->getMessage();
                \Session::put('error',$e->getMessage());
                return redirect()->back();
            }
        }

        $payInfo = [
                   'payment_id' => $request->razorpay_payment_id,
                   'email' => $request->email,
                   'amount' => $request->amount,
                ];

        Payment::insertGetId($payInfo);

        \Session::put('success', 'Payment successful');

        return response()->json(['success' => 'Payment successful']);
    }
}


