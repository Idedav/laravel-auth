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
                    <td>
                        <form action="{{ route('admin.tecnologies.update', $tecnology) }}" method="POST"
                            id="form-edit-{{ $tecnology->id }}">
                            @csrf
                            @method('PUT')
                            <input class="custom-input" type="text" value="{{ $tecnology->name }}" name="name">
                        </form>
                    </td>
                    <td class="d-flex justify-content-end">
                        <button onclick="submitForm({{ $tecnology->id }})" class="btn btn-warning me-2"><i
                                class="fa-solid fa-pencil"></i></button>
                        @include('admin.partials.form-delete', [
                            'route' => route('admin.tecnologies.destroy', $tecnology),
                            'name' => $tecnology->name,
                        ])
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <script>
        function submitForm(id) {
            const form = document.getElementById('form-edit-' + id);
            form.submit();
        }
    </script>
@endsection
