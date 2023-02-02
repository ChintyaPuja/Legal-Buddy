<?php

namespace App\Http\Controllers;

use App\Models\Admin2;
use App\Models\Pengadilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Admin2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin2()
    {
        if(Auth::user()->role == 2){
            $pengadilan = Pengadilan::all();
            return view ('admin.admin2', compact('pengadilan'));
        }
       return abort(503); 
    }

    public function admintambahpengadilan()
    {   
        if(Auth::user()->role == 2){
            return view('admin.tambahpengadilan');
        }
        return abort(503); 
    }

    public function admintambahpengadilaninsert(Request $request)
    {   
        $data = Pengadilan::create([
            'nama_pengadilan' => $request->nama_pengadilan,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'rating' => $request->rating,
            'gambar' => $request->gambar,
        ]);
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambarpengadilan/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('admin2')->with('success', 'Pengadilan Berhasil Dibuat');
    }

    public function adminpengadilanedit($id)
    {   
        if(Auth::user()->role == 2){
            $data = Pengadilan::find($id);
            return view('admin.tampilpengadilan', compact('data'));
        }
        return abort(503);
    }

    public function adminpengadilanupdate(Request $request, $id)
    {   
        $data = Pengadilan::find($id);
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambarpengadilan/', $request->file('gambar')->getClientOriginalName());

            $data->update([
                'nama_pengadilan' => $request->nama_pengadilan,
                'phone' => $request->phone,
                'alamat' => $request->alamat,
                'rating' => $request->rating,
                'gambar' => $request->gambar,
            ]);

            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        else{
            $data->update([
                'nama_pengadilan' => $request->nama_pengadilan,
                'phone' => $request->phone,
                'alamat' => $request->alamat,
                'rating' => $request->rating,
            ]);
            $data->save();
        }
        return redirect()->route('admin2')->with('success', 'Pengadilan Berhasil Diupdate');
    }

    public function adminpengadilandelete($id)
    {
        $data = Pengadilan::find($id);
        $data->delete();
        return redirect()->route('admin2')->with('success', 'Pengadilan Berhasil Didelete');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin2  $admin2
     * @return \Illuminate\Http\Response
     */
    public function show(Admin2 $admin2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin2  $admin2
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin2 $admin2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin2  $admin2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin2 $admin2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin2  $admin2
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin2 $admin2)
    {
        //
    }
}
