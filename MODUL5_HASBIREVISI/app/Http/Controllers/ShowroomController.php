<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\showroom_mobil;

class ShowroomController extends Controller
{
    public function create(){
        return view('showroom.create');
    }
    public function edit($id){
        $showroom = showroom_mobil::find($id);
    }
    public function store(Request $request){
        $data = $request->all();
        showroom_mobil::create([
            'nama_mobil' => $data['name'],
            'brand_mobil' => $data['brand'],
            'warna_mobil' => $data['warna'],
            'tipe_mobil' => $data['harga'],
        ]); return redirect(route('showroom.index'));
    }
    public function index(){
        $showroom = showroom_mobil::all();
        return view('showroom.index', compact('showroom'));
    }
}
