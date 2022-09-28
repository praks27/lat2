<?php

namespace App\Http\Controllers;

use App\Models\major;
use App\Http\Requests\StoremajorRequest;
use App\Http\Requests\UpdatemajorRequest;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //untuk menampilkan seleuruh data yang ada di database sesuai table nya
        $data = major::get();
        return view('pages.major.list',['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //untuk insert ke database
        $major = new major();
        return view('pages.major.form',['major' => $major]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoremajorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoremajorRequest $request)
    {
        //untuk menampung data lalu dikirim ke database
        $data = $request->all();
        major::create($data);
        return redirect('major')->with('notif','berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\major  $major
     * @return \Illuminate\Http\Response
     */
    public function show(major $major)
    {
        //
        $data = $major->load(['students']);
        return view('pages.major.list-student',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\major  $major
     * @return \Illuminate\Http\Response
     */
    public function edit(major $major)
    {
        //untuk menampilkan kembali form input dengan berisikan data dari database
        return view('pages.major.form',['major'=>$major]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatemajorRequest  $request
     * @param  \App\Models\major  $major
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatemajorRequest $request, major $major)
    {
        //untuk menampilkan value dari databse
        $data = $request->all();
        //untuk menyimpan data setelah update
        $major -> update($data);
        //untuk memanggil fungsi notif session tambahkan panah setelah kurung,lalu ketikan with
        //untuk parameter pertama berdasarkan nama dari variabel session dan parameter kedua berisikan pesan yang akan di tampilkan
        return redirect('major')->with('notif','berhasil update data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\major  $major
     * @return \Illuminate\Http\Response
     */
    public function destroy(major $major)
    {
        //method delete di gunakan untuk menghapus data
        $major->delete();
        return redirect('major')->with('notif','berhasil delete data');
    }
}
