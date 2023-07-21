<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Parkir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{

    public function index()
    {
        $vehicle = Kendaraan::where('id_user', Auth::user()->id)->get();

        return view('landing.vehicle.vehicle', compact('vehicle'));
    }

    public function pembayaran()
    {
        $pembayaran = Parkir::where('id_user', Auth::user()->id)->get();

        return view('landing.pembayaran', compact('pembayaran'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'platnomor' => 'required'
        ]);

        Kendaraan::create([
            'id_user' => Auth::user()->id,
            'nomor' => $request->platnomor,
        ]);

        return redirect('vehicle');
    }
}
