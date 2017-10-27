<?php

namespace VencaX\Highchart\samples;

use VencaX;

class TempChart
{

    public static function sample()
    {
        
        $aTemp = array();
        $aTempAverage = array();

        $time = Time();
        for ( $i = 0; $i < 30; $i++ )
        {
            //$time = ($time + ( 86400 * $i ) ) * 1000;
            $time = (strtotime( "29.11.2013" ) + ( 86400 * $i ) ) * 1000;
            $aTemp[] = array( $time, $i );
            $aTempAverage[] = array( $time, (-10 + $i), ($i + 10) );
        }        
        
        $highcharts = new VencaX\Highchart\Highchart();
        
        $highcharts->title->text = "Graf teplot";
        $highcharts->subtitle->text = "Popis";

        $highcharts->xAxis->type = "datetime";

        $highcharts->yAxis->title->text = null;

        $highcharts->tooltip->crosshairs = true;
        $highcharts->tooltip->shared = true;
        $highcharts->tooltip->valueSuffix = "°C";

        $highcharts->series = array(
            array( "name" => "průměrná teplota venku", "color" => 'red', "marker" => array( "symbol" => "square", "lineWidth" => 2 ), "zIndex" => 1, "data" => $aTemp ),
            array( "name" => "Rozsah", "type" => "arearange", "lineWidth" => 0, "linkedTo" => ":previous", "fillOpacity" => 0.3, "zIndex" => 0, "data" => $aTempAverage ),
        );   
        
        return $highcharts->getData();
    }

}
