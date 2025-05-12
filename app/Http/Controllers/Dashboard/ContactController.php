<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Contact\StoreRequest;
use App\Http\Requests\Dashboard\Contact\UpdateRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    protected $model;

    /**
     * LocationController constructor.
     * @param Location $model
     */
    public function __construct(Contact $model)
    {
        $this->model = $model;
    }

    /**
     * @return Application|Factory|View
     */
    public function index()
    {
        $data = $this->model::all();
        return view('dashboard.pages.contacts.index')->with(['data' => $data]);
    }

    /**
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('dashboard.pages.contacts.create');
    }

    /**
     * @param ContactRequest $request
     * @return RedirectResponse
     */
    public function store(StoreRequest $request)
    {
        $data = $request->all();

        $this->model::create([
            'type'         => $data['type'],
            'value'        => $data['value'],
        ]);

        return redirect()->route('admin.contacts.index');
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
        return view('dashboard.pages.contacts.edit')->with(['data' => $data]);
    }

    /**
     * @param ContactRequest $request
     * @param $city
     * @param $id
     * @return RedirectResponse
     */
    public function update(UpdateRequest $request, $id)
    {
        $data = $request->all();
        $contact = $this->model::find($id);

        $contact->update([
            'type'         => $data['type'],
            'value'        => $data['value'],
        ]);

        return redirect()->route('admin.contacts.index');
    }

    /**
     * @param $city
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        $this->model->where('id', $id)->delete();

        return redirect()->route('admin.contacts.index');
    }
}
