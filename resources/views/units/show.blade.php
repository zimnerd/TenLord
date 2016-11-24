<!-- /resources/views/unit/show.blade.php -->
@extends('layouts.app')
@section('title', $unit->name .' @'.$property->name. ' Property')
@section('Sidebar', 'Units')
@section('content')

    <p>Unit name: {{ $unit->name }}</p>
    <p>Unit Number: {{ $unit->unit_number }}</p>
    <p>Rent Amount: R{{ $unit->rental_amount }}</p>
    <p>Deposit: R{{ $unit->deposit }}</p>
    <p>Bedrooms: {{ $unit->bedrooms }}</p>
    <p>Bathrooms: {{ $unit->bathrooms }}</p>

    @if($tenant)
<h4 class="page-header">Tenant Details</h4>
    <p>Name: {{ $tenant->name }}</p>
    <p>Email: {{ $tenant->email }}</p>
    <p>Phone: {{ $tenant->phone }}</p>
    <p>NoK: {{ $tenant->next_of_kin }}</p>
    <p>Company: {{ $tenant->company_name }}</p>
    <p>Application status: {{ $tenant->application }}</p>
@else
        <p class="alert-warning">No Tenant allocated</p>

        @endif
    {!! link_to_route('properties.units.edit', 'Edit', array($property->id, $unit->id), array('class' => 'btn btn-info')) !!},

    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}








@endsection