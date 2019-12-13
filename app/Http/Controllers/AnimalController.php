<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Race;
use App\User;
use App\Role;
use Validator;

class AnimalController extends Controller
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
        $races=Race::All();
        return view('animal.create', compact('races'));
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
            'age' => 'required|integer',
            'size' => 'required|integer|max:300',
            'gender' => 'required|string',
            'race_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect('/createAnimal')
                        ->withErrors($validator)
                        ->withInput();
        }else{
        $animal=new Animal([
            'name' => $request->name ,
            'age' => $request->age, 
            'gender' => $request->gender, 
            'size' => $request->size,  
            'race_id' => $request->race_id, 
        ]);
        
        $animal->save();
        
        return redirect('/showAnimals');
        
        };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
 
        $animals=Animal::All();
        return view('animal.show', compact('animals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id )
    {
        $animal = Animal::find($id);
        $races=Race::All();
        return view('animal.edit', compact('animal','races'));
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
        $animal = Animal::find($id);
        $animal->name= $request->name;
        $animal->age= $request->age;
        $animal->gender= $request->gender;
        $animal->size= $request->size;
        $animal->race_id = $request->race_id;
        $animal->save();
        return redirect('/showAnimals');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal= Animal::find($id);
        $animal->delete();
        return redirect('/showAnimals');
    }
}
