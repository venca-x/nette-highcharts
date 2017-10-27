<?php
declare(strict_types=1);

namespace VencaX\Highchart;


class HighchartData
{
	protected $data = [];


	public function setData($key, $value)
	{
		$this->data[$key] = $value;
	}


	public function __set($key, $value)
	{
		$this->data[$key] = $value;
	}


	public function __get($key)
	{
		if (array_key_exists($key, $this->data)) {
			//key exist
			return $this->data[$key];
		} else {
			//key isn't exist
			return $this->data[$key] = new self();
		}
	}


	public function getData()
	{
		return $this->data;
	}
}
