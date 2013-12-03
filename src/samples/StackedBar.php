<?php

namespace vencax\Highchart\samples;

class StackedBar
{

    public static function sample()
    {
        $highcharts = new \vencax\Highchart\Highchart();
        
        $highcharts->chart->type = "bar"; //sloupcovy graf
        $highcharts->title->text = "Bar tipliga";
        $highcharts->subtitle->text = "Popis";

        $highcharts->xAxis->categories = array( 'Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas' );

        $highcharts->yAxis->title->text = "Počet";
        $highcharts->xAxis->min = 0;

        $highcharts->tooltip->valueSuffix = ' millions';

        $highcharts->legend->backgroundColor = '#FFFFFF';
        $highcharts->legend->reversed = true;     

        $highcharts->plotOptions->series->stacking = 'normal'; //columns on each other

        $highcharts->series = array(
            array( "name" => "Výhra domácích", "data" => array( 5, 3, 4, 7, 2 ) ),
            array( "name" => "Remíza", "data" => array( 2, 2, 3, 2, 1 ) ),
            array( "name" => "Výhra hosté", "data" => array( 3, 4, 4, 2, 5 ) ),
        );        
        
        return $highcharts->getData();
    }

}
