<?php

namespace App\Http\Controllers;

use App\Models\Toy;
use Illuminate\Http\Request;

class ToyController extends Controller
{
    // Halaman Utama / Daftar Mainan
    public function index()
    {
        $toys = Toy::all();
        return view('toys.index', compact('toys'));
    }

    // Halaman Detail Mainan berdasarkan ID
    public function show($id)
    {
        $toy = Toy::findOrFail($id); // Mencari data berdasarkan ID
        return view('toys.show', compact('toy'));
    }
}