<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Partner\StoreRequest;
use App\Http\Requests\Dashboard\Partner\UpdateRequest;
use App\Models\Partner;
use App\Traits\FilesHelper;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PartnerController extends Controller
{
    use FilesHelper;
    /**
     * @var
     */
    public $model;

    /**
     * PartnerController constructor.
     * @param Partner $model
     */
    public function __construct(Partner $model)
    {
        $this->model    = $model;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = $this->model->all();
        return view('dashboard.pages.partners.index')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('dashboard.pages.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $data = $request->all();

        $image = null;
        if (request()->hasFile('image')) {
            $image = $this->fileUpload($data['image'], 'partners');
        }
        $this->model->create([
            'image'     => $image
        ]);

        return redirect()->route('admin.partners.index');
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
    public function edit($id)
    {
        $data = $this->model->find($id);
        return view('dashboard.pages.partners.edit')->with(['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, int $id)
    {
        $data = $request->all();

        $row = $this->model->find($id);
        $image = $row->image;

        if (request()->hasFile('image')) {
            unlink(public_path() . "/storage/uploads/partners/" . $row->image);
            $image = $this->fileUpload($data['image'], 'partners');
        }

        $row->update([
            'image'     => $image
        ]);

        return redirect()->route('admin.partners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $row = $this->model->find($id);
        unlink(public_path() . "/storage/uploads/partners/" . $row->image);
        $row->delete();
        return redirect()->route('admin.partners.index');
    }
}
