<?php

namespace App\Http\Controllers;

use App\Models\Hari;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
        if (Auth::user()->role !== 'user') {
            return view('admin.index');
        } else {
            return view('home.index');
        }
    }

    public function home(){
        $haris=Hari::all();
        return view('home.index',compact("haris"));
    }

    public function detilHari($slug){
        $students=User::where("hari",$slug)->get();
        return view('tabel.tabel',compact("students"));
    }


}
