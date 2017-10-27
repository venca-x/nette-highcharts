<?php

namespace VencaX\Highchart\samples;

use VencaX;

class BasicColumn
{

    public static function sample()
    {
        $highcharts = new VencaX\Highchart\Highchart();
        $highcharts->chart->type = "column"; //sloupcovy graf
        $highcharts->title->text = "Bar chart-bar-vertically";
        $highcharts->subtitle->text = "Popis";

        $highcharts->xAxis->labels->enable = false;

        $highcharts->yAxis->title->text = "Počet návštěv";
        $highcharts->yAxis->min = 0;

        $highcharts->tooltip->valueSuffix = ' millions';
        $highcharts->tooltip->headerFormat = '<table>';
        $highcharts->tooltip->pointFormat = '<tr><td style="color:{series.color};padding:0">{series.name}: </td><td style="padding:0"><b>{point.y:.1f}</b></td></tr>';
        $highcharts->tooltip->footerFormat = '</table>';
        $highcharts->tooltip->shared = true;
        $highcharts->tooltip->useHTML = true;

        $highcharts->plotOptions->column->pointPadding = 0.2;
        $highcharts->plotOptions->column->borderWidth = 0;

        $highcharts->series = array(
            array( "name" => "Tokyo", "data" => array( 10 ) ),
            array( "name" => "New York", "data" => array( 20 ) ),
            array( "name" => "London", "data" => array( 30 ) ),
            array( "name" => "Berlin", "data" => array( 40 ) ),
        );
 
        return $highcharts->getData();
    }

}
