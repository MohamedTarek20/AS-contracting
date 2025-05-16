<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\ProjectAttachment\StoreRequest;
use App\Http\Requests\Dashboard\ProjectAttachment\UpdateRequest;
use App\Models\Project;
use App\Models\ProjectAttachment;
use App\Traits\FilesHelper;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProjectAttachmentController extends Controller
{
    use FilesHelper;
    /**
     * @var
     */
    public $model;

    /**
     * ProjectAttachmentController constructor.
     * @param ProjectAttachment $model
     */
    public function __construct(ProjectAttachment $model)
    {
        $this->model = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $project = Project::find(request()->project);
        $data = $this->model->where('project_id', request()->project)->get();
        return view('dashboard.pages.projects.attachments.index')->with(['data' => $data, 'project' => $project]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('dashboard.pages.projects.attachments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $data = $request->validated();

        $attachment = null;
        if (request()->hasFile('image')) {
            $attachment = $this->fileUpload($data['image'], 'projects');
        }

        if (request()->hasFile('video')) {
            $attachment = $this->fileUpload($data['video'], 'projects');
        }

        $this->model->create([
            'attachment' => $attachment,
            'type' => $data['type'],
            'project_id' => $request->route()->project
        ]);

        return redirect()->route('admin.projects.attachments.index', ['project' => $request->route()->project]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Application|Factory|View
     */
    public function edit($project, $id)
    {
        $data = $this->model->find($id);
        return view('dashboard.pages.projects.attachments.edit')->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, $project, int $id)
    {
        $data = $request->all();

        $row = $this->model->find($id);
        $attachment = $row->attachment;

        if (request()->hasFile('image')) {
            unlink(public_path() . "/storage/uploads/projects/" . $row->attachment);
            $attachment = $this->fileUpload($data['image'], 'projects');
        }

        if (request()->hasFile('video')) {
            unlink(public_path() . "/storage/uploads/projects/" . $row->attachment);
            $attachment = $this->fileUpload($data['video'], 'projects');
        }
        $row->update([
            'attachment' => $attachment,
        ]);

        return redirect()->route('admin.projects.attachments.index', ['project' => $request->route()->project]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($project, $id)
    {
        $row = $this->model->find($id);
        unlink(public_path() . "/storage/uploads/projects/" . $row->attachment);
        $row->delete();
        return redirect()->route('admin.projects.attachments.index', ['project' => request()->route()->project]);
    }
}
