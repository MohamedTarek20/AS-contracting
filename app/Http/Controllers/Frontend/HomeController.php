<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Project;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index(): View
    {
        $sliders = Slider::all();
        $testimonials = Testimonial::take(3)->get();
        $partners = Partner::take(6)->get();
        $projects = Project::take(3)->latest()->get();
        $services = Service::all();
        return view('frontend.pages.index', [
            'sliders' => $sliders,
            'testimonials' => $testimonials,
            'partners'  => $partners,
            'projects'  => $projects,
            'services'  => $services
        ]);
    }


    public function changeLanguage($lang): RedirectResponse
    {
        Session::put('lang', $lang);
        return redirect()->back();
    }
}
