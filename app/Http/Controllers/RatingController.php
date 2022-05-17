<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;
use App\Models\Room;
use App\Models\Roombook;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class RatingController extends Controller
{
    public function addrating(Request $request)
    {
      return redirect('room');
     $stars_rated=$request->input('room_rating');
     $room_id=$request->input('room_id');
     $room_check =Room::where('id',$room_id)->where('status','0')->first();
     if($room_check)
     {
      $verified_purchase=Booking::where ('bookings.user_id',Auth::id())
      ->join('booking_rooms','room.id','booking_rooms.roombook_id')
      ->where('booking_rooms.room_id',$room_id)->get();
if($verified_purchase)
 {
    $existing_rating=Rating::where('user_id',Auth::id())->where('room_id', $room_id)->first();
    if($existing_rating)
    {
        $existing_rating->stars_rated=$stars_rated;
        $existing_rating->update();
    }
    else
           {
                Rating::create([
                'user_id'=>Auth::id(),
                 'room_id'=>$room_id,
                'stars_rated'=>$stars_rated]);
            }
            return redirect()->back()->with('status',"Thankyou for Rating this Resort");
 }
 else

    {
     return redirect()->back()->with('status',"You cannot rate a room without booking ");
    }
     }
     else
     {
     return redirect()->back()->with('status',"The link you followed was broken");
     }


    }
}
