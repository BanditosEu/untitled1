<?php

namespace App\Http\Controllers;

use App\Models\Thread;
use Illuminate\Http\Request;
use Illuminate\View\View;
use PhpParser\Node\Stmt\Return_;

class ThreadController extends Controller
{
    public function index( int $id): View
    {
        $thread = Thread::with(['user', 'topics', 'topics.replies'])
            ->where('id', $id)
            ->first();

        return view('thread.index', compact('thread'));

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
//        $request->validate([
//            'title' => 'required' ,
//            'description' => 'required' ,
//            'user_id' => 'required | exists:users,id' ,
//
//        ]);
//
//        Thread::create(
//            $request->only(
//                ['title', 'description', 'user_id']
//            )
//        );

        $validateData = $request->validate([
            'description' => 'required',
            'title' => 'required'
        ]);

        Thread::create(
            $validateData + [
                'user_id' => auth()->id()
            ]
        );


        return redirect()->back();
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

