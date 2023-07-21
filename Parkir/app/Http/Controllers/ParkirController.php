<?php

namespace App\Http\Controllers;

use App\Models\Parkir;
use Illuminate\Http\Request;

class ParkirController extends Controller
{

    public function index()
    {
        $parkir = Parkir::latest()->get();

        return view('admin.parkir.parkir', compact('parkir'));
    }

    public function bayar()
    {
        $parkir = Parkir::whereNotNull('waktu_keluar')
            ->whereNotNull('biaya')
            ->where('status', 'belum bayar')
            ->get();
        if ($parkir->isEmpty()) {
            return response(['message' => 'kosong'], 200);
        } else {
            // dd($parkir);
            $data = [
                'message' => 'ada',
                'id' => $parkir[0]->id,
                'nama' => $parkir[0]->userFK->name,
                'plat_nomor' => $parkir[0]->plat_nomor,
                'waktu_masuk' => $parkir[0]->waktu_masuk,
                'waktu_keluar' => $parkir[0]->waktu_keluar,
                'biaya' => $parkir[0]->biaya,
            ];
            return response($data, 200);
        }
    }
    public function konfirmasi(Request $request)
    {
        $id = $request->id;
        $parkir = Parkir::findOrFail($id);

        $parkir->update([
            'status' => 'sudah bayar'
        ]);

        return response(['message' => 'sukses'], 200);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'waktu_keluar' => 'required',
        ]);

        $parkir = Parkir::findOrFail($id);

        //======== Awal Rumus Biaya ========
        $awal  = strtotime($parkir->waktu_masuk);
        $akhir = strtotime($request->waktu_keluar);
        $diff  = $akhir - $awal;
        $jam   = floor($diff / (60 * 60));
        $biaya = ($jam * 2000) + 2000;
        if ($biaya <= 0) $biaya = 0;
        //======== Akhir Rumus Biaya ========

        $parkir->update([
            'waktu_keluar' => $request->waktu_keluar,
            'biaya' => $biaya,
        ]);

        return redirect('parkir');
    }

    public function destroy($id)
    {
        $parkir = Parkir::findOrFail($id);
        $parkir->delete();

        return redirect('parkir');
    }
}
