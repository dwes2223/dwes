<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Study;
use PhpParser\Node\Stmt\Return_;

class StudyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $studies = Study::all();
        // return $studies;
        return response()->json([
            'status' => 200,
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
        $rules = [
            'code' => 'required|unique:studies,code|max:6',
            'name' => 'required|max:255',
            'abreviation' => 'required|max:255'
        ];        
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);                
        }
        
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
        $study = Study::find($id);

        if (!$study) {
            return response()->json([
                'status' => 404,
                'message' => 'No se ha encontrado un estudio con ese id'
            ], 404);
        }

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

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $study = Study::find($id);     
        //si no lo encuentra 404   
        if (!$study) {
            return response()->json([
                'status' => 'error',
                'message' => 'No se ha encontrado un estudio con ese id'
            ],404);
        }
        //si no pasa validación 422
        $rules = [
            'code' => 'required|max:6|unique:studies,code,' . $study->id,
            'name' => 'required|max:255',
            'abreviation' => 'required|max:255'
        ];        
        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);                
        }

        //todo ok 200
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
        $study = Study::find($id);
        if (!$study) {
            return response()->json([
                'status' => 'error',
                'message' => 'No se ha encontrado un estudio con ese id'
            ],404);            
        }

        $modules = $study->modules;
        if (count($modules)) {
            return response()->json([
                'status' => 'error',
                'message' => 'Conflicto de clave ajena',
                'modules' => $modules
            ], 409);
        }

        //status 204: No content
        $study->delete();
        return response()->json([
            'Sin contenido'
        ], 204);

    }
}
