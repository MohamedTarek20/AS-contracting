<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Partner;
use App\Models\Testimonial;

class AboutController extends Controller
{
    public function index()
    {
        $who_we_are = About::where('identifier', 'who_we_are')->first();
        $our_vision = About::where('identifier', 'our_vision')->first();
        $our_mission = About::where('identifier', 'our_mission')->first();
        $testimonials = Testimonial::all();
        return view('frontend.pages.about.index')->with([
            'who_we_are'    => $who_we_are,
            'our_vision'    => $our_vision,
            'our_mission'   => $our_mission,
            'testimonials'  => $testimonials,
        ]);
    }
}
