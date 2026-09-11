<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    //
    public function stats(){
        return response()->json([
            'projects_count' => Project::where('user_id', Auth::id())->count(),
            'tasks_count' => Task::where('user_id', Auth::id())->count(),
        ]);
    }
}
