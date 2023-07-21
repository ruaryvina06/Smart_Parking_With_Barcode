<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tempat;

class TempatApi extends Controller
{
    public function terisi(Request $request)
    {
        $request->validate([
            'kode' => 'required'
        ]);

        $tempat = Tempat::where('kode_tempat', $request->kode);
        $update =  $tempat->update([
            'status' => 'terisi'
        ]);

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

    public function kosong(Request $request)
    {
        $request->validate([
            'kode' => 'required'
        ]);

        $tempat = Tempat::where('kode_tempat', $request->kode);
        $update =  $tempat->update([
            'status' => 'kosong'
        ]);

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
