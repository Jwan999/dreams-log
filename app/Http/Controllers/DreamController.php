<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dreams;

class DreamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dreams = Dreams::all()->toArray();
        return view('dream.dreamslog', compact('dreams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dream.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'a_dream' => 'required',
            'dream_title' => 'required'
        ]);

        $dream = new Dreams([
            'a_dream' => $request->get('a_dream'),
            'dream_title' => $request->get('dream_title')
        ]);
        $dream->save();

//kinda like refreshing the page

        // success = dream saved this is the response
        return redirect('dream')->with("success", "Dream Saved");

//        return redirect()->route('heh');
//        return redirect()->action('DreamController@index',['success'=>'Created Successfully']);

//        dd(Dreams::create($request->all()));
//        Dreams::create($request->all());
//        return redirect()->route('dream/')
//            ->with('success', 'Dream created successfully');
//    }
//
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
