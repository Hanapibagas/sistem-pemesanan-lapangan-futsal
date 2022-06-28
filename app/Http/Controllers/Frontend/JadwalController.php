<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function jadwal()
    {
        return view('frontend.jadwal');
    }

    public function booking()
    {
        return view('frontend.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'costumer_name' => 'required|string',
            'play_date' => 'required|string',
            'field_name' => 'required|string',
            'price' => 'required|string',
            'status' => 'required|string',
        ]);

        Schedule::create([
            "costumer_name" => $request->input('costumer_name'),
            "play_date" => $request->input('play_date'),
            "field_name" => $request->input('field_name'),
            "price" => $request->input('price'),
            "status" => $request->input('status'),
        ]);

        return redirect()->route('show');
    }
}
