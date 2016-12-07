<!-- /resources/views/tasks/edit.blade.php -->
@extends('layouts.app')
@section('Sidebar', 'Units')
@section('title', 'Edit ' .$unit->name)
@section('content')
    <h2>Edit Unit "{{ $unit->name }}"</h2>

    {!! Form::model($unit, ['method' => 'PATCH', 'route' => ['properties.units.update', $property->id, $unit->id]]) !!}
    @include('units/partials/_form', ['submit_text' => 'Edit Unit'])
    {!! Form::close() !!}
@endsection