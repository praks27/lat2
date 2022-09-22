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
        //
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
        //
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
        //
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
        //
        $data = $request->all();
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
        //
        $major->delete();
        return redirect('major')->with('notif','berhasil delete data');
    }
}
