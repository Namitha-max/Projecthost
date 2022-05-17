<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Rooms;
use App\Models\Roombooks;
use App\Models\Roombook;
use App\Models\Payment;


class RoomController extends Controller
{

    public function useradd()
    {


        if(isset($_POST['submit']))
        {
        $code1=$_POST['code1'];
        $code=$_POST['code'];
        if($code1!="$code")
        {
        $msg="Invalide code";
        }
        else
        {

                $con=mysqli_connect("127.0.0.1","root","","vacations");
                $check="SELECT * FROM roombook WHERE email = '$_POST[email]'";
                $rs = mysqli_query($con,$check);
                $data = mysqli_fetch_array($rs, MYSQLI_NUM);
                if($data[0] > 1) {
                    echo "<script type='text/javascript'> alert('User Already in Exists')</script>";

                }

                else
                {
                    $new ="Not Conform";
                    echo($_POST['cin']);
                    $newUser="INSERT INTO `roombook`(`Title`, `FName`, `LName`,`address`, `Email`, `National`,`state`,`city`, `idprf`, `idnum`,`image`,`Phone`,`pin`,`Resort`,
                    `troom`,`trvlr`, `Tmeb`, `cin`, `cout`,`stat`)
                     VALUES ('$_POST[title]','$_POST[fname]','$_POST[lname]','$_POST[address]','$_POST[email]','$_POST[nation]','$_POST[state]','$_POST[city]','$_POST[idprf]','$_POST[idnum]','$_POST[file]','$_POST[phone]','$_POST[pin]','$_POST[resort]',
                     '$_POST[troom]','$_POST[trvlr]','$_POST[tmeb]','$_POST[cin]','$_POST[cout]','$new')";
                    if (mysqli_query($con,$newUser))
                    {
                        echo "<script type='text/javascript'> alert('Your Booking application has been sent')</script>";

                    }
                    else
                    {
                        if (!mysqli_query($con,$newUser)) {
                            echo("Error description: " . mysqli_error($con));
                          }
                        echo "<script type='text/javascript'> alert('Error adding user in database')</script>";

                    }
                }

        $msg="Your code is correct";
        }
        }
                           // return view ('user.room');
                          // return redirect()->route('room');
                          //return view('user.room',compact('data'));
                          return redirect('payment');


    }
    public function room()
    {
       // return redirect()->route('user.room');



       $data = rooms::all();
        return view ('user.room',compact('data'));
    }
    public function showbooking()
    {
        $user=auth()->user();
        $roombooks=roombook::where('email',$user['email'])->get();
        $count=roombook::where('email',$user['email'])->count();
        return view('user.showbooking',compact('count','roombooks'));
    }

    public function search(Request $request)
    {
        $search=$request->search;

        $data=rooms::where('title','Like','%'.$search.'%')->get();
        return view('user.room',compact('data'));
    }

    public function delete($id)
    {
        $data=roombook::find($id);
        $data->delete();
        return redirect()->back()->with('message','Your Room is removed successfully');
    }
    public function mybooking()
    {
        $user=auth()->user();
        $roombooks=roombook::where('email',$user['email'])->get();
        $count=roombook::where('email',$user['email'])->count();
        return view('user.mybooking',compact('count','roombooks'));
    }




}

