<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Models\Modul;
use Illuminate\Http\Request;
// use RealRashid\SweetAlert\Faced\Alert;
use Illuminate\Support\Facades\Session;
use Alert;

class ModulGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kelas_id = Session::get('id_kelas');
        return view('layouts/wrapper', [
            'modul'             => Modul::where('kelas_id', $kelas_id)->get(),
            'content_belajar'   => 'modul/index',
            'content'           => 'layouts/belajar/wrapper'
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts/wrapper', [
            'title'         => 'Tambah Modul',
            'content_belajar' => 'modul/create',
            'content'   => 'layouts/belajar/wrapper'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $request->validate([
            'name'      => 'required|min:3',
            'pertemuan'  => 'required',
            'file'  => 'required|mimes:pdf',
            'desc'  => 'required'
        ]);

        $data['user_id']    = auth()->user()->id;
        $data['kelas_id']   = Session::get('id_kelas');
        $data['is_active']  = 0;

        if ($request->hasFile('file')) {
            $cover = $request->file('file');
            $file_name = time() . "_" . $cover->getClientOriginalName();

            $storage = 'uploads/modul/';
            $cover->move($storage, $file_name);
            $data['file']  = $storage . $file_name;
        } else {
            $data['file']   = null;
        }

        Modul::create($data);
        Alert::success('Congrats', 'Success added');
        return redirect('/guru/modul');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Modul $modul)
    {
        return view('layouts/wrapper', [
            'title'         => 'Edit Modul',
            'modul'             => $modul,
            'content_belajar' => 'modul/create',
            'content'       => 'layouts/belajar/wrapper'
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Modul $modul)
    {
        $data = $request->validate([
            'name'          => 'required|min:3',
            'pertemuan'     => 'required',
            'file'          => 'mimes:pdf',
            'desc'          => 'required'
        ]);

        $data['user_id']    = auth()->user()->id;
        $data['kelas_id']   = Session::get('id_kelas');
        $data['is_active']  = 0;

        if ($request->hasFile('file')) {

            if ($modul->file != '') {
                unlink($modul->file);
            }

            $cover = $request->file('file');
            $file_name = time() . "_" . $cover->getClientOriginalName();

            $storage = 'uploads/modul/';
            $cover->move($storage, $file_name);
            $data['file']  = $storage . $file_name;
        } else {
            $data['file']   = $modul->file;
        }

        $modul->update($data);
        return redirect('/guru/modul');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Modul $modul)
    {
        // Alert::question('Question Title', 'Question Message');
        if ($modul->file != '') {
            unlink($modul->file);
        }

        $modul->delete();
        // Alert::success('Sukses', 'Data dihapus');
        return redirect('/guru/modul');
    }
}
