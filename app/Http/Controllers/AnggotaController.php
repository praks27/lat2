<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Http\Requests\StoreanggotaRequest;
use App\Http\Requests\UpdateanggotaRequest;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = anggota::get();
        return view('pages.list', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreanggotaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreanggotaRequest $request)
    {
        //untuk debug view data yang akan di masukkan ke data base
        // dd($request->all());
        //
        $data = $request->all();
        anggota::create($data);
        return redirect('anggota');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function show(anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function edit(anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateanggotaRequest  $request
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateanggotaRequest $request, anggota $anggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(anggota $anggota)
    {
        //
    }
}
