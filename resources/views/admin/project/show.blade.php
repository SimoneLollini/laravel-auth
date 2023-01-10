@extends('layouts.app')

@section('content')
<section class="show vh-100 d-flex justify-content-center p-3">
    <div class="details"><img src="{{$project->image}}" alt=""></div>
    <h2 class="details">{{$project->title}}</h2>
    <p>{{$project->description}}</p>
</section>
@endsection