<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Shared\UsersMasterController;
use Illuminate\Http\Request;

class UserApiController extends Controller
{
    public $authorsmaster;

    public function __construct()
    {
        $this->authorsmaster = new UsersMasterController();
    }

    public function index()
    {
        return $this->authorsmaster->index();
    }

    public function posts($id)
    {
        return $this->authorsmaster->posts($id);
    }
}
