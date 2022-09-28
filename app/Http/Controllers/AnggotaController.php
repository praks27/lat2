<?php

namespace App\Http\Controllers;

use App\Models\anggota;
use App\Http\Requests\StoreanggotaRequest;
use App\Http\Requests\UpdateanggotaRequest;
use App\Models\Major;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //ditambahkan with sebelum get untuk memanggil public function major di anggota.php
        $data = anggota::with(['major'])->get();
        return view('pages.student.list', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //ditambahkan major untuk memanggil relasi major
        $student = new anggota();
        $majors = Major::get();
        return view('pages.student.form',['student' => $student,'majors' => $majors]);
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
        // store untuk menyimpan data
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
        //ditambahkan major untuk memanggil relasi major
        $majors = Major::get();
        return view('pages.student.form',
        ['student'=>$student,'majors'=>$majors]);
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
