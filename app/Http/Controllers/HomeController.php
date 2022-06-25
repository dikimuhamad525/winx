<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Models\Profile;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $artikel = Home::orderByDesc('tanggal')->limit(4)->get();
        $testimonial = Testimonial::orderByDesc('tanggal')->get();
        return view('home', compact('artikel', 'testimonial'));
    }
}
