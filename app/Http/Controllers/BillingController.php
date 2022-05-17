<?php

namespace App\Http\Controllers;
use App\Models\Roombook;
use App\Models\Roombooks;
use Illuminate\Http\Request;

class BillingController extends Controller
{
    public function billing()
   {
   return view('user.billing');
   }
   public function print()
   {
   return view('admin.print');
   }
}
