<!-- /resources/views/properties/create.blade.php -->
@extends('layouts.app')
@section('title', 'Add Property')
@section('Sidebar', 'Properties')
@section('content')
    <h2>Create Property</h2>

    {!! Form::model(new App\Property, ['route' => ['properties.store']]) !!}
    @include('properties/partials/_form', ['submit_text' => 'Create Property'])
    {!! Form::close() !!}
@endsection
