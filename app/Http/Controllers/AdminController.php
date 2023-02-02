<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Firma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        if(Auth::user()->role == 2){
            $firma = Firma::all();
            return view ('admin.admin', compact('firma'));
        }
       return abort(503); 
    }

    public function adminApi()
    {
        if(Auth::user()->role == 2){
            $firma = Firma::get();
            return response()->json([
                'status'=>'Sukses', 
                'firma'=>$firma
            ]);
        }
        return response()->json([
            'status'=>'failed'
        ]);
    }

    public function admintambahfirma()
    {   
        if(Auth::user()->role == 2){
            return view('admin.tambahfirma');
        }
        return abort(503); 
    }

    public function admintambahfirmainsert(Request $request)
    {   
        $data = Firma::create([
            'nama_firma' => $request->nama_firma,
            'phone' => $request->phone,
            'alamat' => $request->alamat,
            'rating' => $request->rating,
            'gambar' => $request->gambar,
        ]);
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambarfirma/', $request->file('gambar')->getClientOriginalName());
            $data->gambar = $request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect()->route('admin')->with('success', 'Firma Berhasil Dibuat');
    }

    public function admintambahfirmainsertApi(Request $request)
    {   
        if(Auth::user()->role == 2){
            $data = Firma::create([
                'nama_firma' => $request->nama_firma,
                'phone' => $request->phone,
                'alamat' => $request->alamat,
                'rating' => $request->rating,
                'gambar' => $request->gambar,
            ]);
            if($request->hasFile('gambar')){
                $request->file('gambar')->move('gambarfirma/', $request->file('gambar')->getClientOriginalName());
                $data->gambar = $request->file('gambar')->getClientOriginalName();
                $data->save();
            }
        return response()->json([
            'status'=>'Sukses', 
            'data'=>[
                'nama_firma' => $data->nama_firma,
                'phone' => $data->phone,
                'alamat' => $data->alamat,
                'rating' => $data->rating,
                'gambar' => $data->gambar,
            ]
        ]);
        }
    }

    public function adminfirmaedit($id)
    {   
        if(Auth::user()->role == 2){
            $data = Firma::find($id);
            return view('admin.tampilfirma', compact('data'));
        }
        return abort(503);
    }

    public function adminfirmaupdate(Request $request, $id)
    {   
        $data = Firma::find($id);
        if($request->hasFile('gambar')){
            $request->file('gambar')->move('gambarfirma/', $request->file('gambar')->getClientOriginalName());

            $data->update([
                'nama_firma' => $request->nama_firma,
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
                'nama_firma' => $request->nama_firma,
                'phone' => $request->phone,
                'alamat' => $request->alamat,
                'rating' => $request->rating,
            ]);
            $data->save();
        }
        return redirect()->route('admin')->with('success', 'Firma Berhasil Diupdate');
    }

    public function adminfirmaupdateApi(Request $request, $id)
    {   
        if(Auth::user()->role == 2){
            $data = Firma::find($id);
            if($request->hasFile('gambar')){
                $request->file('gambar')->move('gambarfirma/', $request->file('gambar')->getClientOriginalName());

                $data->update([
                    'nama_firma' => $request->nama_firma,
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
                    'nama_firma' => $request->nama_firma,
                    'phone' => $request->phone,
                    'alamat' => $request->alamat,
                    'rating' => $request->rating,
                ]);
                $data->save();
            }
            return response()->json([
                'status'=>'Sukses', 
                'data'=>[
                    'nama_firma' => $data->nama_firma,
                    'phone' => $data->phone,
                    'alamat' => $data->alamat,
                    'rating' => $data->rating,
                    'gambar' => $data->gambar,
                ]
            ]);
        }
    }

    public function adminfirmadelete($id)
    {
        $data = Firma::find($id);
        $data->delete();
        return redirect()->route('admin')->with('success', 'Firma Berhasil Didelete');
    }

    public function adminfirmadeleteApi($id)
    {
        $data = Firma::find($id);
        $data->delete();
        return response()->json([
            'status'=>'Delete Sukses', 
            'firma'=>$data
        ]);
    }

    // Api


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
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
