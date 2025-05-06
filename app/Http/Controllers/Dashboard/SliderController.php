<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Slider\StoreRequest;
use App\Http\Requests\Dashboard\Slider\UpdateRequest;
use App\Models\Slider;
use App\Traits\FilesHelper;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use FilesHelper;

    protected $model;

    /**
     * SliderController constructor.
     * @param Slider $model
     */
    public function __construct(Slider $model)
    {
        $this->model = $model;
        // $this->middleware('permission:sliders');
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = $this->model::all();
        return view('dashboard.pages.sliders.index')->with(['data' => $data]);
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('dashboard.pages.sliders.create');
    }

    /**
     * @param StoreRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $data = $request->all();
        $image = null;

        if (request()->hasFile('image')) {
            $image = $this->fileUpload($request->image, 'sliders');
        }

        $this->model::create([
            'title_ar'              => $data['title_ar'],
            'title_en'              => $data['title_en'],
            'title_zh_cn'           => $data['title_zh_cn'],
            'description_ar'        => $data['description_ar'],
            'description_en'        => $data['description_en'],
            'description_zh_cn'     => $data['description_zh_cn'],
            'url'                   => $data['url'] ?? null,
            'image'                 => $image
        ]);

        return redirect()->route('admin.sliders.index');
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
        return view('dashboard.pages.sliders.edit')->with(['data' => $data]);
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

        $image = $row->image;

        if (request()->hasFile('image')) {

            if ($row->image) {
                unlink(public_path() . "/storage/uploads/sliders/" . $row->image);
            }

            $image = $this->fileUpload($request->image, 'sliders');
        }

        $row->update([
            'title_ar'              => $data['title_ar'],
            'title_en'              => $data['title_en'],
            'title_zh_cn'           => $data['title_zh_cn'],
            'description_ar'        => $data['description_ar'],
            'description_en'        => $data['description_en'],
            'description_zh_cn'     => $data['description_zh_cn'],
            'url'                   => $data['url'],
            'image'                 => $image
        ]);

        return redirect()->route('admin.sliders.index');
    }

    /**
     * @param $city
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $row = $this->model->where('id', $id)->first();

        if ($row->image) {
            unlink(public_path() . "/storage/uploads/sliders/" . $row->image);
        }

        $row->delete();

        return redirect()->route('admin.sliders.index');
    }
}
