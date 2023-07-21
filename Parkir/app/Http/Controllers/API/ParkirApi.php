<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Kendaraan;
use App\Models\Parkir;
use Illuminate\Http\Request;

class ParkirApi extends Controller
{
    public function masuk_keluar(Request $request)
    {
        $request->validate([
            'qrcode' => 'required',
        ]);
        $data = explode("#", $request->qrcode);
        $id = $data[0];
        $keterangan = $data[1];

        date_default_timezone_set('Asia/Jakarta');
        $waktuMasuk = date('Y-m-d H:i:s');
        $waktuKeluar = date('Y-m-d H:i:s');

        if ($keterangan == 'masuk') {
            $kendaraan = Kendaraan::find($id);
            $input = Parkir::create([
                'id_user' => $kendaraan->userFK->id,
                'plat_nomor' => $kendaraan->nomor,
                'waktu_masuk' => $waktuMasuk,
            ]);
        } else if ($keterangan == 'keluar') {
            $parkir = Parkir::find($id);

            //======== Awal Rumus Biaya ========
            $awal  = strtotime($parkir->waktu_masuk);
            $akhir = strtotime($waktuKeluar);
            $diff  = $akhir - $awal;
            $jam   = floor($diff / (60 * 60));
            $biaya = ($jam * 2000) + 2000;
            if ($biaya <= 0) $biaya = 0;
            //======== Akhir Rumus Biaya ========

            $update = $parkir->update([
                'waktu_keluar' => $waktuKeluar,
                'biaya' => $biaya,
            ]);
        }

        if ($input || $update) {
            return response([
                'message' => 'success'
            ], 201);
        } else {
            return response([
                'message' => 'failed'
            ], 401);
        }
    }

    public function store(Request $request)
    {
        $request->validate([
            'qrcode' => 'required',
        ]);
        $data = explode("#", $request->qrcode);
        $id = $data[0];
        $keterangan = $data[1];

        date_default_timezone_set('Asia/Jakarta');
        $waktuMasuk = date('Y-m-d H:i:s');
        $kendaraan = Kendaraan::find($id);

        if ($keterangan == 'masuk') {
            $input = Parkir::create([
                'id_user' => $kendaraan->userFK->id,
                'plat_nomor' => $kendaraan->nomor,
                'waktu_masuk' => $waktuMasuk,
            ]);
        }

        if ($input) {
            return response([
                'message' => 'success'
            ], 201);
        } else {
            return response([
                'message' => 'failed'
            ], 401);
        }
    }

    public function update(Request $request)
    {
        $request->validate([
            'qrcode' => 'required',
        ]);

        $data = explode("#", $request->qrcode);
        $id = $data[0];
        $keterangan = $data[1];

        date_default_timezone_set('Asia/Jakarta');
        $waktuKeluar = date('Y-m-d H:i:s');

        if ($keterangan == 'keluar') {
            $parkir = Parkir::find($id);

            //======== Awal Rumus Biaya ========
            $awal  = strtotime($parkir->waktu_masuk);
            $akhir = strtotime($waktuKeluar);
            $diff  = $akhir - $awal;
            $jam   = floor($diff / (60 * 60));
            $biaya = ($jam * 2000) + 2000;
            if ($biaya <= 0) $biaya = 0;
            //======== Akhir Rumus Biaya ========

            $update = $parkir->update([
                'waktu_keluar' => $waktuKeluar,
                'biaya' => $biaya,
            ]);
        }

        if ($update) {
            return response([
                'message' => 'success'
            ], 201);
        } else {
            return response([
                'message' => 'failed'
            ], 401);
        }
    }
}
