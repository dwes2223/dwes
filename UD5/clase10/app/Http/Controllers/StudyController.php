<?php

namespace App\Http\Controllers;

use App\Models\Study;
use Illuminate\Http\Request;
use Session;

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

        return view('study.index', ['studies' => $studies]);
        dd($studies);
        return $studies;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('study.create');
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
            'code' => 'required|max:6',
            'name' => 'required',
            'abreviation' => 'required',
        ];
        $request->validate($rules);
        //version corta
        $study = Study::create($request->all());

        //version larga, comentada
        // $study = new Study;
        // $study->code = $request->code;
        // $study->name = $request->name;
        // $study->abreviation = $request->abreviation;
        // $study->save();

        // header('Location .....');
        return redirect('/studies');

        // INSERT INTO studies('code', 'name', 'abreviation')
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function show(Study $study)
    {
        return view('study.show', ['study' => $study]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function edit(Study $study)
    {
        return view('study.edit', ['study' => $study]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Study $study)
    {
        $rules = [
            'code' => 'required|max:6',
            'name' => 'required',
            'abreviation' => 'required',
        ];
        $request->validate($rules);
        //version larga, comentada
        // $study->code = $request->code;
        // $study->name = $request->name;
        // $study->abreviation = $request->abreviation;
        
        //version corta
        $study->fill($request->all());

        $study->save();
        return redirect('/studies');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Study  $study
     * @return \Illuminate\Http\Response
     */
    public function destroy(Study $study)
    {
        //
    }

    public function session()
    {
        // $name = session('name');
        $code = Session::get('code');
        $name = Session::get('name');
        $abreviation = Session::get('abreviation');
        $lista = Session::get('lista');
        return view('study.session', [
            'code' => $code,
            'name' => $name,
            'abreviation' => $abreviation,
            'lista' => $lista,
        ]);
        // dd($session);
    }

    public function sessionPost(Request $request)
    {
        $code = $request->code;
        $name = $request->name;
        $abreviation = $request->abreviation;
        // session(['name' => $name]);
        Session::put('code', $code);
        Session::put('name', $name);
        Session::put('abreviation', $abreviation);
        return back();
    }
    public function modulePost(Request $request)
    {
        $module = $request->module;
        $lista = Session::get('lista');
        $lista[] = $module;
        Session::put('lista', $lista);
        return back();
    }

    public function filter(Request $request)
    {
        $filter = $request->filter;

        $studies = Study::where('name', 'LIKE', "%$filter%")->get();

        //así devolvemos JSON
        // return $studies;

        //pero así html (más simple en el cliente y menos limpio)
        //pero interesante que lo conozcan los alumnos 
        return view('study.ajax.filter', ['studies'=>$studies]);
    }
}
