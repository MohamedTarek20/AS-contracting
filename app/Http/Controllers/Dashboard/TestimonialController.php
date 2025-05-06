<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Testimonial\StoreRequest;
use App\Http\Requests\Dashboard\Testimonial\UpdateRequest;
use App\Models\Testimonial;
use App\Traits\FilesHelper;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    use FilesHelper;

    protected $model;

    /**
     * TestimonialController constructor.
     * @param Testimonial $model
     */
    public function __construct(Testimonial $model)
    {
        $this->model = $model;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = $this->model::all();
        return view('dashboard.pages.testimonials.index')->with(['data' => $data]);
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('dashboard.pages.testimonials.create');
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
            $image = $this->fileUpload($request->image, 'testimonials');
        }

        $this->model::create([
            'name'                  => $data['name'],
            'description'           => $data['description'],
            'image'                 => $image
        ]);

        return redirect()->route('admin.testimonials.index');
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
        return view('dashboard.pages.testimonials.edit')->with(['data' => $data]);
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
                unlink(public_path() . "/storage/uploads/testimonials/" . $row->image);
            }

            $image = $this->fileUpload($request->image, 'testimonials');
        }

        $row->update([
            'name'                  => $data['name'],
            'description'           => $data['description'],
            'image'                 => $image
        ]);

        return redirect()->route('admin.testimonials.index');
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
            unlink(public_path() . "/storage/uploads/testimonials/" . $row->image);
        }

        $row->delete();

        return redirect()->route('admin.testimonials.index');
    }
}
