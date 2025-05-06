<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(): View
    {
        $sliders = Slider::all();
        return view('frontend.pages.index', ['sliders' => $sliders]);
    }


    public function changeLanguage($lang): RedirectResponse
    {
        Session::put('lang', $lang);
        return redirect()->back();
    }
}
