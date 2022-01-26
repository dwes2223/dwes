<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class UserController extends Controller
{

    public function __construct()
    {
        // $this->middleware('guest');
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        // dd($user);
        // $id = Auth::id();
        // dd($id);
        // $users = User::all();
        $name = $request->name;
        $role = $request->role;
        
        $query = User::query();

        $path = "";
        if (!empty($name)) {
            $query = $query->where('name', 'like',"%$name%");
            $path = "name=$name";
        }
        if (!empty($role)) {
            $query = $query->where('role_id', $role);
            $path .= "&role=$role";
        }
        $users = $query->paginate(15);
        $users->withPath($request->path .
            '?name=' . $request->name
            . '&role=' . $request->role);

        // $users = $query->get();
        return view('user.index', [
            'users' => $users,
            'name' => $name,
            'role' => $role,
            'user' => $user
        ]);
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
        // $book = new Book;
        // $book->user_id = Auth::id();
        // // $book->... resto de campos
        // $book->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo "mostrando el usuario $id";
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
