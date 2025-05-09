<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Technology;
use App\Models\Type;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::all();

       //dd($projects);
        return view("projects.index", compact("projects"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $types = Type::all();

        $technologies = Technology::all();
        return view("projects.create", compact("types", "technologies"));


    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       // dd($request);
       $data = $request->all();

       $newProject = new Project();

       $newProject->name = $data['name'];
       $newProject->client = $data['client'];
       $newProject->period = $data['period'];
       $newProject->type_id = $data['type_id'];
       $newProject->summary = $data['summary'];

       $newProject->save();

       $newProject->technologies()->attach($data['technologies']);

       return redirect()->route("projects.show", $newProject);

    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //$project = Project::where("id", $id)->first();
        //$project = Project::find($id);
        //dd($project->type);
        return view("projects.show" , compact("project"));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        $types = Type::all();
        $technologies = Technology::all();
        return view("projects.edit", compact("project", "types", "technologies"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $data = $request->all();
        //edit the info inside the project
        $project->name = $data['name'];
        $project->client = $data['client'];
        $project->period = $data['period'];
        $project->type_id = $data['type_id'];
        $project->summary = $data['summary'];

        $project->update();

        if($request->has('technologies')){
            $project->technologies()->sync($data['technologies']);
        } else {
            $project->technologies()->detach();
        }
        

        return redirect()->route("projects.show", $project);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    
    {
        $project->delete();
        return redirect()->route("projects.index");
    }
}
