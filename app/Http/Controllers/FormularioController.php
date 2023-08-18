<?php


namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;


class FormularioController extends Controller
{
    // vista
    public function mostrarFormulario()
    {
        return view('formulario');
    }

    // solicitud
    public function procesarFormulario(Request $request)
    {   
        // parametros del formulario
        $nombre = $request->input('nombre');
        $cantidad = $request->input('cantidad');
        $telefono = $request->input('telefono');

        // Filtrar los últimos 4 dígitos del teléfono
        $ultimosCuatroDigitos = substr($telefono, -4);

        //headers y parametros para la API
        $response = Http::withHeaders([
            'Authorization' => 'Bearer sWCkATuQlzT2solMGTM8BumHnr5CcKtrl70r3kVAK6wuVHPq2nAq1O2M0D4w',
        ])->post('http://149.202.12.81/rapidprest_i2/public/api/maq1/generarqr/prueba1', [
            'cantidad' => $cantidad,
            'numeroautorizacion' => $ultimosCuatroDigitos,
        ]);

        // filtrar respuesta
        $datos = $response->json()['data'];
        $codigo = $datos['codigo'];

        return view('formulario', compact('codigo'));
    }
}
