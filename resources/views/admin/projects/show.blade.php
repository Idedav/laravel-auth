@extends('layouts.admin')

@section('content')
    <h1 class="my-5">Project detail:</h1>
    <h4>{{ $project->name }}</h4>
    <div class="w-50">
        <img src="{{ asset('storage/' . $project->image) }}" alt="">
    </div>
    <p>{{ $project->description }}</p>
@endsection
