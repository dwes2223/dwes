<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Study;
use PhpParser\Node\Stmt\Return_;

class StudyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \Auth::user();

        if ($user->can('viewAny', Study::class)) {
            $studies = Study::all();
            // return $studies;
            return response()->json([
                'status' => 200,
                'data' => $studies
            ], 200);            
        } else {
            return response()->json([
                'status' => 403,
                'message' => 'No autorizado'
            ], 403);            
        }
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
        $this->check404($study);

        $user = \Auth::user();
        if ($user->can('view', $study)) {
            return response()->json([
                'status' => 'ok',
                'data' => $study
            ], 200);
        } else {
            return response()->json([
                'status' => '403',
                'message' => 'No autorizado'
            ], 403);
        }
        



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
        $study = Study::find($id);     

        $this->check404($study);

        //modificar name        
        if ($request->name) {
            //si no pasa validación 422
            $rules = [
                'name' => 'required|max:255',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'errors' => $validator->errors()
                ], 422);                
            }
        }

        //modificar code        
        if ($request->code) {
            //si no pasa validación 422
            $rules = [
                'code' => 'required|max:255',
            ];
            $validator = Validator::make($request->all(), $rules);
            if ($validator->fails()) {
                return response()->json([
                    'status' => 'error',
                    'errors' => $validator->errors()
                ], 422);                
            }
        }

        //todo ok 200
        $study->fill($request->all());
        $study->save();
        return response()->json([
            'status' => 'ok',
            'data' => $study
        ], 200);
    }

    public function validarCampo($campo, $regla)
    {
        # code...
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
        if ($request->method() == 'PATCH') {
            return $this->patch($request, $id);
        }
        $study = Study::find($id);     
        $this->check404($study);

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
        $this->check404($study);

        try {
            //status 204: No content
            $study->delete();
            return response()->json([
                'Sin contenido'
            ], 204);
        } catch (\Throwable $th) {
            return response()->json([
                'status' => 'error',
                'message' => 'Borrado fallido. Conflicto',
            ], 409);
        }
    }

    //DRY. Don't Repeat Yourself
    public function check404($study)
    {
        if (!$study) {
            response()->json([
                'status' => 404,
                'message' => 'No se ha encontrado un estudio con ese id'
            ], 404)->send();
            die();
        }
    }    
}
