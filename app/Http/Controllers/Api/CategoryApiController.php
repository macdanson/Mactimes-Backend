<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Shared\CategoriesMasterController;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    public $categoriesmaster;

    public function __construct()
    {
        $this->categoriesmaster = new CategoriesMasterController();
    }

    public function index()
    {
        return $this->categoriesmaster->index();
    }

    public function show($category)
    {
        return $this->categoriesmaster->show($category);
    }

    public function store(Request $request)
    {
        return $this->categoriesmaster->store($request);
    }

    public function posts($id)
    {
        return $this->categoriesmaster->posts($id);
    }
}
