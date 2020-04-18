<?php

namespace App\Http\Controllers;

use App\Llamada;
use Illuminate\Http\Request;

class LlamadaController extends Controller
{
    // all books
    public function index()
    {
        $llamada = Llamada::all()->toArray();
        return array_reverse($llamada);
    }

    // add book
    public function add(Request $request)
    {
        $llamada = new Llamada([
            'nus' => $request->input('nus'),
            'estado' => $request->input('estado'),
            'comentario' => $request->input('comentario'),
            'usuario' => $request->input('usuario')
        ]);
        $llamada->save();

        return response()->json('Se registro la llamada');
    }

    // edit book
    public function edit($id)
    {
        $llamada = Llamada::find($id);
        return response()->json($llamada);
    }

    // update book
    public function update($id, Request $request)
    {
        $llamada = Llamada::find($id);
        $llamada->update($request->all());

        return response()->json('Se actualizo el registro de llamada');
    }

    // delete book
    public function delete($id)
    {
        $llamada = Llamada::find($id);
        $llamada->delete();

        return response()->json('Se elimino el registro de llamada');
    }
}



//class LlamadaController extends Controller
//{
//    public function index()
//    {
//    }
//
//    public function create()
//    {
//    }
//
//    public function store(Request $request)
//    {
//    }
//
//    public function show(Llamada $llamada)
//    {
//    }
//
//    public function edit(Llamada $llamada)
//    {
//    }
//
//    public function update(Request $request, Llamada $llamada)
//    {
//    }
//
//    public function destroy(Llamada $llamada)
//    {
//    }
//}
