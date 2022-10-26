<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\animal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnimalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        $animals = animal::all();
        return view('animal.index', compact('animals', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('animal.create', compact(
            'categories'

        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */



    public function store(Request $request)
    {

        $input = $request->all();

        if ($image = $request->file("picture")) {
            $destinationPath = "images/";
            $name = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $name);
            $input["picture"] = "$name";
        }

        Animal::create($input);



        return redirect()->route('animal.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(animal $animal)
    {
        //$animal = animal::find($id) ; on utilise si paramètre est id fonctionnel
        return view('animal.show', compact('animal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(animal $animal)
    {

        return view('animal.edit', compact('animal'));
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
        $animal = [
            'name' => $request->name, 'description' => $request->description,
            'zone' => $request->zone

        ];
        animal::whereId($id)->update($animal);
        return  redirect()->route('animal.index')
            ->with('info', 'animal updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $animal = animal::find($id);
        //var_dump($animal);
        $animal->delete();
        return redirect()->route('animal.index')
            ->with('success', 'animal deleted successfully.');
    }
}
