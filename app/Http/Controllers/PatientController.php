<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class PatientController extends Controller
{


    public function  vistaTable(){
        
        return view('Patient.patient');
    }

    public function  index(){
        
        $patient = Patient::all();
        return response()->json($patient);
    }

    public function  store(Request $request){
        
        $patient = new Patient();
        $patient->nombre     =  $request->nombre;
        $patient->edad       =  $request->edad;
        $patient->email      =  $request->email;
        $patient->telefono   =  $request->telefono;
        $patient->clinic_id  =  $request->clinic_id;
        $patient->save();
        return response()->json([
            'success' => 'paciente creado exitosamente'
        ]) ;
    }
    
    public function  update(Request $request, $id){
        
        $patient = Patient::find($id);
        $patient->nombre     =  $request->nombre;
        $patient->edad       =  $request->edad;
        $patient->email      =  $request->email;
        $patient->telefono   =  $request->telefono;
        $patient->clinic_id  =  $request->clinic_id;
        $patient->save();
        return response()->json([
            'success' => 'paciente actualizado exitosamente'
        ]) ;
    }

    
    public function  destroy($id){
        
        $patient = Patient::find($id);
        $patient->delete();
        return response()->json([
            'success' => 'paciente eliminado exitosamente'
        ]) ;
    }

}
