<?php

namespace App\Http\Controllers\guru;

use tidy;
use App\Models\Kelas;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class KelasGuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('layouts/wrapper', [
            'kelas'   => Kelas::latest()->where('user_id', auth()->user()->id)->paginate(3),
            'content'   => 'kelas/index'
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

            'content'   => 'kelas/create'
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
            'name'      => 'required|min:4',
            'cover'     => 'required',
            'desc'      => 'required',
            'is_active'
        ]);


        $data['user_id'] = auth()->user()->id;
        $data['is_active'] = 0;
        // $data['cover']  = $request->file('cover')->getClientOriginalName();
        if ($request->hasFile('cover')) {
            $cover = $request->file('cover');
            $file_name = time() . "_" . $cover->getClientOriginalName();

            $storage = 'uploads/images/';
            $cover->move($storage, $file_name);
            $data['cover'] = $file_name;
        } else {
            $data['cover'] = NULL;
        }
        // $data['cover'] = $request->file('cover')->store('public/uploads/images', 'public');
        // $data['cover'] = str_replace($request, 'public', '/storage');
        // dd($data['cover']);
        Kelas::create($data);
        return redirect()->route('kelas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        Session::put('id_kelas', $id);
        return redirect('/guru/dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
