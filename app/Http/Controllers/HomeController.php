<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Katalog;
use App\Models\User;
use App\Models\Periode;

class HomeController extends Controller
{
    public function index()
    {
        $jumlahKatalog = Katalog::count();
        $jumlahUser = User::count();
        $jumlahPeriode = periode::count();
        return view('home', [
            'jumlahKatalog' => $jumlahKatalog,
            'jumlahUser' => $jumlahUser,
            'jumlahPeriode' => $jumlahPeriode
        ]);
    }
}
