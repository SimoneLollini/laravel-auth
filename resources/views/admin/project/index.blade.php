@extends('layouts.app')

@section('content')

@foreach($projects as $project)

<h2>
    {{$project->title}}
</h2>

@endforeach

@endsection