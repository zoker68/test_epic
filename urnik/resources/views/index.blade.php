@extends('layouts.main')

@section('content')

    @if (session('success'))
        <div class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3 mb-5" role="alert">
            <p class="font-bold">Uvoz je končan</p>
        </div>
    @endif

    <h1>Seznam dejavnosti</h1>
    <ul>
        @foreach($activities AS $activity)
            <li><a href="{{route('show', $activity->code)}}" class="text-indigo-700">{{$activity->title}}</a><li>
        @endforeach
    </ul>
@endsection
