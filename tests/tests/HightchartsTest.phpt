<?php

declare(strict_types=1);

namespace Test;

use Tester;
use Tester\Assert;
use VencaX;

require __DIR__ . '/../bootstrap.php';

class HightchartsTest extends Tester\TestCase
{
	/*
	public function testOutputString()
	{
		$highcharts = new VencaX\Highchart\Highchart( $this->generateBasicColumnChart() );
		$renderedGraph = $highcharts->render( "basic-column" );

		Assert::contains('Highcharts.chart(\'basic-column\', {', $renderedGraph);
		Assert::contains('\'basic-column\'', $renderedGraph);
		Assert::contains('"type":"column"}', $renderedGraph);
		Assert::contains('"title":{"text":"Bar chart-bar-vertically"}', $renderedGraph);
		Assert::contains('"subtitle":{"text":"Popis"}', $renderedGraph);
		Assert::contains('{"name":"Tokyo","data":[10]}', $renderedGraph);
		Assert::contains('{"name":"New York","data":[20]}', $renderedGraph);
		Assert::contains('{"name":"London","data":[30]}', $renderedGraph);
		Assert::contains('{"name":"Berlin","data":[40]}', $renderedGraph);
	}*/

	public function testOutputChart()
	{
		//$highcharts = new VencaX\Highchart\Highchart( VencaX\Highchart\samples\BasicBar::sample() );
		//$highcharts = new VencaX\Highchart\Highchart( VencaX\Highchart\samples\BasicColumn::sample() );
		//$highcharts = new VencaX\Highchart\Highchart( VencaX\Highchart\samples\BasicLine::sample() );
		//$highcharts = new VencaX\Highchart\Highchart( VencaX\Highchart\samples\PieChart::sample() );
		//$highcharts = new VencaX\Highchart\Highchart( VencaX\Highchart\samples\StackedBar::sample() );
		//$highcharts = new VencaX\Highchart\Highchart( VencaX\Highchart\samples\TempChart::sample() );
		$highcharts = new VencaX\Highchart\Highchart(VencaX\Highchart\samples\TrafficChart::sample());
		$renderedGraph = $highcharts->render('xxx');

		Assert::contains('Highcharts.chart(\'xxx\', x', $renderedGraph);
	}


	private function generateBasicColumnChart()
	{
		$highcharts = new VencaX\Highchart\Highchart();
		$highcharts->chart->type = 'column'; //sloupcovy graf
		$highcharts->title->text = 'Bar chart-bar-vertically';
		$highcharts->subtitle->text = 'Popis';

		$highcharts->xAxis->labels->enable = false;

		$highcharts->yAxis->title->text = 'Počet návštěv';
		$highcharts->yAxis->min = 0;

		$highcharts->tooltip->valueSuffix = ' millions';
		$highcharts->tooltip->headerFormat = '<table>';
		$highcharts->tooltip->pointFormat = '<tr><td style="color:{series.color};padding:0">{series.name}: </td><td style="padding:0"><b>{point.y:.1f}</b></td></tr>';
		$highcharts->tooltip->footerFormat = '</table>';
		$highcharts->tooltip->shared = true;
		$highcharts->tooltip->useHTML = true;

		$highcharts->plotOptions->column->pointPadding = 0.2;
		$highcharts->plotOptions->column->borderWidth = 0;

		$highcharts->series = [
			['name' => 'Tokyo', 'data' => [10]],
			['name' => 'New York', 'data' => [20]],
			['name' => 'London', 'data' => [30]],
			['name' => 'Berlin', 'data' => [40]],
		];

		return $highcharts->getData();
	}
}

$test = new HightchartsTest();
$test->run();
