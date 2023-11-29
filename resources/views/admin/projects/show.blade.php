@extends('layouts.admin')

@section('content')
    <h1 class="my-5">Project detail:</h1>
    <h4>{{ $project->name }}</h4>
    <p>{{ $project->description }}</p>
@endsection
