<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Setting;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all()->groupBy('type');
        // $map = Setting::where('identifier', 'contact_map')->first()->value ?? null;
        return view('frontend.pages.contacts.index')->with([
            'contacts'     => $contacts,
            'map'          => $map ?? '',
        ]);
    }
}
