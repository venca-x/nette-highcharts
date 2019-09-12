<?php
declare(strict_types=1);

namespace VencaX\Highchart\samples;

use VencaX;

class PieChart
{
	public static function sample()
	{
		$highcharts = new VencaX\Highchart\Highchart();

		$highcharts->chart->plotBackgroundColor = null;
		$highcharts->chart->plotBorderWidth = null;
		$highcharts->chart->plotShadow = false;
		$highcharts->chart->type = 'pie';

		$highcharts->title->text = 'Browser market shares in January, 2018';
		$highcharts->tooltip->pointFormat = '{series.name}: <b>{point.percentage:.1f}%</b>';

		$highcharts->plotOptions->pie->allowPointSelect = true;
		$highcharts->plotOptions->pie->cursor = 'pointer';
		$highcharts->plotOptions->pie->dataLabels->enabled = true;
		$highcharts->plotOptions->pie->dataLabels->format = '<b>{point.name}</b>: {point.percentage:.1f} %';

		$highcharts->series = ['name' => 'Brands', 'colorByPoint' => true, 'data' => [
			['name' => 'Chrome', 'y' => 61.41, 'sliced' => true, 'selected' => true],
			['name' => 'Internet Explorer', 'y' => 11.84],
			['name' => 'Firefox', 'y' => 10.85],
			['name' => 'Edge', 'y' => 4.67],
			['name' => 'Safari', 'y' => 4.18],
			['name' => 'Sogou Explorer', 'y' => 1.64],
			['name' => 'Opera', 'y' => 1.6],
			['name' => 'QQ', 'y' => 1.2],
			['name' => 'Other', 'y' => 2.61],
		]];

		return $highcharts->getData();
	}
}
