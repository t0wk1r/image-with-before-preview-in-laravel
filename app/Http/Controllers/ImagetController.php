<?php

namespace App\Http\Controllers;

use App\Models\imaget;
use Illuminate\Http\Request;


class ImagetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allData = imaget::all();
        return view('photowork.alldata', compact('allData'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photowork.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $path = $request->file('photo')->store('images', 'public');
        $data['photo'] = $path;
        imaget::create($data);

        return redirect()->route('imagets.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\imaget  $imaget
     * @return \Illuminate\Http\Response
     */
    public function show(imaget $imaget)
    {
        $show['imaget'] = $imaget;
        return view('photowork.show', $show);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\imaget  $imaget
     * @return \Illuminate\Http\Response
     */
    public function edit(imaget $imaget)
    {
        $show['imaget'] = $imaget;
        return view('photowork.edit', $show);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\imaget  $imaget
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, imaget $imaget)
    {
        $path = $request->file('photo')->store('images', 'public');
        $data['photo'] = $path;
        $imaget->update($data);

        return redirect()->route('imagets.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\imaget  $imaget
     * @return \Illuminate\Http\Response
     */
    public function destroy(imaget $imaget)
    {
        $imaget->delete();
        return redirect()->route('imagets.index');
    }
}
