<!-- /resources/views/units/index.blade.php -->
@extends('layouts.app')
@section('title', $property->name .' Units')
@section('Sidebar', 'Units')
@section('content')


    <h2>Property has {{ $property->units->count() }} units</h2>



    @if (count($property->units) == 0)
        Your property has no units.

    @else
        <ul>
            @foreach( $property->units as $unit )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('properties.units.destroy', $property->id, $unit->id))) !!}
                    <a href="{{ route('properties.units.show', [$property->id, $unit->id]) }}">{{ $unit->name }}</a>

                    {!! link_to_route('properties.units.edit', 'Edit', array($property->id, $unit->id), array('class' => 'btn btn-info')) !!},

                    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}

                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif

    <p>
        {!! link_to_route('properties.index', 'Back to Properties') !!} |
        {!! link_to_route('properties.units.create', 'Create Unit', $property->id) !!}
    </p>
@endsection