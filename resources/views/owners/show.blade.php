<!-- /resources/views/owners/show.blade.php -->
@extends('layouts.app')
@section('title', 'Owner Details for: ' .$owner->name )
@section('Sidebar', 'Owners')
@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection
@section('content')
<table class="table table-bordered table-striped table-hover">
    <tr>
        <td>Name</td>
        <td>{{ $owner->name }}</td>
    </tr>
    <tr>
        <td>Email</td>
        <td>{{ $owner->email }}</td>
    </tr>
    <tr>
        <td>Phone </td>
        <td>{{ $owner->phone }}</td>
    </tr>
    <tr>
        <td>Unit Name </td>
        <td>{{ $unit->name }}</td>
    </tr>
    <tr>
        <td>Property Name </td>
        <td>{{ $owner->property->name }}</td>
    </tr>

</table>
    {!! link_to_route('properties.units.owners.edit', 'Edit', array($property->id,$unit->id, $owner->id), array('class' => 'btn btn-info')) !!},

    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}


    <p>
        {!! link_to_route('properties.index', 'Back to Properties','', array('class' => 'btn btn-info')) !!}
    </p>



@endsection