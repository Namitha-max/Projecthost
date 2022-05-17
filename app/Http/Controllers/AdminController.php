<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rooms;

class AdminController extends Controller
{

        public function rooms(Request $request)
{


        if($request->has('rememberme'))
        {
          Cookie::queue('adminemail',$request->email,1440);
          Cookie::queue('adminpwd',$request->password,1440);

        }


        return view ('admin.rooms');
    }
    public function uploadrooms(Request $request)
    {
        $data=new rooms;

        $image=$request->file;

        $imagename=time().'.'.$image->getClientOriginalExtension();

        $request->file->move('roomimage',$imagename);

        $data->image= $imagename;

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->des;

       $data->save();
       return redirect()->back()->with('message','Resort added successfully') ;
    }

    public function showrooms()
    {

       $data=rooms::all();

        return view ('admin.showrooms',compact('data'));
    }
    public function deleterooms($id)
    {
        $data=rooms::find($id);
        $data->delete();
        return redirect()->back()->with('message','Resort deleted');
    }

    public function updateview($id)
    {
     $data=rooms::find($id);
     return view('admin.updateview',compact('data'));
    }


    public function updaterooms(Request $request ,$id )
    {
      $data=rooms::find($id);

      $image=$request->file;

      if($image)
      {

      $imagename=time().'.'.$image->getClientOriginalExtension();

      $request->file->move('roomimage',$imagename);

      $data->image= $imagename;

      }

      $data->title=$request->title;

      $data->price=$request->price;

      $data->description=$request->des;

     $data->save();
     return redirect()->back()->with('message','Resort updated successfully') ;
  }



    }


