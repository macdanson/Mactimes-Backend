<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Shared\TagsMasterController;
use Illuminate\Http\Request;

class TagApiController extends Controller
{
    public $tagsmaster;

    public function __construct()
    {
        $this->tagsmaster = new TagsMasterController();
    }

    public function index()
    {
        return $this->tagsmaster->index();
    }

    public function posts($id)
    {
        return $this->tagsmaster->posts($id);
    }

    public function store(Request $request)
    {
        return $this->tagsmaster->store($request);
    }
}
