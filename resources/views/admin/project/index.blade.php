@extends('layouts.app')

@section('content')
<div class="container">
    <a class="btn btn-warning m-3" href="{{route('project.create')}}">Add</a>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Tools</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                <tr class="">
                    <td scope="row">{{$project->title}}</td>
                    <td> {{$project->description}}</td>
                    <td> {{$project->slug}}</td>
                    <td class="d-flex">
                        <a class="btn btn-success m-3 w-75" href="{{route('project.show', $project->id)}}">Details</a>
                        <a class="btn btn-warning m-3 w-75" href="{{route('project.edit', $project->id)}}">Edit</a>
                        <form action="{{route('project.destroy', $project->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input class="btn btn-danger m-3 w-75" type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
                @empty
                <p>Ancora nessun fumetto!</p>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection