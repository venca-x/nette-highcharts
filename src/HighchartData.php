<?php

namespace vencax\Highchart;

class HighchartData
{

    protected $data = array();
    
    public function setData( $key, $value )
    {
        $this->data[$key] = $value;
    }
    
    public function __set( $key, $value )
    {
        $this->data[$key] = $value;
    }

    public function __get( $key )
    {
        if ( array_key_exists( $key, $this->data ) )
        {
            //key exist
            return $this->data[$key];
        }
        else
        {
            //key isn't exist
            return $this->data[$key] = new HighchartData();
        }
    }
    
    public function getData()
    {
        return $this->data;
    }

}
