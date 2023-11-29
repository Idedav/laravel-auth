@extends('layouts.admin')

@section('content')
    <h1>Projects:</h1>
    {{ $projects->links() }}

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->description }}</td>
                    <td class="d-flex"><a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary me-2"><i
                                class="fa-solid fa-eye"></i></a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete {{ $project->name }}?')">
                            @csrf
                            @method('DELETE')
                            <button type="sumbit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
