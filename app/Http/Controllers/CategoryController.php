<?php

namespace App\Http\Controllers;

use App\Category;
use App\Http\Controllers\Shared\CategoriesMasterController;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $categoriesmaster;
    public function __construct()
    {
        $this->categoriesmaster = new CategoriesMasterController();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return $this->categoriesmaster->index();
        return view('categories.index')->with([
            'categories' => $this->categoriesmaster->index()
        ]);
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
        return $this->categoriesmaster->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        // return Category::find($category);
        return view('categories.category')->with(
            'category',
            $this->categoriesmaster->show($category)
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
