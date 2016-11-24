<!-- /resources/views/propertys/index.blade.php -->
@extends('layouts.app')
@section('title', $property->name .' Tenants')
@section('Sidebar', 'Tenants')

@section('content')


    <h2>Property has {{ $property->tenants->count() }} tenants</h2>



    @if (count($property->tenants) == 0)
        Your Unit has no tenants.

    @else
        <ul>
            @foreach( $property->tenants as $tenant )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('property.tenants.destroy', $property->id, $tenant->id))) !!}
                    <a href="{{ route('property.tenant.show', [$property->id, $tenant->id]) }}">{{ $tenant->name }}</a>

                    {!! link_to_route('properties.tenants.edit', 'Edit', array($property->id, $tenant->id), array('class' => 'btn btn-info')) !!},

                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}

                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('properties.index', 'Back to Units') !!} |
        {!! link_to_route('properties.tenants.create', 'Create Tenant', $property->id) !!}
    </p>
@endsection