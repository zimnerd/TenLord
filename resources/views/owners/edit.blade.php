<!-- /resources/views/tenants/edit.blade.php -->
@extends('layouts.app')
@section('title', 'Edit ' .$owner->name)
@section('Sidebar', 'Owners')

@section('content')

    {!! Form::model($owner, ['method' => 'PATCH', 'route' => ['properties.owners.update', $property->id, $owner->id]]) !!}
    @include('owners/partials/_form', ['submit_text' => 'Edit Owner'])
    {!! Form::close() !!}
@endsection

