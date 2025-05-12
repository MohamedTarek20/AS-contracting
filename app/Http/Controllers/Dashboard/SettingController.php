<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    protected $model;

    /**
     * LocationController constructor.
     * @param Location $model
     */
    public function __construct(Setting $model)
    {
        $this->model = $model;
        // $this->middleware('permission:settings');
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = $this->model::all();
        return view('dashboard.pages.settings.index')->with(['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        return view('dashboard.pages.settings.edit')->with(['data' => $data]);
    }

    /**
     * @param SettingRequest $request
     * @param $city
     * @param $id
     * @return RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $setting = $this->model::find($id);

        $setting->update([
            'value'     => $data['value'] ? $data['value'] : '',
        ]);

        return redirect()->route('admin.settings.index');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
