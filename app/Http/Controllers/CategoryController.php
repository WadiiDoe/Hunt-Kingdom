<?php

namespace App\Http\Controllers;

use App\Models\Category;

use Illuminate\Http\Request;



class categoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = Category::all();
        $project = Category::query();


        if (!empty(request('term'))) {
            $project->where('name', 'Like', '%' . request('term') . '%')->orderBy('id', 'DESC')->paginate(15);
            //$project = $project->orderBy('id', 'DESC')->paginate(15);
        }


        return view('category.index', compact('categorys', 'project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('category.create', compact(
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




        $category = category::create($request->all());

        /*$category = new category([
            "name" => $request->get('name'),
            "description" => $request->get('description'),
            "price" => $request->get('price'),
            "stock" => $request->get('stock'),
        ]);*/

        $category->category_id  = $request->category_id;


        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //$category = category::find($id) ; on utilise si paramètre est id fonctionnel
        return view('category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {

        return view('category.edit', compact('category'));
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
        $category = [
            'name' => $request->name

        ];
        category::whereId($id)->update($category);
        return  redirect()->route('category.index')
            ->with('info', 'category updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = category::find($id);
        //var_dump($category);
        $category->delete();
        return redirect()->route('category.index')
            ->with('success', 'category deleted successfully.');
    }
}
