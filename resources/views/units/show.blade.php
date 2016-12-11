<!-- /resources/views/unit/show.blade.php -->
@extends('layouts.app')
@section('title', $unit->name .' @'.$property->name. ' Property')
@section('Sidebar', 'Units')
@section('sidebar')
    @parent
    <div><span class="glyphicon glyphicon-bed"></span> <a href="{{ route('properties.show', [$property->id]) }}">{{ ' ' .$property->units->count() . ' units in total' }}</a></div>
@endsection
@section('content')
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <h4 class="page-header">Unit Details</h4>

    <td>Unit name</td>
            <td>{{ $unit->name }}</td>
            </tr>
        <tr>
    <td>Unit Number</td>
            <td>{{ $unit->unit_number }}</td>
        </tr>
        <tr>
    <td>Rent Amount</td>

            <td>R{{ $unit->rental_amount }}</td>
        </tr>
        <tr>
    <td>Deposit</td>

            <td>{{ $unit->deposit }}</td>
        </tr>
        <tr>
    <td>Bedrooms</td>

            <td> {{ $unit->bedrooms }}</td>
        </tr>
        <tr>
    <td>Bathrooms</td>
            <td>{{ $unit->bathrooms }}</td>
</tr>
        </table>
    @if($tenant)
        <table class="table table-bordered table-striped table-hover">
            <tr>
<h4 class="page-header">Tenant Details</h4>
    <td>Unit Name</td></td>
                <td>{{ $tenant->name }}</td></td>
            </tr>
            <tr>
    <td>Email</td>
                <td>{{ $tenant->email }}</td>
            </tr>
            <tr>
    <td>Phone</td>
                <td>{{ $tenant->phone }}</td>
            </tr>
            <tr>
    <td>Next of Kin</td>
                <td>{{ $tenant->next_of_kin }}</td>
            </tr>
            <tr>
    <td>Company</td>
                <td>{{ $tenant->company_name }}</td>
            </tr>
            <tr>
    <td>Application status</td>
                <td>{{ $tenant->application }}</td>
                </tr>
            </table>
@else
        <p class="alert-warning">No Tenant allocated</p>

        <p>

            {!! link_to_route('properties.units.tenants.create', 'Add Tenant', [$property->id,$unit->id], array('class' => 'btn btn-success')) !!}
        </p>

        @endif
    {!! link_to_route('properties.index', 'Back to Properties','', array('class' => 'btn btn-info')) !!} |
    {!! link_to_route('properties.units.edit', 'Edit', array($property->id, $unit->id), array('class' => 'btn btn-info')) !!} |
    {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}








@endsection