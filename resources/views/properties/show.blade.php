<!-- /resources/views/properties/show.blade.php -->
@extends('layouts.app')
@section('title', 'View '.$property->name. ' propery details' )
@section('Sidebar', 'Properties')
@section('sidebar')
    @parent
    <div><span class="glyphicon glyphicon-home"></span> <a href="{{ route('properties.index', [$property->id]) }}">{{ ' ' .$property->count() . ' properties in total' }}</a></div>
    @foreach( $properties as $propert )

            @if($propert->photos != null)
                <h3>{{ $propert->name }}</h3>
                <div class="col-md-12 featured" > <a href="{{ route('properties.show', $propert->id) }}"><img src="/images/properties/{{ $propert->photos }}"></a></div>
            @else
                <div class="col-md-12 featured" > <a href="{{ route('properties.show', $propert->id) }}"><img src="/images/properties/Home.png"></a></div>
            @endif
    @endforeach
   <div> {{ $properties->links() }}</div>
@endsection
@section('content')

<div class="row property-header">
    <h4 class="page-header">Property has {{ $property->units->count() }} units</h4>


@if($property->photos != null)
        <div class="col-md-6 header-image" ><img src="/images/properties/{{ $property->photos }}"></div>
    @else
        <div class="col-md-6 header-image" ><img src="/images/properties/Home.png"></div>
    @endif
<div class="col-md-6">

    <div> <span class="glyphicon glyphicon-bed"> Units: </span> {{'  ' . $property->units->count()}} </div>
    <div><span class="glyphicon glyphicon-check"> Type: </span>{{'  ' .$property->type }}</div>
    <div><span class="glyphicon glyphicon-globe"> Country: </span>{{'  ' .$property->country }}</div>
    <div><span class="glyphicon glyphicon-map-marker"> City: </span>{{'  ' .$property->city }}</div>
    <div><span class="glyphicon glyphicon-calendar"> Date Added: </span>  {{'  ' .$property->created_at }}</div>
</div>

</div>


        @if (count($property->units) == 0)
        Your property has no units.

    @else
            @foreach( $property->units as $unit )


                <div class="tenlist row">
                <div class="col-md-12 units">
                        {!! Form::open(['method' => 'DELETE',
                               'route' => ['properties.units.destroy', $property->id, $unit->id]]) !!}
                    <div class="unit"><span class="glyphicon glyphicon-bed"> </span><a href="{{ route('properties.units.show', [$property->id, $unit->id]) }}">{{ ' ' .$unit->name }}</a>
                        {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger pull-right')) !!}
                        {!! link_to_route('properties.units.edit', 'Edit', array($property->id, $unit->id), array('class' => 'btn btn-xs btn-info pull-right')) !!}


       @if($unit->tenants->isEmpty()) {!! link_to_route('properties.units.tenants.create', 'Add Tenant', [$property->id,$unit->id], array('class' => 'btn btn-success btn-xs pull-right')) !!} 
       @endif

       @if(!$unit->owner) {!! link_to_route('properties.units.owners.create', 'Add Owner', [$property->id,$unit->id], array('class' => 'btn btn-warning btn-xs pull-right')) !!}
 
      
       @endif


                            {!! Form::close() !!}</div>
@if(!$unit->tenants->isEmpty())
                            @foreach ($unit->tenants as $roja)


                            {!! Form::open(['method' => 'DELETE',
                               'route' => ['properties.units.tenants.destroy', $property->id, $unit->id,$roja->id]]) !!}

                             <div class="tenant"><span class="glyphicon glyphicon-user"> </span><a href="{{ route('properties.units.tenants.show', [$property->id, $unit->id,$roja->id]) }}">{{' ' .$roja->name }}</a>
                             

                             {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger pull-right')) !!}
                        {!! link_to_route('properties.units.tenants.edit', 'Edit', array($property->id, $unit->id,$roja->id), array('class' => 'btn btn-xs btn-info pull-right')) !!}


             {!! Form::close() !!}</div>

    
  @endforeach

  @else

<p><span class="glyphicon glyphicon-remove danger text-danger"></span> There is no tenant</p>
  @endif

                    @if($unit->owner)
@foreach( $property->owners as $landlord )

 @if($landlord->unit_id == $unit->id)



{!! Form::open(['method' => 'DELETE',
                               'route' => ['properties.units.owners.destroy', $property->id, $unit->id,$landlord->id]]) !!}

                             <div class="owners"><span class="glyphicon glyphicon-sunglasses"> </span><a href="{{ route('properties.units.owners.show', [$property->id, $unit->id,$landlord->id]) }}">{{' ' .$landlord->name }}</a>
                             

                             {!! Form::submit('Delete', array('class' => 'btn btn-xs btn-danger pull-right')) !!}
                        {!! link_to_route('properties.units.owners.edit', 'Edit', array($property->id, $unit->id,$landlord->id), array('class' => 'btn btn-xs btn-info pull-right')) !!}


             {!! Form::close() !!}</div>


 @endif


 @endforeach

                        @else
                        <p><span class="glyphicon glyphicon-remove danger text-danger"></span> There is no Owner</p>
                    @endif


</div>

                </div>
 

            @endforeach


    @endif

<hr>



    <p>
        {!! link_to_route('properties.index', 'Back to Properties','', array('class' => 'btn btn-info')) !!} |
        {!! link_to_route('properties.edit', 'Edit Property', $property->id, array('class' => 'btn btn-primary')) !!} |
        {!! link_to_route('properties.units.create', 'Create Unit', array($property->id,$unit->id), array('class' => 'btn btn-success')) !!}
    </p>

@endsection