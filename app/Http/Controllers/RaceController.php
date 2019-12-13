<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Race;
use App\Animal;
use Validator;

class RaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('race.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|string',
            'classification' => 'required|string',
            'life' => 'required|integer|max:100',
            
        ]);

        if ($validator->fails()) {
            return redirect('/createRace')
                        ->withErrors($validator)
                        ->withInput();
        }else{
        $race=new Race([
            'name' => $request->name ,
            'classification' => $request->classification, 
            'life' => $request->life, 
      
        ]);
        
        $race->save();
        
        return redirect('/showRaces');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $races=Race::All();
        return view('race.show', compact('races'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $race = Race::find($id);
        
        return view('race.edit', compact('race'));
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
        $race = Race::find($id);
        $race->name= $request->name;
        $race->classification= $request->classification;
        $race->life= $request->life;
        $race->save();
        return redirect('/showRaces');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $race= Race::find($id);
        $race->delete();
        return redirect('/showRaces');
    }
}
