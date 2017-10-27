<?php

namespace VencaX\Highchart\samples;

use VencaX;

class PieChart
{

    public static function sample()
    {
        $highcharts = new VencaX\Highchart\Highchart();
        
        $highcharts->title->text = "Pie graf";
        $highcharts->subtitle->text = "Subtitle pie graf";

        $highcharts->tooltip->pointFormat = '{series.name}: <b>{point.percentage:.1f}%</b>';

        $highcharts->plotOptions->pie->allowPointSelect = true;
        $highcharts->plotOptions->pie->cursor = 'pointer';
        $highcharts->plotOptions->pie->dataLabels->enabled = true;
        $highcharts->plotOptions->pie->dataLabels->color = '#000000';
        $highcharts->plotOptions->pie->dataLabels->connectorColor = '#000000';
        $highcharts->plotOptions->pie->dataLabels->format = '<b>{point.name}</b>: {point.percentage:.1f} %';

        $highcharts->series = array( array( "type" => "pie", "name" => "Browser share", "data" => array(
                    array( "Firefox", 45.0 ),
                    array( "IE", 26.8 ),
                    array( "name" => "Chrome", "y" => 12.8, "sliced" => true, "selected" => true ),
                    array( "Safari", 8.5 ),
                    array( "Opera", 6.2 ),
                    array( "Others", 0.7 )
                ) ) );

        return $highcharts->getData();
    }

}
