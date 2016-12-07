<!-- /resources/views/properties/index.blade.php -->
@extends('layouts.app')
@section('title', 'Properties Listing')
@section('Sidebar', 'Quick Links')
@section('content')

    @if ( !$properties->count() )
        You have no properties
    @else
            @foreach( $properties as $property )


                <div class="tenlist row">


                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('properties.destroy', $property->id))) !!}

                        @if($property->photos != null)
                            <div class="col-md-3 featured" ><img src="/images/properties/{{ $property->photos }}"></div>
                        @else
                            <div class="col-md-3 featured" ><img src="/images/properties/Home.png"></div>
                        @endif


                        <span class="glyphicon glyphicon-home"> Name: </span> <a href="{{ route('properties.show', $property->id) }}"> {{  $property->name .' '}}</a>

                        {!! Form::submit('Delete', array('class' => 'btn btn-danger btn-xs pull-right')) !!}
                        {!! link_to_route('properties.edit', 'Edit', array($property->id), array('class' => 'btn btn-xs btn-info pull-right')) !!}

                    {!! Form::close() !!}

                       <div> <span class="glyphicon glyphicon-bed"> Units: </span> {{'  ' . $property->units->count()}} </div>
                        <div><span class="glyphicon glyphicon-check"> Type: </span>{{'  ' .$property->type }}</div>
                        <div><span class="glyphicon glyphicon-globe"> Country: </span>{{'  ' .$property->country }}</div>
                        <div><span class="glyphicon glyphicon-map-marker"> City: </span>{{'  ' .$property->city }}</div>
                        <div><span class="glyphicon glyphicon-calendar"> Date Added: </span>  {{'  ' .$property->created_at }}</div>


                </div>

            @endforeach

            {{ $properties->links() }}
    @endif

    <p>
        {!! link_to_route('properties.create', 'Create Property','', array('class' => 'btn btn-info')) !!}
    </p>

@endsection








