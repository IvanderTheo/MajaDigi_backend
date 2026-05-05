<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\antrian_pasien;

class AntrianPasienController extends Controller
{
    public function daftarAntrian(Request $request)
    {
        $request->validate([
            'rs_id' => 'required|exists:rumah_sakit,id',
            'service_type' => 'required|string|max:255',
        ]);

        $userId = auth()->id();

        // Cegah user daftar layanan sama di RS sama pada hari yang sama
        $existingQueue = antrian_pasien::where('user_id', $userId)
            ->where('rs_id', $request->rs_id)
            ->where('service_type', $request->service_type)
            ->whereDate('queue_date', today())
            ->first();

        if ($existingQueue) {
            return response()->json([
                'message' => 'Anda sudah memiliki antrian untuk layanan ini hari ini.',
                'data' => $existingQueue
            ], 400);
        }

        // Cari nomor antrian terakhir hari ini berdasarkan RS + layanan
        $lastQueue = antrian_pasien::where('rs_id', $request->rs_id)
            ->where('service_type', $request->service_type)
            ->whereDate('queue_date', today())
            ->max('queue_number');

        $newQueueNumber = $lastQueue ? $lastQueue + 1 : 1;

        // Simpan antrian baru
        $queue = antrian_pasien::create([
            'user_id' => $userId,
            'rs_id' => $request->rs_id,
            'queue_number' => $newQueueNumber,
            'service_type' => $request->service_type,
            'queue_date' => now(),
            'status' => 'waiting',
        ]);

        return response()->json([
            'message' => 'Pendaftaran antrian berhasil.',
            'data' => $queue
        ], 201);
    }
}
