<?php

namespace App\Http\Controllers;

use App\Models\Like;
use App\Models\Todo;
use App\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Contracts\Session\Session;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \view('todo.index')->with('todos', Todo::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('todo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $data['user_name'] = \auth()->user()->name;
        Todo::create($data);

        return redirect('/');
    }




    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {

        $comments = Comment::where('todo_id', $todo->id)->get();

        $likes = Like::where('todo_id', $todo->id)->get();


        return view('todo.show', ['todo' => $todo]);
    }


    public function like(Todo $todo)
    {
        if (!$todo->likes()->where('user_id', auth()->user()->id)->first()) {
            Like::create([
                'user_id' => \auth()->user()->id,
                'todo_id' => $todo->id
            ]);
        }
        return \redirect()->back();
    }

    public function unlike(Todo $todo)
    {







        $like = $todo->likes()->where('user_id', auth()->user()->id)->first();
        $like->delete();
        return \redirect()->back();
    }


    public function comment(Request $request, Todo $todo)
    {
        Comment::create([
            'comment' =>  $request->comment,
            'todo_id' => $todo->id,
            'user_id' => \auth()->user()->id,
        ]);
        return \redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Todo $todo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
