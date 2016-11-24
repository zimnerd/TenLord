<!-- /resources/views/tasks/create.blade.php -->
@extends('layouts.app')
@section('Sidebar', 'Units')
@section('title', 'Create Units for ' .$property->name)
@section('content')
    <h2>Create Unit for "{{ $property->name }}"</h2>

    {!! Form::model(new App\Unit, ['route' => ['properties.units.store', $property->id], 'class'=>'']) !!}
    @include('units/partials/_form', ['submit_text' => 'Create Unit'])
    {!! Form::close() !!}
@endsection

