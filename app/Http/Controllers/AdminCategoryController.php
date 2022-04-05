<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;
use Cviebrock\EloquentSluggable\Services\SlugService;

class AdminCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (auth()->guest() || !auth()->user()->is_admin){
        //     abort(403);
        // }

        return view('dashboard.categories.index', [
            'title' => 'Edit Categories',
            'categories' => Category::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.categories.create',[
            'title' => 'Create New Category'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3',
            'slug' => 'required'
        ]);

        Category::create($validatedData);

        return redirect('/dashboard/categories')->with('success', 'New Category Has Been Added');
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
     * @param  \App\Models\Category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        // Category::destroy($category->id);
        // return redirect('/dashboard/categories')->with('success', 'Some Category Has Been Deleted');

        Category::destroy($category->id);

        return redirect('/dashboard/categories')->with('success', 'Category Has Been Deleted');
    }

    public function checkSlug(Request $request){
        $slug = SlugService::createSlug(Post::class, 'slug' , $request->title);
        return response()->json(['slug' => $slug]);
    }
}
