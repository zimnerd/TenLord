<!-- /resources/views/properties/index.blade.php -->
@extends('layouts.app')
@section('title', 'Properties')
@section('Sidebar', 'Properties')
@section('content')
    <h2>Properties</h2>

    @if ( !$properties->count() )
        You have no properties
    @else

            @foreach( $properties as $property )

                <div class="tenlist row">
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('properties.destroy', $property->id))) !!}
                    <div class="col-md-12 "> <a href="{{ route('properties.show', $property->id) }}">{{ $property->name }}</a>{{' ' . $property->units->count() .' Units'}}

                        {!! Form::submit('Delete', array('class' => 'btn btn-danger pull-right')) !!}
                        {!! link_to_route('properties.edit', 'Edit', array($property->id), array('class' => 'btn btn-info pull-right')) !!}



                    {!! Form::close() !!}</div>
                </div>
            @endforeach

    @endif

    <p>
        {!! link_to_route('properties.create', 'Create Property') !!}
    </p>
@endsection








