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
		$highcharts->title->text = 'Historic World Population by Region';
		$highcharts->subtitle->text = 'Source: <a href="https://en.wikipedia.org/wiki/World_population">Wikipedia.org</a>';

		$highcharts->xAxis->categories = ['Africa', 'America', 'Asia', 'Europe', 'Oceania'];
		$highcharts->xAxis->title->text = null;

		$highcharts->yAxis->min = 0;
		$highcharts->yAxis->title->text = 'Počet';
		$highcharts->yAxis->title->align = 'high';
		$highcharts->yAxis->labels->overflow = 'justify';

		$highcharts->tooltip->valueSuffix = ' millions';

		$highcharts->plotOptions->bar->dataLabels->enabled = true;

		$highcharts->legend->layout = 'vertical';
		$highcharts->legend->align = 'right';
		$highcharts->legend->verticalAlign = 'top';
		$highcharts->legend->x = -40;
		$highcharts->legend->y = 80;
		$highcharts->legend->floating = true;
		$highcharts->legend->borderWidth = 1;
		$highcharts->legend->backgroundColor = '#FFFFFF';
		$highcharts->legend->shadow = true;

		$highcharts->credits->enabled = false;

		$highcharts->series = [
			['name' => 'Year 1800', 'data' => [107, 31, 635, 203, 2]],
			['name' => 'Year 1900', 'data' => [133, 156, 947, 408, 6]],
			['name' => 'Year 2000', 'data' => [814, 841, 3714, 727, 31]],
			['name' => 'Year 2016', 'data' => [1216, 1001, 4436, 738, 40]],
		];

		return $highcharts->getData();
	}
}
