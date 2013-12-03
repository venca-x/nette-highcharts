<?php

namespace vencax\Highchart\samples;

class BasicBar
{

    public static function sample()
    {
        $highcharts = new \vencax\Highchart\Highchart();
        $highcharts->chart->type = "bar"; //sloupcovy graf
        $highcharts->title->text = "Title Text meho grafu";
        $highcharts->subtitle->text = "Popis";

        $highcharts->xAxis->title->text = "Roky";

        $highcharts->yAxis->title->text = "Počet";
        $highcharts->xAxis->min = 0;

        $highcharts->tooltip->valueSuffix = ' millions';
        $highcharts->credits->enabled = true;

        $highcharts->series = array(
            array( "name" => "Tokyo", "data" => array( 10 ) ),
            array( "name" => "New York", "data" => array( 20 ) ),
            array( "name" => "London", "data" => array( 30 ) ),
            array( "name" => "Berlin", "data" => array( 40 ) ),
        );        

        return $highcharts->getData();
    }

}
