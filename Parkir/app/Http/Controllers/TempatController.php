<?php

namespace App\Http\Controllers;

use App\Models\Tempat;
use Illuminate\Http\Request;

class TempatController extends Controller
{
    public function index()
    {
        $tempat = Tempat::all();
        return view('admin.tempat-parkir.tempat', compact('tempat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_tempat' => 'required',
            'status' => 'required',
        ]);

        Tempat::create([
            'kode_tempat' => $request->kode_tempat,
            'status' => $request->status,
        ]);

        return redirect('tempat');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'kode_tempat' => 'required',
            'status' => 'required',
        ]);

        $tempat = Tempat::findOrFail($id);
        $tempat->update([
            'kode_tempat' => $request->kode_tempat,
            'status' => $request->status,
        ]);

        return redirect('tempat');
    }

    public function destroy($id)
    {
        $tempat = Tempat::findOrFail($id);
        $tempat->delete();

        return redirect('tempat');
    }
}
