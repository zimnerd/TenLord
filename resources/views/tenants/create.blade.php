<!-- /resources/views/tenants/create.blade.php -->
@extends('layouts.app')
@section('title', 'Create Tenant For ' .$unit->name)
@section('Sidebar', 'Tenants')

@section('content')
    <h2>Create Tenant for "{{ $property->name }}"</h2>

    {!! Form::model(new App\Tenant, ['route' => ['properties.units.tenants.store', $property->id,$unit->id], 'class'=>'']) !!}
    @include('tenants/partials/_form', ['submit_text' => 'Create Tenant'])
    {!! Form::close() !!}
@endsection



