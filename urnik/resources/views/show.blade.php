@extends('layouts.main')

@section('content')
    <h1>{{$activity->title}}</h1>
    <ul>
        @foreach($activity->timetable AS $action)
            <li>{{$action->datetime->format('j.n.Y \o\b G:i')}}<li>
        @endforeach
    </ul>
@endsection
