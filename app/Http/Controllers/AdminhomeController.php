<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Adminhome;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use Illuminate\Http\Request;

class AdminhomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function adminhome()
    {
        $firma = Firma::all();
        return view('admin.adminhome', compact('firma'));
    }

    public function index()
    {
        //
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
     * @param  \App\Models\Adminhome  $adminhome
     * @return \Illuminate\Http\Response
     */
    public function show(Adminhome $adminhome)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Adminhome  $adminhome
     * @return \Illuminate\Http\Response
     */
    public function edit(Adminhome $adminhome)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adminhome  $adminhome
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Adminhome $adminhome)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adminhome  $adminhome
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adminhome $adminhome)
    {
        //
    }
}
