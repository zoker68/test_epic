<?php

namespace App\Http\Controllers\Timetable;

use App\Http\Controllers\Controller;
use App\Http\Requests\Timetable\StoreRequest;
use App\Models\Activity;
use App\Models\Timetable;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $data['datetime'] = Carbon::createFromFormat('Y-m-d H:i', $data['date'] . ' ' . $data['time']);

        if (!isset($data['activity_code'])) {
            $activity = Activity::firstOrCreate(
                ['title' => $data['new_activity']],
                ['code' => Str::slug($data['new_activity'], '-')]
            );
            $data['activity_code'] = $activity['code'];
        }
        unset($data['date'], $data['time'], $data['new_activity']);

        Timetable::firstOrCreate($data);

        return redirect()->route('show', $data['activity_code']);
    }
}
