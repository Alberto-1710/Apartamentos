<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Duenio;
use App\Models\Propiedad;

class CalculoController extends Controller
{
    //

public function calculo($area, $numpiso=null){
    $preciobase = 1500;
    if($numpiso!=null){
        if($numpiso<=12){
            $aumento = 1.001; //0.1% + 1
            $preciobase = 1500 * pow( $aumento, ($numpiso-1));
            $precioFinal = $area * $preciobase;
            return view('calcular', compact('area', 'numpiso','precioFinal'));
        }else{
            return '{ERROR}: *el edificio solo cuenta con 12 niveles*';
        }        
    }else{
        $preciobase = 1500;
        $numpiso = 1;
        $precioFinal = $area*$preciobase;
        return view('calcular', compact('area', 'numpiso','precioFinal'));
        
    }
}

    public function mostrarduenios(){
        $duenios = Duenio::all(); //metodo que devuelve todos los registros en la base de datos
        return view('mostrarduenios', compact('duenios'));
    }

    public function mostrarpropiedades(){
        $propiedades = Propiedad::all(); //metodo que devuelve todos los registros en la base de datos
        return view('mostrarpropiedades', compact('propiedades'));
    }

    public function agregarduenio(){
        return view('insertarduenio');
    }

    public function store(Request $request){ //para guardar la informacion que insertaremos en duenios
        $nvoDuenio = new Duenio();
        $nvoDuenio->id;
        $nvoDuenio->nombre = $request->input('nombre');
        $nvoDuenio->apellido = $request->input('apellido');
        $nvoDuenio->correo = $request->input('correo');
        $nvoDuenio->save();

        $duenios = Duenio::all();

        return redirect('/duenios/mostrar'); //Regresar a la vista mostrar
    }
}
