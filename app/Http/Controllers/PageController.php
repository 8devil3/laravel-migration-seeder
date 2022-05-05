<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
   public function index(){
      $trains = Train::orderBy('OrarioPartenza')
                        ->where('DataPartenza', '>=', now())
                        ->get();

      return view('home', compact('trains'));
   }
}
