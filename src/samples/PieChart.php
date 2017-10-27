<?php
declare(strict_types=1);

namespace VencaX\Highchart\samples;

use VencaX;

class PieChart
{
	public static function sample()
	{
		$highcharts = new VencaX\Highchart\Highchart();

		$highcharts->title->text = 'Pie graf';
		$highcharts->subtitle->text = 'Subtitle pie graf';

		$highcharts->tooltip->pointFormat = '{series.name}: <b>{point.percentage:.1f}%</b>';

		$highcharts->plotOptions->pie->allowPointSelect = true;
		$highcharts->plotOptions->pie->cursor = 'pointer';
		$highcharts->plotOptions->pie->dataLabels->enabled = true;
		$highcharts->plotOptions->pie->dataLabels->color = '#000000';
		$highcharts->plotOptions->pie->dataLabels->connectorColor = '#000000';
		$highcharts->plotOptions->pie->dataLabels->format = '<b>{point.name}</b>: {point.percentage:.1f} %';

		$highcharts->series = [['type' => 'pie', 'name' => 'Browser share', 'data' => [
					['Firefox', 45.0],
					['IE', 26.8],
					['name' => 'Chrome', 'y' => 12.8, 'sliced' => true, 'selected' => true],
					['Safari', 8.5],
					['Opera', 6.2],
					['Others', 0.7],
				]]];

		return $highcharts->getData();
	}
}
