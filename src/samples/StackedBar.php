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
		$highcharts->title->text = 'Stacked bar chart';
		$highcharts->subtitle->text = 'Popis';

		$highcharts->xAxis->categories = ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas'];

		$highcharts->yAxis->min = 0;
		$highcharts->yAxis->title->text = 'Total fruit consumption';

		$highcharts->legend->reversed = true;

		$highcharts->plotOptions->series->stacking = 'normal'; //columns on each other

		$highcharts->series = [
			['name' => 'John', 'data' => [5, 3, 4, 7, 2]],
			['name' => 'Jane', 'data' => [2, 2, 3, 2, 1]],
			['name' => 'Joe', 'data' => [3, 4, 4, 2, 5]],
		];

		return $highcharts->getData();
	}
}
