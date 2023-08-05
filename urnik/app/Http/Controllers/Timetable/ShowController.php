<?php

namespace App\Http\Controllers\Timetable;

use App\Http\Controllers\Controller;
use App\Models\Activity;
use Illuminate\View\View;

class ShowController extends Controller
{
    public function __invoke(Activity $activity): View
    {
        return view('show', compact('activity'));
    }
}
