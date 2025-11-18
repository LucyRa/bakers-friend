@extends('layout.app')

@section('title', 'Welcome')

@section('main')
<table class="table">
    @if(!$ingredients->isEmpty())
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Unit</th>
            <th>$nbsp;</th>
        </tr>
    </thead>

    <tbody>
        @foreach($ingredients as $ingredient)
        <tr>
            <td>{{ $ingredient->name }}</td>
            <td>{{ $ingredient->type }}</td>
            <td>{{ $ingredient->unit }}</td>
            <td>
                <a href="{{ route('ingredients.show', $ingredient) }}">View</a>
                <a href="{{ route('ingredients.edit', $ingredient) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    @endif
</table>
@endsection
