<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraan = Kendaraan::all();
        return view('admin.kendaraan.kendaraan', compact('kendaraan'));
    }

    public function store(Request $request)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor' => 'required',
        ]);

        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->update([
            'nomor' => $request->nomor,
        ]);

        return redirect('kendaraan');
    }

    public function destroy($id)
    {
        $kendaraan = Kendaraan::findOrFail($id);
        $kendaraan->delete();

        return redirect('kendaraan');
    }
}
