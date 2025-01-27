<?php

namespace App\Http\Controllers;

use App\Models\Clinic;
use Illuminate\Http\Request;

class ClinicController extends Controller
{

    public function  vistaTable(){
        
        return view('Clinic.clinic');
    }

    public function index()
    {

        $clinic = Clinic::all();
        return response()->json([
            'data' => $clinic,
            'mensaje' => 'clinicas enviadas exitosamente'
        ]);
    }
    // Metodo para crear una clinica
    public function Store(Request $request)
    {
        $clinic = new Clinic();
        $clinic->nombre = $request->nombre;
        $clinic->direccion = $request->direccion;
        $clinic->telefono = $request->telefono;
        $clinic->save();
            return response()->json([
                'success' => 'clinica creada exitosamente'
            ]);
    }

    public function update(Request $request,$id){
        $clinic = Clinic::find($id);
        $clinic->nombre = $request->nombre;
        $clinic->direccion = $request->direccion;
        $clinic->telefono = $request->telefono;
        $clinic->save();
            return response()->json([
                'success' => 'clinica actualizada exitosamente'
            ]);
    }
    

    public function destroy($id){
        $clinic = Clinic::find($id);
        $clinic->delete();
            return response()->json([
                'success' => 'clinica borrada exitosamente' 
            ]);
    }



// ----------------------------------
    // //  Metodo para editar o guardar unna clinica
    // public function saveForm(Request $request)
    // {
    //     $data = $request->all();
    //     $isUpdate = isset($data['id']) && !empty($data['id']);
    //     $clinic = $isUpdate ? Clinic::find($data['id']) : new Clinic();

    //     $clinic->nombre    = $data['nombre'];
    //     $clinic->direccion = $data['direccion'];
    //     $clinic->telefono  = $data['telefono'];
    //     $clinic->save();

    //     return  [
    //         'success' => true,
    //         'msg' => $isUpdate ? 'actualizado' : 'creado',
    //         'data' => $clinic,
    //     ];
    // }
}
