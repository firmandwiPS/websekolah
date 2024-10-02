<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        return view('admin');
    }
    function guru()
    {
        return view('admin');
    }
    function siswa()
    {
        return view('admin');
    }

    function halamanguru()
    {
        return view('halamanguru');
    }
    function halamansiswa()
    {
        return view('halamansiswa');
    }

    function pembelajaransiswa()
    {
        return view('pembelajaransiswa');
    }
    function pembelajaranguru()
    {
        return view('pembelajaranguru');
    }

    function halaman()
    {
        return view('halaman');
    }
}
