<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\About\UpdateRequest;
use App\Models\About;
use App\Traits\FilesHelper;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    use FilesHelper;

    protected $model;

    /**
     * LocationController constructor.
     * @param Location $model
     */
    public function __construct(About $model)
    {
        $this->model = $model;
        // $this->middleware('permission:about');
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = $this->model::all();
        return view('dashboard.pages.about.index')->with(['data' => $data]);
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
    }

    /**
     * @param AboutRequest $request
     * @return RedirectResponse
     */
    public function store()
    {
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
    public function edit($id)
    {
        $data = $this->model::find($id);
        return view('dashboard.pages.about.edit')->with(['data' => $data]);
    }

    /**
     * @param AboutRequest $request
     * @param $city
     * @param $id
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->all();
        $about = $this->model::find($id);

        $image = $about->image;
        if (request()->hasFile('image')) {
            if ($about->image) {
                unlink(public_path() . "/storage/uploads/about/" . $about->image);
            }
            $image = $this->fileUpload($request->image, 'about');
        }

        $about->update([
            'title_ar' => $data['title_ar'],
            'description_ar' => $data['description_ar'],
            'title_en' => $data['title_en'],
            'description_en' => $data['description_en'],
            'title_zh_cn'           => $data['title_zh_cn'],
            'description_zh_cn'     => $data['description_zh_cn'],
            'image' => $image,
        ]);

        return redirect()->route('admin.about.index');
    }
}
