<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\Category;
use App\Models\Tag;
use Auth;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{

    protected $project;
    protected $projectService;

    public function __construct(Project $project)
    {
        $this->project = $project;
    }
    public function index()
    {
        $projects = Project::all();
        $tags = Tag::all();
        $categories = Category::all();
        $user = Auth::user();
        return view('form.create', compact('projects', 'tags', 'categories', 'user'));
    }

    public function create()
    {
        return view('form.create');
    }

    public function store(Request $request)
    {
        // $validator = Validator::make(
        //     request()->all(),
        //     [
        //         'project_name' => 'required',
        //         'description' => 'required',
        //         'start_date' => 'required',
        //         'end_date' => 'required',
        //         'status' => 'required',
        //     ],
        //     [
        //         'required' => ':attribute harus diisi',
        //     ]
        // );

        // if ($validator->fails()) {

        //     return response()->json(['success' => false, 'message' => $validator->errors()->first(), 422]);
        // }

        $input = $request->all();
        $projects = new Project();

        $projects->project_name = $input['project_name'];
        $projects->description = $input['description'];
        $projects->id_category = intval($input['id_category']);
        $projects->id_tag = intval($input['id_tag']);
        $projects->id_user = Auth()->user()->id;
        $projects->start_date = $input['start_date'];
        $projects->end_date = $input['end_date'];
        $projects->status = $input['status'];
        $projects->save();

        return redirect()->route('home')->with('success', 'Data berhasil ditambahkan');
    }

    public function edit($id)
    {
        $projects = $this->project->find($id);
        $tags = Tag::all();
        $selectedTags = $projects->id_tag;
        $categories = Category::all();
        $selectedCategories = $projects->id_category;
        $user = Auth::user();
        return view('form.edit', compact('projects', 'tags', 'categories', 'selectedTags', 'selectedCategories', 'user'));
    }

    public function update(Request $request, $id)
    {
        $input = $request->all();
        $projects = $this->project->find($id);

        $projects->project_name = $input['project_name'];
        $projects->description = $input['description'];
        $projects->id_category = intval($input['id_category']);
        $projects->id_tag = intval($input['id_tag']);
        $projects->id_user = Auth()->user()->id;
        $projects->start_date = $input['start_date'];
        $projects->end_date = $input['end_date'];
        $projects->status = $input['status'];
        $projects->save();

        return redirect()->route('home')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $projects = $this->project->find($id);
        $projects->delete();
        return redirect()->route('home')->with('success', 'Data berhasil dihapus');
    }
}