<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PengaduanController extends Controller
{
    public function exportPdf()
    {

        // Tampung data yang ingin Anda kirimkan ke tampilan PDF (jika diperlukan)
        $data = [
            'namaKorban' => 'John Doe',
            'jenisKelamin' => 'Laki-laki',
            'domisiliPelapor' => 'Jakarta',
            'statusPelapor' => 'Pelapor Utama',
            'tanggalMelapor' => '2023-12-21',
            'alasanPengaduan' => 'Kekerasan fisik',
            'identifikasiKebutuhan' => 'Bantuan medis',
            'nomorHP' => '081234567890',
            'memilikiDisabilitas' => 'Ya',
            'jenisKekerasan' => 'Kekerasan verbal',
            // ... (tambahkan data lainnya jika diperlukan)
        ];
        
        
        // Buat PDF dengan view yang diinginkan (ganti 'nama_file_view' dengan nama file view Anda)
        $pdf = PDF::loadView('pengaduan.index', $data);
        
        $pdf->setPaper('a4', 'portrait'); // 'a4' untuk ukuran A4, 'portrait' atau 'landscape' untuk orientasi

        // Unduh file PDF
        return $pdf->download('laporan.pdf');
    }
}
