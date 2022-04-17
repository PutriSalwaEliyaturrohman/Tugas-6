<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Friends;

class CobaController extends Controller
{
    public function index()
    {
        $friends = Friends::paginate(3);

        return view('index', compact('friends'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        // Validate the request...
        
        $friends=new Friends;

        $friends->nama = $request->nama;
        $friends->no_hp = $request->no_hp;
        $friends->alamat = $request->alamat;

        $friends->save();

    }
}