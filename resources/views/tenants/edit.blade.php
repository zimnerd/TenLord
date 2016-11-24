<!-- /resources/views/tenants/edit.blade.php -->
@extends('layouts.app')
@section('title', 'Edit ' .$tenant->name)
@section('Sidebar', 'Tenants')

@section('content')

    {!! Form::model($tenant, ['method' => 'PATCH', 'route' => ['properties.tenants.update', $property->id, $tenant->id]]) !!}
    @include('tenants/partials/_form', ['submit_text' => 'Edit Tenant'])
    {!! Form::close() !!}
@endsection

