<?php
declare(strict_types=1);

namespace VencaX\Highchart\samples;

use VencaX;

class TempChart
{
	public static function sample()
	{
		$averages = [];
		$ranges = [];

		$time = time();
		for ($i = 0; $i < 30; $i++) {
			//$time = ($time + ( 86400 * $i ) ) * 1000;
			$time = (strtotime('29.11.2013') + (86400 * $i)) * 1000;
			$averages[] = [$time, $i];
			$ranges[] = [$time, (-10 + $i), ($i + 10)];
		}

		$highcharts = new VencaX\Highchart\Highchart();

		$highcharts->title->text = 'July temperatures';

		$highcharts->xAxis->type = 'datetime';

		$highcharts->yAxis->title->text = null;

		$highcharts->tooltip->crosshairs = true;
		$highcharts->tooltip->shared = true;
		$highcharts->tooltip->valueSuffix = '°C';

		$highcharts->series = [
			['name' => 'Temperature', 'data' => $averages, 'zIndex' => 1, 'marker' => ['fillColor' => 'white', 'lineWidth' => 2]],
			['name' => 'Range', 'data' => $ranges, 'type' => 'arearange', 'lineWidth' => 0, 'linkedTo' => ':previous', 'fillOpacity' => 0.3, 'zIndex' => 0, 'marker' => ['enabled' => false]],
		];

		return $highcharts->getData();
	}
}
