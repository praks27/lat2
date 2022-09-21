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
        $student = new anggota();
        return view('pages.form',['student' => $student]);
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
        return redirect('student')->with('notif','berhasil menambah data');
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
    public function edit(anggota $student)
    {
        //
        return view('pages.form',['student'=>$student]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateanggotaRequest  $request
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateanggotaRequest $request, anggota $student)
    {
        //
        $data = $request->all();
        $student -> update($data);
        //untuk memanggil fungsi notif session tambahkan panah setelah kurung,lalu ketikan with
        //untuk parameter pertama berdasarkan nama dari variabel session dan parameter kedua berisikan pesan yang akan di tampilkan
        return redirect('student')->with('notif','berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\anggota  $anggota
     * @return \Illuminate\Http\Response
     */
    public function destroy(anggota $student)
    {
        //
        $student->delete();
        return redirect('student')->with('notif','berhasil hapus data');
    }
}
