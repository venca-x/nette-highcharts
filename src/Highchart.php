<?php
declare(strict_types=1);

namespace VencaX\Highchart;

use Exception;

/**
 * Highchart generator
 * @author vEnCa-X <venca-x@seznam.cz>
 */
class Highchart extends HighchartData
{
	public function __construct($sampleHighchartArray = null)
	{
		if ($sampleHighchartArray != null) {
			$this->data = $sampleHighchartArray;
		}
	}


	public function render($renderToID)
	{
		//convert Highcharts to array
		$highcahrtArray = $this->recurtiveItemToArray($this->data);

		//return JS for highchart
		return "Highcharts.chart('{$renderToID}', " . json_encode($highcahrtArray) . ');';
	}


	protected function recurtiveItemToArray($itemHighchartDatas)
	{
		$returnArray = [];

		foreach ($itemHighchartDatas as $key => $itemHighchartData) {
			if (is_object($itemHighchartData) && (get_class($itemHighchartData) == "VencaX\Highchart\HighchartData")) {
				//is object HighchartData
				$returnArray[$key] = $this->recurtiveItemToArray($itemHighchartData->data);
			} elseif (is_array($itemHighchartData)) {
				$returnArray[$key] = $this->recurtiveItemToArray($itemHighchartData);
			} elseif (is_string($itemHighchartData) || is_numeric($itemHighchartData) || is_bool($itemHighchartData) || $itemHighchartData === null) {
				//is string
				$returnArray[$key] = $itemHighchartData;
			} else {
				throw new Exception("Key {$key} isn't object type HighchartData or string");
			}
		}

		return $returnArray;
	}
}
