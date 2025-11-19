@extends('layout.app')

@section('title', 'Welcome')

@section('main')
@if(!$ingredients->isEmpty())
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Type</th>
            <th>Unit</th>
            <th class="cell-actions"><a href="{{ route('ingredients.create') }}">Create</a></th>
        </tr>
    </thead>

    <tbody>
        @foreach($ingredients as $ingredient)
        <tr>
            <td>{{ $ingredient->name }}</td>
            <td class="tag tag--cell">{{ $ingredient->type }}</td>
            <td>{{ $ingredient->unit }}</td>
            <td class="cell-actions">
                <a href="{{ route('ingredients.edit', $ingredient) }}">View/Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection
