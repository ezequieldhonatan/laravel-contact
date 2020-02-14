<?php

namespace App\Http\Controllers\Api\V1\System\Panel\Dashboard\Overview;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('api.v1.system.panel.dashboard.overview.index');
    }
}
