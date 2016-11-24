
<!-- /resources/views/properties/edit.blade.php -->
@extends('layouts.app')
@section('title', 'Edit Property')
@section('Sidebar', 'Properties')
@section('content')
    <h2>Edit Property</h2>

    {!! Form::model($property, ['method' => 'PATCH', 'route' => ['properties.update', $property->id]]) !!}
    @include('properties/partials/_form', ['submit_text' => 'Edit Property'])
    {!! Form::close() !!}
@endsection