<!-- /resources/views/propertys/index.blade.php -->
@extends('layouts.app')
@section('title', $property->name .' Owners')
@section('Sidebar', 'Owners')

@section('content')






    @if (count($property->owners) == 0)
        Your Property has no owner.

    @else
        <ul>
            @foreach( $property->owners as $owner )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('property.owners.destroy', $property->id, $owner->id))) !!}
                    <a href="{{ route('property.owner.show', [$property->id, $owner->id]) }}">{{ $owner->name }}</a>

                    {!! link_to_route('properties.owners.edit', 'Edit', array($property->id, $tenant->id), array('class' => 'btn btn-info')) !!},

                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}

                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('properties.index', 'Back to Units') !!} |
        {!! link_to_route('properties.owners.create', 'Create Owner', $property->id, array('class' => 'btn btn-info')) !!}
    </p>
@endsection