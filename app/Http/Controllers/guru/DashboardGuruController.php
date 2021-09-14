<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use App\Models\Kelas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardGuruController extends Controller
{

    public function index()
    {
        $id_kelas = Session::get('id_kelas');
        return view('layouts/wrapper', [
            'kelas'         => Kelas::find($id_kelas),
            'content'       => 'dashboard/index'
        ]);
    }
}
