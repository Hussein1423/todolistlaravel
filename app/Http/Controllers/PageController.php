<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreRequest;
use Illuminate\Http\Request;
use App\Models\Task;
class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         // $posts = Post::select('title','description')->paginate(1);
       // $posts = Post::get();
        $tasks = Task::all();
        return view('pages.index',['tasks'=>$tasks]);
    }

    public function show($id)
    {
       
       $task = Task::findOrFail($id);

        return view('pages.show',['task'=>$task]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskStoreRequest $request)
    {
        $task = new Task();
        $task->title = $request->input('title');
        $task->description = $request->input('description');
        $task->duo = $request->input('due_date');
        $task->save();
        return redirect()->route('pages/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
        $task = Task::findOrFail($id);

        return view('pages.edit',['task'=>$task]);
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
        $task = Task::findOrFail($id);
        $task->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'duo' => $request->input('due_date')
           ]);
        return redirect()->route('pages/index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $task =Task::findOrFail($id);
       $task->delete();
       return redirect()->route('pages/index');
    }
}
