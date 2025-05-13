<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        $messages = Message::orderByDesc('id')->get();

        return view('dashboard.pages.messages.index', ['data' => $messages]);
    }


    /**
     * @param $city
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id)
    {
        Message::where('id', $id)->delete();

        return redirect()->route('admin.messages.index');
    }
}
