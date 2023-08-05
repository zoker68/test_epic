<?php

namespace App\Http\Controllers\Timetable;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\View\View;

class CreateController extends Controller
{
    public function __invoke(): View
    {
        $activities = Activity::all();

        return view('create', compact('activities'));
    }
}
