<!-- /resources/views/owners/create.blade.php -->
@extends('layouts.app')
@section('Sidebar', 'Owners')

@section('content')
    <h2>Create Owner for "{{ $property->name }}"</h2>

    {!! Form::model(new App\Owner, ['route' => ['properties.units.owners.store', $property->id,$unit->id], 'class'=>'']) !!}
    @include('owners/partials/_form', ['submit_text' => 'Create Owner'])
    {!! Form::close() !!}
@endsection



