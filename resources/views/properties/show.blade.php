<!-- /resources/views/properties/show.blade.php -->
@extends('layouts.app')
@section('title', 'View '.$property->name. ' `propery details' )
@section('Sidebar', 'Properties')
@section('content')


    <h3>Property has {{ $property->units->count() }} units</h3>



        @if (count($property->units) == 0)
        Your property has no units.

    @else
            @foreach( $property->units as $unit )
                <div class="tenlist row"><div class="col-md-12 ">
                        {!! Form::open(['method' => 'DELETE',
                               'route' => ['properties.units.destroy', $property->id, $unit->id]]) !!}
                    <a href="{{ route('properties.units.show', [$property->id, $unit->id]) }}">{{ $unit->name }}</a>
                        {!! Form::submit('Delete', array('class' => 'btn btn-danger pull-right')) !!}
                        {!! link_to_route('properties.units.edit', 'Edit', array($property->id, $unit->id), array('class' => 'btn btn-info pull-right')) !!}
                            {!! Form::close() !!}

</div>

                </div>


            @endforeach

    @endif

<hr>


    <h3>Property has {{ $property->tenants->count() }} tenants</h3>



    @if (count($property->tenants) == 0)
        Your property has no tenants.

    @else
        @foreach( $property->tenants as $tenant )
            <div class="tenlist row">
                <div class="col-md-12">
                    {!! Form::open(['method' => 'DELETE',
                       'route' => ['properties.tenants.destroy', $property->id, $tenant->id]]) !!}
                    <a href="{{ route('properties.tenants.show', [$property->id, $tenant->id]) }}">{{ $tenant->name }}</a>
                  {{  'Unit Number: ' .$tenant->unit_id}}
                    {!! Form::submit('Delete', array('class' => 'btn btn-danger pull-right')) !!}
                     {!! link_to_route('properties.tenants.edit', 'Edit', array($property->id, $tenant->id), array('class' => 'btn btn-info pull-right')) !!}

                        {!! Form::close() !!}
                    </div>
            </div>


        @endforeach

    @endif

    <hr>















    <p>
        {!! link_to_route('properties.index', 'Back to Properties') !!} |
        {!! link_to_route('properties.units.create', 'Create Unit', $property->id) !!} |
        {!! link_to_route('properties.tenants.create', 'Add Tenant', $property->id) !!}
    </p>

@endsection