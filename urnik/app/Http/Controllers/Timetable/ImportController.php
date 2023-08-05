<?php

namespace App\Http\Controllers\Timetable;

use App\Http\Controllers\Controller;
use App\Http\Requests\Timetable\ImportRequest;
use App\Imports\TimetableImport;
use Illuminate\Http\RedirectResponse;
use Maatwebsite\Excel\Facades\Excel;

class ImportController extends Controller
{
    public function __invoke(ImportRequest $request): RedirectResponse
    {
        try {
            Excel::import(new TimetableImport, $request->file('import_file'));
        } catch (\Exception $e) {
            return redirect()->route('uvoz')->with('error', $e->getMessage());
        }

        return redirect()->route('index')->with('success', true);
    }
}
