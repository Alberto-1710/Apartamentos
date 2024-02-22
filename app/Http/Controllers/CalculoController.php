<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculoController extends Controller
{
    //

public function calculo($area, $numpiso=null){
    if($numpiso!=null){
        //$preciobase = (1500*0.001*($numpiso-1))+1500;
        $preciobase = 1500;
        $incrementoPorPiso = 0.001;
        $precioFinal = $preciobase * (1 + ($numpiso - 1) * $incrementoPorPiso) * $area;
        return $precioFinal;
    }else{
        $numpiso = 1;
        $preciobase = 1500;
        $precioFinal = $area*$preciobase;
        return $precioFinal;
    }
    
}
}
