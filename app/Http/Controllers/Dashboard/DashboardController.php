<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $projects_count = Project::count();
        $services_count = Service::count();
        $messages_count = Message::count();

        return view('dashboard.pages.index', compact('projects_count', 'services_count', 'messages_count'));
    }
}
