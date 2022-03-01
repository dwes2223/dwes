<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Study;
use Illuminate\Support\Facades\Validator;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return "index Study";
        $studies = Study::all();
        // return $studies;
        return response()->json([
            'status' => 'ok',
            'data' => $studies 
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validar, si falla 422
        $validator = Validator::make($request->all(), [
            'code' => 'required|unique:studies,code|max:6',
            'name' => 'required|max:255',
            'abreviation' => 'required|max:255',
            ]);        
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'errors' => $validator->errors()
                ], 422);
            }
            //si pasa validación, crear 201
        $study = Study::create($request->all());
        return response()->json([
            'status' => 'ok',
            'data' => $study
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return "show";
        $study = Study::find($id);

        // if (!$study) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'No se ha encontrado el estudio solicitado'
        //     ], 404);
        // }
        $this->check404($study);
        return response()->json([
            'status' => 'ok',
            'data' => $study
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    public function patch(Request $request, $id)
    {
        //buscar. Si falla 404
        $study = Study::find($id);
        $this->check404($study);
        // if (!$study) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'No se ha encontrado el estudio solicitado'
        //     ], 404);
        // }
        //validar. Si falla 422
        if ($request->name) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|max:255',
            ]);        
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'errors' => $validator->errors()
                ], 422);
            }
        }
        if ($request->code) {
            $validator = Validator::make($request->all(), [
                'code' => 'required|max:6',
            ]);        
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'errors' => $validator->errors()
                ], 422);
            }
        }
        //guardar y acabar. 200
        $study->fill($request->all());
        $study->save();
        return response()->json([
            'status' => 'ok',
            'data' => $study
        ], 200);    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->method() == 'PATCH') {
            return $this->patch($request, $id);
        }
        //buscar. Si falla 404
        $study = Study::find($id);
        $this->check404($study);
        // if (!$study) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'No se ha encontrado el estudio solicitado'
        //     ], 404);
        // }
        //validar. Si falla 422
        $validator = Validator::make($request->all(), [
            'code' => 'required|max:6|unique:studies,code,' . $study->id,
            'name' => 'required|max:255',
            'abreviation' => 'required|max:255',
        ]);        
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }
        //guardar y acabar. 200
        $study->fill($request->all());
        $study->save();
        return response()->json([
            'status' => 'ok',
            'data' => $study
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //buscar
        $study = Study::find($id);
        
        //si no existe 404
        $this->check404($study);
        // if (!$study) {
        //     return response()->json([
        //         'status' => 'error',
        //         'message' => 'No se ha encontrado el estudio'
        //     ], 404);
        // }

        try {
            //borrar 204 -> no content
            $study->delete();
            return response()->json([ 
                //OJO, no llega ningún contenido lo podríamos quitar
                //si queremos que llegue usar STATUS 200
                'status' => 'ok',
                'message' => 'Borrado con éxito' 
            ], 204);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Conflicto. Operación no permitida'
            ], 409);
        }
    }

    public function check404($study)
    {
        if (!$study) {
            response()->json([
                'status' => 'error',
                'message' => 'No se ha encontrado el estudio solicitado'
            ], 404)->send();
            die();
        }        
    }
}
