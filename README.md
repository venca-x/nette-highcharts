Configuration
-------------
highcharts generator for Nette 2.1


Usage Sample
-------------
Presenter
```php
        ////////////////////////////////////////////////////////////////////////     
        $basicColumn = new \vencax\Highchart\samples\BasicColumn();        
        $highcharts = new \vencax\Highchart\Highchart( $basicColumn->sample() );
        $this->template->basicColumn = $highcharts->render( "basic-column" );
        ////////////////////////////////////////////////////////////////////////  

        ////////////////////////////////////////////////////////////////////////
        $basicBar = new \vencax\Highchart\samples\BasicBar();
        $highcharts = new \vencax\Highchart\Highchart( $basicBar->sample() );
        $this->template->basicBar = $highcharts->render( "basic-bar" );
        ////////////////////////////////////////////////////////////////////////

        ////////////////////////////////////////////////////////////////////////
        $stackedBar = new \vencax\Highchart\samples\StackedBar();
        $highcharts = new \vencax\Highchart\Highchart( $stackedBar->sample() );
        $this->template->stackedBar = $highcharts->render( "stacked-bar" );
        ////////////////////////////////////////////////////////////////////////

        ////////////////////////////////////////////////////////////////////////
        $tempChart = new \vencax\Highchart\samples\TempChart();
        $highcharts = new \vencax\Highchart\Highchart( $tempChart->sample() );
        $this->template->tempChart = $highcharts->render( "temp-chart" );
        ////////////////////////////////////////////////////////////////////////        

        ////////////////////////////////////////////////////////////////////////
        $trafficChart = new \vencax\Highchart\samples\TrafficChart();
        $highcharts = new \vencax\Highchart\Highchart( $trafficChart->sample() );
        $this->template->trafficChart = $highcharts->render( "traffic-chart" );
        ////////////////////////////////////////////////////////////////////////          

        ////////////////////////////////////////////////////////////////////////
        $basicLine = new \vencax\Highchart\samples\BasicLine();
        $highcharts = new \vencax\Highchart\Highchart( $basicLine->sample() );
        $this->template->basicLine = $highcharts->render( "basic-line" );
        ////////////////////////////////////////////////////////////////////////          

        ////////////////////////////////////////////////////////////////////////
        $pieChart = new \vencax\Highchart\samples\PieChart();
        $highcharts = new \vencax\Highchart\Highchart( $pieChart->sample() );
        $this->template->pieChart = $highcharts->render( "pie-chart" );
        ////////////////////////////////////////////////////////////////////////  
```

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
  {/block}

  {#scripts}
      <script src="{$basePath}/js/highcharts.js"></script>
      <script src="{$basePath}/js/highcharts-more.js"></script>
      <script type="text/javascript">
          $(function () {
              
              {!$basicColumn}
                      
              {!$basicBar}
                      
              {!$stackedBar}
                                                      
              {!$tempChart}
              
              {!$trafficChart}
                      
              {!$basicLine}
                      
              {!$pieChart}
          });
      </script>
  {/#} 