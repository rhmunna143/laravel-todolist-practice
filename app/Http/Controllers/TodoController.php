<?php

namespace App\Http\Controllers;

use App\Models\TodoModel;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // get all todo lists
        $todo = TodoModel::orderBy("id", "asc")->paginate(10);

        return $todo;
    }

    // get all todo lists
    public function showAll(Request $request)
    {
        $todoModel = new TodoModel();
        $todo = $todoModel->getTodoListFromDB();
        return $todo;
    }

    // hasone relationship
    public function hasOne()
    {
        $todo = TodoModel::find(1)->hasOneUser;
        return $todo;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // get all todo lists
        $todoModel = new TodoModel();
        $todo = $todoModel->find($id);

        return "eyto ache";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
