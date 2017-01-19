<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use App\Http\Requests;

class tasks extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = DB::table('tasks')->get();
        $tasks_done = DB::table('tasks')->where('is_completed', '=', 1)->get();
        $tasks_todo = DB::table('tasks')->where('is_completed', '=', 0)->get();
        return view('tasks', compact(['tasks_done','tasks_todo','tasks']));
    }
 
    /** 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() 
    {
        DB::table('tasks')->insert(['task_name' => utf8_encode($_GET['task_name']),
                                    'due_date' => utf8_encode($_GET['due_date']),
                                    'category' => utf8_encode($_GET['category'])
                                    ]);
        return Redirect::to('/tasks');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = [];
        if (isset($_GET['is_completed'])){
            $edit['is_completed'] = $_GET['is_completed'];
        }
        if (isset($_GET['task_name'])){
            $edit['task_name'] = $_GET['task_name'];
        }
         if (isset($_GET['due_date'])){
            $edit['due_date'] = $_GET['due_date'];
        }       
        
        DB::table('tasks')->where('id', $id)->update($edit);
        //return Redirect::route('admin.scheduled_programs.index');
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
        DB::table('tasks')->where('id', $id)->delete();
    }
}
