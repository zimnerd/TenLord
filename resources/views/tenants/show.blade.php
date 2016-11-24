<!-- /resources/views/tenant/show.blade.php -->
@extends('layouts.app')
@section('title', $tenant->name .' Tenant Details')
@section('Sidebar', 'Tenants')
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection
@section('content')

    <p>{{ $tenant->name }}</p>
    {!! link_to_route('properties.tenants.edit', 'Edit', array($property->id, $tenant->id), array('class' => 'btn btn-info')) !!},

    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}


    <p>
        {!! link_to_route('properties.index', 'Back to Properties') !!}
    </p>



@endsection