<?php

namespace App\Http\Controllers;

use App\Notifications\TodoNotification;
use App\Todo;
use Illuminate\Http\Request;
use App\User;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::first();
        $todo = Todo::first();
        $user->notify(new TodoNotification($todo));

        return view('todo.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
        return view('todo.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param  Request  $request
     *
     * @return void
     */
    public function postLogin(Request $request)
    {
        $credentials = $request->only(['email', 'password']);
        if (auth()->attempt($credentials)){
            return redirect()->route('my-todo');
        }
        else {
            return redirect()->back()->withErrors(['error' => 'Login fails!']);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function myTodo()
    {
        $user = auth()->user();
        $todos = $user->todos;

        return view('todo.my_todo', compact('user', 'todos'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        auth()->logout();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(int $id)
    {
        $user = auth()->user();
        $todo = Todo::whereKey($id)->firstOrFail();

        if($user->can('view', $todo)) {
            return view('todo.show', compact('todo'));
        }
        else {
            echo 'Sorry, U don\'t have any permission!';
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Todo  $todo
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
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todo $todo)
    {
        //
    }
}
