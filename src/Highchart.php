<?php

namespace vencax\Highchart;

use Exception;

/**
 * Highchart generator
 * @author vEnCa-X <venca-x@seznam.cz>
 * @version 0.1
 */
class Highchart extends HighchartData
{

    public function __construct( $sampleHighchartArray = NULL )
    {
        if ( $sampleHighchartArray != NULL )
        {
            $this->data = $sampleHighchartArray;
        }
    }

    public function render( $renderToID )
    {
        //convert Highcharts to array
        $highcahrtArray = $this->recurtiveItemToArray( $this->data );

        //return JS for highchart
        return "$('#{$renderToID}').highcharts(" . json_encode( $highcahrtArray ) . ");";
    }

    protected function recurtiveItemToArray( $itemHighchartDatas )
    {
        $returnArray = array();

        foreach ( $itemHighchartDatas as $key => $itemHighchartData )
        {

            if ( is_object( $itemHighchartData ) && ( get_class( $itemHighchartData ) == "vencax\Highchart\HighchartData" ) )
            {
                //is object HighchartData
                $returnArray[$key] = $this->recurtiveItemToArray( $itemHighchartData->data );
            }
            else if ( is_array( $itemHighchartData ) )
            {
                $returnArray[$key] = $this->recurtiveItemToArray( $itemHighchartData );
            }
            else if ( is_string( $itemHighchartData ) || is_numeric( $itemHighchartData ) || is_bool( $itemHighchartData ) || is_null( $itemHighchartData ) )
            {
                //is string
                $returnArray[$key] = $itemHighchartData;
            }
            else
            {
                throw new Exception( "Key {$key} isn't object type HighchartData or string" );
            }
        }

        return $returnArray;
    }

}
