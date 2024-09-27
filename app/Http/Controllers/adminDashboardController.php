<?php

namespace App\Http\Controllers;

use App\Charts\DashChart;
use App\Models\Krisan;
use Illuminate\Http\Request;

class adminDashboardController extends Controller
{
    public function index(DashChart $chart)
    {
        $krisan = Krisan::orderBy('created_at', 'desc')->limit(3)->get();
        return view('adminDashhboard.index', ['chart' => $chart->build()])->with('krisan', $krisan);
    }
}