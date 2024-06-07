<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\SensorData;

class DashboardController extends Controller
{
    public function index()
    {
        $totalDebitAir = SensorData::sum('waterflow_rate');

        $jumlahPemakaian = floor($totalDebitAir / 600);
        $hargaSatuanPDAM = 250000;
        $totalTagihan = ($totalDebitAir / 1000) * $hargaSatuanPDAM;

        $formattedTagihan = $this->formatRupiah($totalTagihan);

        return view('pages.dashboard', compact('totalDebitAir', 'jumlahPemakaian', 'formattedTagihan'));
    }

    private function formatRupiah($number)
    {
        return 'Rp ' . number_format($number, 2, ',', '.');
    }
}
