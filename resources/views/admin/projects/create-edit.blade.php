@extends('layouts.admin')


@section('content')
    <h1>{{ $title }}</h1>

    <form action="{{ $route }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method($method)
        <div class="mb-3">
            <label for="name" class="form-label">Project Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $project?->name) }}">
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="form-control" id="image" name="image"
                value="{{ old('image', $project?->image) }}">
        </div>
        <div class="mb-3">
            <label for="description">Description:</label>
            <textarea class="form-control" placeholder="Leave a description here" id="description" name="description"
                style="height: 100px">{{ old('description', $project?->description) }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Confirm</button>
        <button type="reset" class="btn btn-secondary">Cancel</button>
    </form>
@endsection
