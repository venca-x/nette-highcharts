<?php
declare(strict_types=1);

namespace VencaX\Highchart\samples;

use VencaX;

class BasicLine
{
	public static function sample()
	{
		$highcharts = new VencaX\Highchart\Highchart();

		$highcharts->title->text = 'Solar Employment Growth by Sector, 2010-2016';
		$highcharts->subtitle->text = 'Source: thesolarfoundation.com';

		$highcharts->yAxis->title->text = 'Number of Employees';

		$highcharts->legend->layout = 'vertical';
		$highcharts->legend->align = 'right';
		$highcharts->legend->verticalAlign = 'middle';
		$highcharts->legend->borderWidth = 0;


		$highcharts->plotOptions->series->label->connectorAllowed = false;
		$highcharts->plotOptions->series->pointStart = 2010;

		$highcharts->series = [
			['name' => 'Installation', 'data' => [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]],
			['name' => 'Manufacturing', 'data' => [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]],
			['name' => 'Sales & Distribution', 'data' => [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]],
			['name' => 'Project Development', 'data' => [null, null, 7988, 12169, 15112, 22452, 34400, 34227]],
			['name' => 'Other', 'data' => [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]],
		];

		$highcharts->responsive->rules = [
			['condition' => ['maxWidth' => 500]],
			['chartOptions' => ['legend' => ['layout' => 'horizontal', 'align' => 'center', 'verticalAlign' => 'bottom']]],
		];

		return $highcharts->getData();
	}
}
