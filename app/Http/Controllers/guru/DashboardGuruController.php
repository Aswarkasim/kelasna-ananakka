<?php

namespace App\Http\Controllers\guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardGuruController extends Controller
{

    public function index()
    {
        return view('layouts/wrapper', [
            'content'       => 'dashboard/index'
        ]);
    }
}
