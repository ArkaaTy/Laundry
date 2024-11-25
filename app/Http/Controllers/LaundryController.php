<?php

namespace App\Http\Controllers;

use App\Models\Laundry;

class LaundryController extends Controller
{
    public function index() {

        $data = Laundry::all();
         return view('datalaundry', compact('data'));
    }

    public function delete($id){
        $data = Laundry::find($id);
        $data->delete();
        return back()->with('success', 'data berhasil dihapus yey!');
     }
}
