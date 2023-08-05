@extends('layouts.main')

@section('content')

    @if (session('error'))
        <div role="alert">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                Napaka pri uvozu:
            </div>
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                <p>{{ session('error') }}</p>
            </div>
        </div>
    @endif

    <form method="post" action="{{route('import')}}" enctype="multipart/form-data">
        @csrf

        <div class="pt-3">
            <label for="date" class="block text-sm font-semibold leading-6 text-gray-900">Izberite datoteko</label>
            <div class="relative mt-2.5">

                <input
                    class="relative m-0 block w-full min-w-0 flex-auto cursor-pointer rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] font-normal leading-[2.15] text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:cursor-pointer file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                    name="import_file" id="formFileLg" accept=".csv" type="file"/>
            </div>
            @error('import_file')
            <div class="text-orange-700 pt-1" role="alert">
                <p>{{$message}}</p>
            </div>
            @enderror
        </div>
        <div class="pt-6">
            <button type="submit"
                    class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-12 py-1.5 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Uvoz
            </button>
        </div>
    </form>
@endsection
