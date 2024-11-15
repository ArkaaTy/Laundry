<?php

namespace App\Http\Controllers;

use App\Models\Laundry;

class LaundryController extends Controller
{
    public function index() {

        $data = Laundry::all();
         return view('datalaundry', compact('data'));
    }
}
