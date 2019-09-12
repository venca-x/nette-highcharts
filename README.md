Nette-highcharts
===============
[![Build Status](https://travis-ci.org/venca-x/nette-highcharts.svg)](https://travis-ci.org/venca-x/nette-highcharts)
[![Coverage Status](https://coveralls.io/repos/github/venca-x/nette-highcharts/badge.svg?branch=master)](https://coveralls.io/github/venca-x/nette-highcharts?branch=master) 
[![Latest Stable Version](https://poser.pugx.org/venca-x/nette-highcharts/v/stable)](https://packagist.org/packages/venca-x/nette-highcharts)
[![Latest Unstable Version](https://poser.pugx.org/venca-x/nette-highcharts/v/unstable)](https://packagist.org/packages/venca-x/nette-highcharts) 
[![Total Downloads](https://poser.pugx.org/venca-x/nette-highcharts/downloads)](https://packagist.org/packages/venca-x/nette-highcharts)
[![License](https://poser.pugx.org/venca-x/nette-highcharts/license)](https://packagist.org/packages/venca-x/nette-highcharts)

Simple highcharts graph generator for Nette


| Version     | PHP&nbsp;&nbsp;&nbsp;     | Recommended&nbsp;Nette |
| ---         | ---                       | ---               |
| dev-master  | \>= 7.1                   | Nette 3.0         |
| 1.0.x       | \>= 5.5                   | Nette 2.4, 2.3    |

Installation
------------
install with composer:
```
composer require venca-x/nette-highcharts:dev-master
```

For Nette 3.0 use (minimum version php 7.1):
```
composer require venca-x/nette-highcharts:dev-master
```

For below Nette 3.0 use:
```
composer require venca-x/nette-highcharts:dev-master#v1.0.0
```

Usage Sample
-------------
Presenter
```php
////////////////////////////////////////////////////////////////////////     
$basicColumn = new VencaX\Highchart\samples\BasicColumn();        
$highcharts = new VencaX\Highchart\Highchart( $basicColumn->sample() );
$this->template->basicColumn = $highcharts->render( "basic-column" );
////////////////////////////////////////////////////////////////////////  

////////////////////////////////////////////////////////////////////////
$basicBar = new VencaX\Highchart\samples\BasicBar();
$highcharts = new VencaX\Highchart\Highchart( $basicBar->sample() );
$this->template->basicBar = $highcharts->render( "basic-bar" );
////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////
$stackedBar = new VencaX\Highchart\samples\StackedBar();
$highcharts = new VencaX\Highchart\Highchart( $stackedBar->sample() );
$this->template->stackedBar = $highcharts->render( "stacked-bar" );
////////////////////////////////////////////////////////////////////////

////////////////////////////////////////////////////////////////////////
$tempChart = new VencaX\Highchart\samples\TempChart();
$highcharts = new VencaX\Highchart\Highchart( $tempChart->sample() );
$this->template->tempChart = $highcharts->render( "temp-chart" );
////////////////////////////////////////////////////////////////////////        

////////////////////////////////////////////////////////////////////////
$trafficChart = new VencaX\Highchart\samples\TrafficChart();
$highcharts = new VencaX\Highchart\Highchart( $trafficChart->sample() );
$this->template->trafficChart = $highcharts->render( "traffic-chart" );
////////////////////////////////////////////////////////////////////////          

////////////////////////////////////////////////////////////////////////
$basicLine = new VencaX\Highchart\samples\BasicLine();
$highcharts = new VencaX\Highchart\Highchart( $basicLine->sample() );
$this->template->basicLine = $highcharts->render( "basic-line" );
////////////////////////////////////////////////////////////////////////          

////////////////////////////////////////////////////////////////////////
$pieChart = new VencaX\Highchart\samples\PieChart();
$highcharts = new VencaX\Highchart\Highchart( $pieChart->sample() );
$this->template->pieChart = $highcharts->render( "pie-chart" );
////////////////////////////////////////////////////////////////////////  

////////////////////////////////////////////////////////////////////////
$columnRotatedLabelsChart = new VencaX\Highchart\samples\ColumnRotatedLabels();
$highcharts = new VencaX\Highchart\Highchart( $columnRotatedLabelsChart->sample() );
$this->template->columnRotatedLabelsChart = $highcharts->render( "column-rotated-labels" );
////////////////////////////////////////////////////////////////////////  		
```
```html
{block content}  
    basic-column<br/>
    <div id="basic-column" style="min-width: 310px; height: 400px; margin: 0 auto"></div><br/>
    basic-bar<br/>
    <div id="basic-bar" style="min-width: 310px; height: 400px; margin: 0 auto"></div><br/>
    stacked-bar<br/>
    <div id="stacked-bar" style="min-width: 310px; height: 400px; margin: 0 auto"></div><br/>
    temp-chart<br/>
    <div id="temp-chart" style="min-width: 310px; height: 400px; margin: 0 auto"></div><br/>
    traffic-chart<br/>
    <div id="traffic-chart" style="min-width: 310px; height: 400px; margin: 0 auto"></div><br/>
    basic-line<br/>
    <div id="basic-line" style="min-width: 310px; height: 400px; margin: 0 auto"></div><br/>
    pie-chart<br/>
    <div id="pie-chart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>	
    Column Rotated Labels<br/>
    <div id="column-rotated-labels" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
{/block}

{#scripts}
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        $(function () {          
            {$basicColumn|noescape}                  
            {$basicBar|noescape}
            {$stackedBar|noescape}                  
            {$tempChart|noescape}
            {$trafficChart|noescape}
            {$basicLine|noescape}
            {$pieChart|noescape}
            {$columnRotatedLabelsChart|noescape}
        });
    </script>
{/#} 
```
