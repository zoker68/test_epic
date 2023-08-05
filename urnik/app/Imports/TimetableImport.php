<?php

namespace App\Imports;

use App\Models\Activity;
use App\Models\Timetable;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;
use Maatwebsite\Excel\Concerns\ToCollection;

class TimetableImport implements ToCollection
{
    public function collection(Collection $rows): void
    {
        $rows->each(function ($row) {
            $activityImport = $row->shift();

            $activity = Activity::firstOrCreate(
                ['title' => $activityImport],
                ['code' => Str::slug($activityImport, '-')]
            );

            $row->each(function ($date) use ($activity) {
                if (!$date) {
                    return;
                }
                if (!preg_match('/^\d{4}-\d{2}-\d{2}\s\d{2}:\d{2}$/', $date)) {
                    throw new \Exception('Neveljavna oblika datuma. Preverite datoteko. Spremembe niso bile shranjene. Vrstica: ' . $activity->title . ' Datum: ' . $date);
                }
                $dateTime = Carbon::createFromFormat('Y-m-d H:i', $date);

                Timetable::firstOrCreate([
                    'activity_code' => $activity->code,
                    'datetime' => $dateTime->format('Y-m-d H:i:s')
                ]);
            });
        });
    }
}
