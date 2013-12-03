<?php

namespace vencax\Highchart\samples;

class TrafficChart
{

    public static function sample()
    {
        $highcharts = new \vencax\Highchart\Highchart();
        
        $highcharts->title->text = "Graf návštěvnosti a zobrazení stránek";
        $highcharts->subtitle->text = "Za posledních 30 dní";

        $highcharts->xAxis->categories = array( "26", "27", "28", "29", "30", "31", "1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24" );
        $highcharts->xAxis->gridLineColor = "#EEEEEE";
        $highcharts->xAxis->tickWidth = 0; //presah u cisla
        $highcharts->xAxis->gridLineWidth = 1; //sirka linky

        $highcharts->yAxis->title->text = "Počet";
        $highcharts->yAxis->min = 0;
        $highcharts->yAxis->gridLineColor = "#EEEEEE";
        $highcharts->yAxis->tickInterval = 100;

        $highcharts->tooltip->crosshairs = true;
        $highcharts->tooltip->shared = true;

        $highcharts->tooltip->crosshairs = true;
        $highcharts->tooltip->shared = true;
        $highcharts->tooltip->valueSuffix = "°C";

        $highcharts->series = array(
            array( "name" => "Zobrazení", "marker" => array( "symbol" => "square" ), "dashStyle" => "ShortDot", "color" => '#AAAAAA', "data" => array( 0, 0, 174, 302, 420, 23, 122, 19, 260, 73, 106, 6, 59, 63, 8, 4, 39, 29, 265, 92, 0, 204, 2, 2, 129, 60, 0, 20, 383, 154 ) ),
            array( "name" => "Návštěvy", "marker" => array( "symbol" => "diamond" ), "color" => '#a60000', "data" => array( 0, 0, 5, 9, 8, 3, 5, 1, 13, 3, 2, 2, 5, 2, 2, 2, 4, 2, 4, 3, 0, 8, 1, 2, 5, 3, 0, 4, 10, 5 ) ),
        );
        
        return $highcharts->getData();
    }

}
