<?php

namespace App\Http\Controllers;

use App\Models\Module;
use App\Models\Study;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $modules = Module::all();
        return view('module.index', ['modules' => $modules]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $studies = Study::all(); 
        return view('module.create', ['studies' => $studies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validar
        $rules = [
            'code' => 'required|max:4',
            'name' => 'required',
            'hours' => 'integer',
            'study_id' => 'required|exists:studies,id',
        ];
        $request->validate($rules);
        //crear
        $module = Module::create($request->all());
        //redirigir
        return redirect('/modules');
    }

    public function storeToStudy($id, Request $request)
    {
        $rules = [
            'code' => 'required|max:4',
            'name' => 'required',
            'hours' => 'integer',
            // 'study_id' => 'required|exists:studies,id',
        ];
        $request->validate($rules);
        $module = new Module;
        $module->code = $request->code;
        $module->name = $request->name;
        $module->hours = $request->hours;
        $module->study_id = $id;
        $module->save();
        return back();
        // return redirect('/studies/' . $id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function show(Module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function edit(Module $module)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Module $module)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Module  $module
     * @return \Illuminate\Http\Response
     */
    public function destroy(Module $module)
    {
        $module->delete();
        return back()->with('status', 'Modulo borrado');
    }
}
