<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;
use App\Models\Krisan;
use phpDocumentor\Reflection\PseudoTypes\True_;

class DashChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build()
    {
        $krisan1 = Krisan::all('status')->where('status','Belum ditanggapi')->count();
        $krisan2 = Krisan::all('status')->where('status','Sedang diproses')->count();
        $krisan3 = Krisan::all('status')->where('status','Telah Diproses')->count();
        $krisan4 = Krisan::all('status')->count();

        return $this->chart->barChart()
            ->setTitle('Indikator Status Ruang Diskusi')
            ->setSubtitle('Total Diskusi:  '.$krisan4 )
            ->setFontFamily('DM Sans')
            ->setToolbar(1)
            ->setStroke(1)
            ->setHorizontal(1)
            ->addData('Ruang Diskusi', [$krisan1, $krisan2, $krisan3])
            ->setWidth(800)
            ->setColors(['#8ecae6'])
            ->setHeight(300)
            ->setFontFamily('DM Sans')
            ->setXAxis(['Belum ditanggapi', 'Sedang diproses', 'Telah Diproses']);
    }
}
