<?php

namespace App\Http\Controllers\Occupation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\OccupationRequest;
use App\Models\Occupation;
use Barryvdh\Debugbar\Facades\Debugbar;

class OccupationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $occupations = Occupation::with(['clients'])->orderBy('name')->get();

        return view('occupation.list', compact('occupations'));
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
    public function store(OccupationRequest $request)
    {
        $dataForm = $request->except('_token');
        Occupation::create($dataForm);
        
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
        $occupation = Occupation::find($id);

        return view('occupation.show', compact('occupation'));
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
        $occupation = Occupation::find($id);
        $occupation = $occupation->delete();

        return response()->json($occupation);
    }
}
