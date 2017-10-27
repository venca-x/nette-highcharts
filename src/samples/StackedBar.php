<?php
declare(strict_types=1);

namespace VencaX\Highchart\samples;

use VencaX;

class StackedBar
{
	public static function sample()
	{
		$highcharts = new VencaX\Highchart\Highchart();

		$highcharts->chart->type = 'bar'; //sloupcovy graf
		$highcharts->title->text = 'Bar tipliga';
		$highcharts->subtitle->text = 'Popis';

		$highcharts->xAxis->categories = ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas'];

		$highcharts->yAxis->title->text = 'Počet';
		$highcharts->xAxis->min = 0;

		$highcharts->tooltip->valueSuffix = ' millions';

		$highcharts->legend->backgroundColor = '#FFFFFF';
		$highcharts->legend->reversed = true;

		$highcharts->plotOptions->series->stacking = 'normal'; //columns on each other

		$highcharts->series = [
			['name' => 'Výhra domácích', 'data' => [5, 3, 4, 7, 2]],
			['name' => 'Remíza', 'data' => [2, 2, 3, 2, 1]],
			['name' => 'Výhra hosté', 'data' => [3, 4, 4, 2, 5]],
		];

		return $highcharts->getData();
	}
}
