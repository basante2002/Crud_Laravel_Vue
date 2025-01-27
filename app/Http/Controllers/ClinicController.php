<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use Illuminate\Http\Request;

class ClinicController extends Controller
{
    public function index()
    {

        $clinic = Clinic::all();
        return response()->json([
            'data' => $clinic,
            'mensaje' => 'clinicas enviadas exitosamente'
        ]);
    }
    public function Store(Request $request)
    {
        $note = new Clinic();
        $note->title = $request->title;
        $note->content = $request->content;
        $note->save();
        return response()->json($note);
    }

    // SAVEfORM
    public function saveForm(Request $request)
    {
        $data = $request->all();
        $isUpdate = isset($data['id']) && !empty($data['id']);
        $clinic = $isUpdate ? Clinic::find($data['id']) : new Clinic();

        $clinic->nombre    = $data['nombre'];
        $clinic->direccion = $data['direccion'];
        $clinic->telefono  = $data['telefono'];
        $clinic->save();

        return  [
            'success' => true,
            'msg' => $isUpdate ? 'actualizado' : 'creado',
            'data' => $clinic,
        ];
    }
}
