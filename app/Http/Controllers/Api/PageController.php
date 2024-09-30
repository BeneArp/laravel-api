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

    public function technologies(){

        $technologies = Technology::all();

        return response()->json($technologies);
    }

    public function types(){

        $types = Type::all();

        return response()->json($types);
    }

    public function projectDetails($slug){

        $project = Project::where('slug', $slug)->with('technologies', 'type')->first();

        $project ? $success = true : $success = false;

        $response = [
            'success' => $success,
            'result' => $project
        ];

        return response()->json($response);
    }

    public function ProjectsByType($slug){

        $projects = Type::where('slug', $slug)->with('projects')->first();

        return response()->json($projects);
    }
}
