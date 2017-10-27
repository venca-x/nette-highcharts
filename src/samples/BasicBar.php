<?php
declare(strict_types=1);

namespace VencaX\Highchart\samples;

use VencaX;

class BasicBar
{
	public static function sample()
	{
		$highcharts = new VencaX\Highchart\Highchart();
		$highcharts->chart->type = 'bar'; //sloupcovy graf
		$highcharts->title->text = 'Title Text meho grafu';
		$highcharts->subtitle->text = 'Popis';

		$highcharts->xAxis->title->text = 'Roky';

		$highcharts->yAxis->title->text = 'Počet';
		$highcharts->xAxis->min = 0;

		$highcharts->tooltip->valueSuffix = ' millions';
		$highcharts->credits->enabled = true;

		$highcharts->series = [
			['name' => 'Tokyo', 'data' => [10]],
			['name' => 'New York', 'data' => [20]],
			['name' => 'London', 'data' => [30]],
			['name' => 'Berlin', 'data' => [40]],
		];

		return $highcharts->getData();
	}
}
