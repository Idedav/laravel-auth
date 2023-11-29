@extends('layouts.admin')

@section('content')
    <h1 class="my-3">Tecnologies:</h1>

    @if (session('error'))
        <div class="alert alert-danger" role="alert">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('admin.tecnologies.store') }}" method="POST">
        @csrf
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="New Tecnology..." id="name" name="name">
            <button class="btn btn-primary" type="sumbit" id="button-addon2">Add</button>
        </div>
    </form>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Tecnology</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tecnologies as $tecnology)
                <tr>
                    <td>{{ $tecnology->id }}</td>
                    <td>{{ $tecnology->name }}</td>
                    <td class="text-end">
                        <form action="{{ route('admin.tecnologies.destroy', $tecnology) }}" method="POST"
                            onsubmit="return confirm('Are you sure you want to delete {{ $tecnology->name }}?')">
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
