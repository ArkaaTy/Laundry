<?php

namespace App\Http\Controllers;

use App\Models\Laundry;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LaundryController extends Controller
{
    public function index() {

        $data = Laundry::all();
         return view('datalaundry', compact('data'));
    }

    public function store(Request $request){

        //variabel dibawah untuk memanggil data yang disimpan di Request
    
        $input = $request->all();
        $input['harga_total'] = $input['berat'] * 5000;

        if($request->hasFile('image')){ //memanggil file yang diupload dari form
            $gambar = $request->file('image');
            $path_simpan = 'public/images/pesanan'; //posting diubah sesuai dengan column yang anda buat.
            $format = $gambar->getClientOriginalExtension();
            $nama = 'postingan'.Carbon::now()->format('ymdhis').random_int(00000, 99999).'.'.$format; //
            $simpan = $request->file('image')->storeAs($path_simpan, $nama); //simpan di storage local. 
            $input['image'] = $nama;
        }

        // dd($input);

        Laundry::create($input);
        return back();


        // Laundry::create($data);
        // return back();  
       }

       public function detail($id){
        $data = Laundry::find($id);
        return view('detail', compact('data'));
       }
    

    public function delete($id){
        $data = Laundry::find($id);
        $data->delete();
        return back()->with('success', 'data berhasil dihapus yey!');
     }

    }
