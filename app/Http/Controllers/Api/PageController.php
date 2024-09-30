<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;

class PageController extends Controller
{
    public function index(){

        $projects = Project::orderBy('id')->with('technologies', 'type')->get();

        return response()->json($projects);
    }

}
