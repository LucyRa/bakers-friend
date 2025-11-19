@php
    use App\Enums\IngredientType;
    use App\Enums\IngredientUnit;
@endphp

@extends('layout.app')

@section('title', 'Edit Ingredient')

@section('main')
    <section class="form">
        <div class="header"><h1>{{ $ingredient->name }}</h1></div>

        <form id="edit-ingredient"
              method="POST"
              action="{{ route('ingredients.update', ['ingredient' => $ingredient]) }}"
        >
            @csrf
            @method('PATCH')
            {{--    Edit Ingredient    --}}

            <div class="field field--input">
                <label for="name">Name</label>

                <input id="name"
                       type="text"
                       name="name"
                       value="{{ old('name', $ingredient->name) }}"
                />

                @error('name')
                <div class="error error--field">
                    <p>{{ $message }}</p>
                </div>
                @enderror
            </div>

            <div class="field field--select">
                <label for="type">Type</label>

                <select id="type" name="type">
                    @foreach(IngredientType::cases() as $type)
                        <option
                            value="{{ $type->value }}"
                            @selected($type->value == $ingredient->type)
                        >{{ $type->name }}</option>
                    @endforeach
                </select>

                @error('type')
                <div class="error error--field">
                    <p>{{ $message }}</p>
                </div>
                @enderror
            </div>

            <div class="field field--select">
                <label for="unit">Unit</label>

                <select id="unit" name="unit">
                    @foreach(IngredientUnit::cases() as $unit)
                        <option
                            value="{{ $unit->value }}"
                            @selected($unit->value == $ingredient->unit)
                        >{{ $unit->name }}</option>
                    @endforeach
                </select>

                @error('unit')
                <div class="error error--field">
                    <p>{{ $message }}</p>
                </div>
                @enderror
            </div>

            <ul class="action-list">
                <li><button class="btn">Save</button></li>
            </ul>
        </form>
    </section>
@endsection
