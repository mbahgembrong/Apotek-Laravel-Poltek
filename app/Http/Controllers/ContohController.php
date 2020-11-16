<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    //memanggil welcome
    public function welcome()
    {
        return view('index');
    }
    //memanggil about
    public function about()
    {
        return view('profile.about');
    }
    //memanggil contac
    public function contac()
    {
        return view('contactus');
    }
    public function obat()
    {
        return view('obat.index');
    }
    public function vitamin()
    {
        return view('obat.vitamin');
    }
}
