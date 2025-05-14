<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Project\StoreRequest;
use App\Http\Requests\Dashboard\Project\UpdateRequest;
use App\Models\Project;
use App\Traits\FilesHelper;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    use FilesHelper;

    protected $model;

    /**
     * ProjectController constructor.
     * @param Project $model
     */
    public function __construct(Project $model)
    {
        $this->model = $model;
        // $this->middleware('permission:projects');
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = $this->model::all();
        return view('dashboard.pages.projects.index')->with(['data' => $data]);
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('dashboard.pages.projects.create');
    }

    /**
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $data = $request->all();
        $attachment = null;

        $project = $this->model::create([
            'title_ar' => $data['title_ar'],
            'title_en' => $data['title_en'],
            'title_zh_cn' => $data['title_zh_cn'],
            'description_ar' => $data['description_ar'],
            'description_en' => $data['description_en'],
            'description_zh_cn' => $data['description_zh_cn'],
        ]);

        foreach ($data['images'] as $key => $value) {

            $project->attachments()->create([
                'attachment' => $this->fileUpload($value, 'projects'),
                'type' => 'image',
            ]);
        }

        foreach ($data['videos'] as $key => $value) {

            $project->attachments()->create([
                'attachment' => $this->fileUpload($value, 'projects'),
                'type' => 'video',
            ]);
        }

        return redirect()->route('admin.projects.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * @param $city
     * @param $id
     * @return Application|Factory|View
     */
    public function edit($id): View
    {
        $data = $this->model::find($id);
        return view('dashboard.pages.projects.edit')->with(['data' => $data]);
    }

    /**
     * @param UpdateRequest $request
     * @param $city
     * @param $id
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->all();
        $row = $this->model::find($id);

        $attachment = $row->attachment;

        if (request()->hasFile('attachment')) {

            if ($row->attachment) {
                unlink(public_path() . "/storage/uploads/projects/" . $row->attachment);
            }

            $attachment = $this->fileUpload($request->attachment, 'projects');
        }

        $row->update([
            'title_ar' => $data['title_ar'],
            'title_en' => $data['title_en'],
            'title_zh_cn' => $data['title_zh_cn'],
            'description_ar' => $data['description_ar'],
            'description_en' => $data['description_en'],
            'description_zh_cn' => $data['description_zh_cn'],
            'attachment' => $attachment
        ]);

        return redirect()->route('admin.projects.index');
    }

    /**
     * @param $city
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $row = $this->model->where('id', $id)->first();

        if ($row->attachment) {
            unlink(public_path() . "/storage/uploads/projects/" . $row->attachment);
        }

        $row->delete();

        return redirect()->route('admin.projects.index');
    }
}
