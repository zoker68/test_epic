@extends('layouts.main')

@section('content')
    <form method="post" action="{{route('store')}}">
        @csrf
        <div class="sm:col-span-2">
            <label for="activity" class="block text-sm font-semibold leading-6 text-gray-900">Dejavnost</label>
            <div class="relative mt-2.5">
                <div class="absolute inset-y-0 left-0 flex items-center">
                    <select id="activity_code" name="activity_code"
                            class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                        <option value="">Izberite dejavnost</option>
                        @foreach($activities AS $activity)
                            <option value="{{$activity->code}}"
                                    @if(old('activity') == $activity->code) selected @endif
                            >{{$activity->title}}</option>
                        @endforeach
                    </select>
                    <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400" viewBox="0 0 20 20"
                         fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                              d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                              clip-rule="evenodd"/>
                    </svg>
                </div>
                <input type="text" placeholder="ali napisite novo" name="new_activity" value="{{old("new_activity")}}"
                       class="block w-full rounded-md border-0 px-3.5 py-2 pl-60 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('activity_code')
            <div class="text-orange-700 pt-1" role="alert">
                <p>{{$message}}</p>
            </div>
            @enderror
            @error('new_activity')
            <div class="text-orange-700 pt-1" role="alert">
                <p>{{$message}}</p>
            </div>
            @enderror
        </div>
        <div class="pt-3">
            <label for="date" class="block text-sm font-semibold leading-6 text-gray-900">Datum</label>
            <div class="relative mt-2.5">

                <input type="date" id="date" name="date" value="{{old('date')}}"
                       class="rounded-md border-0 px-3.5 py-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                <input type="time" id="time" name="time" value="{{old('time')}}"
                       class="rounded-md border-0 px-3.5 py-2 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
            @error('date')
            <div class="text-orange-700 pt-1" role="alert">
                <p>{{$message}}</p>
            </div>
            @enderror
            @error('time')
            <div class="text-orange-700 pt-1" role="alert">
                <p>{{$message}}</p>
            </div>
            @enderror
        </div>
        <div class="pt-6">
            <button type="submit"
                    class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-12 py-1.5 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                Dodaj
            </button>
        </div>
    </form>
@endsection
