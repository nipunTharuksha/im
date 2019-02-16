<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class imController extends Controller
{
   public function home()
   {

     return view('im.industrialmaster.home');

   }public function courses(){
     return view ('im.industrialmaster.courses');

   }public function aboutus(){
    return view ('im.industrialmaster.aboutus');
  }
  public function contactus(){
    return view ('im.industrialmaster.contactus');
  }
}
