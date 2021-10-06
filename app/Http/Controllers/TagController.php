<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Shared\TagsMasterController;
use App\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public $tagsmaster;

    public function __construct()
    {
        $this->tagsmaster = new TagsMasterController();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return $this->tagsmaster->index();
        return view('tags.index')->with([
            'tags' => $this->tagsmaster->index()
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
        return $this->tagsmaster->store($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function show(Tag $tag)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function edit(Tag $tag)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tag $tag)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tag  $tag
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tag $tag)
    {
        //
    }

    public function posts($id)
    {
        return $this->tagsmaster->posts($id);
    }
}
