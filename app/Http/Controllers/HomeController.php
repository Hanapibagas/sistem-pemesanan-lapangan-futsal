<?php

namespace App\Http\Controllers;

use App\Models\Price;
use App\Models\Schedule;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jadwals = Schedule::all();
        return view('home', compact('jadwals'));
    }

    public function create()
    {
        return view('input');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'field_name' => 'required|string',
            'price' => 'required|string',
        ]);

        Price::create([
            "field_name" => $request->input('field_name'),
            "price" => $request->input('price'),
        ]);

        return redirect()->route('home');
    }
}
