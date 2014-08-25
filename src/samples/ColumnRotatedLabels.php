<?php

namespace vencax\Highchart\samples;

class ColumnRotatedLabels
{

    public static function sample()
    {
        $highcharts = new \vencax\Highchart\Highchart();
        
        $highcharts->chart->type = "spline"; //kruzitkove zaobleno
        $highcharts->title->text = "Graf normal";
        $highcharts->subtitle->text = "Subtitle graf normal";

        $highcharts->xAxis->categories = array( 'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec' );

        $highcharts->yAxis->title->text = "Temperature";
        $highcharts->yAxis->plotLines = array( array( "value" => 0, "width" => 1, "color" => "#808080" ) );

        $highcharts->tooltip->valueSuffix = "°C";

        $highcharts->legend = array( "layout" => "vertical", "align" => "right", "verticalAlign" => "middle", "borderWidth" => 0 );

        $highcharts->series = array(
            array( "name" => "Tokyo", "data" => array( 7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6 ) ),
            array( "name" => "New York", "data" => array( -0.2, 0.8, 5.7, 11.3, 17.0, 22.0, 24.8, 24.1, 20.1, 14.1, 8.6, 2.5 ) ),
            array( "name" => "Berlin", "data" => array( -0.9, 0.6, 3.5, 8.4, 13.5, 17.0, 18.6, 17.9, 14.3, 9.0, 3.9, 1.0 ) ),
            array( "name" => "London", "data" => array( 3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8 ) ),
        );

        return $highcharts->getData();
    }

}
