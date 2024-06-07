<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\SensorData;

class SensorDataController
{
    public function store(Request $request)
    {
        $request->validate([
            'waterflow_rate' => 'required|numeric',
        ]);

        $sensorData = new SensorData();
        $sensorData->waterflow_rate = $request->input('waterflow_rate');
        $sensorData->save();

        return response()->json(['message' => 'Data berhasil disimpan'], 201);
    }
}
