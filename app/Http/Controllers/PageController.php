<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
   public function index(){
      $trains = Train::orderBy('DataPartenza')
                        ->orderBy('OrarioPartenza')
                        ->paginate(100);

      return view('home', compact('trains'));
   }
}
