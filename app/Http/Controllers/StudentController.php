<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;

class StudentController extends Controller
{
    

    public function index()
    {
        $students =User::latest()->paginate(5);

        return view('tabel.tabel', compact('students')); 
    }
}

