@extends('layout.app')

@section('content')
    <h1>A Customer</h1>

    {!! Form::open(['action' => ['customerController@update', $cust->custID], 'method' => 'put']) !!}

    <div class="form-group">
        {{ Form::label('firstName', 'first name', ['class' => 'control-label']) }}
        {{ Form::text('firstName', $cust->firstName, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('lastName', 'last name', ['class' => 'control-label']) }}
        {{ Form::text('lastName', $cust->lastName, ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('address', 'address', ['class' => 'control-label']) }}
        {{ Form::text('address', $cust->address, ['class' => 'form-control']) }}
    </div>
<div class="form-row">
    <div class="form-group col-md-6">
        {{ Form::label('city', 'city', ['class' => 'control-label']) }}
        {{ Form::text('city', $cust->city, ['class' => 'form-control']) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('state', 'state', ['class' => 'control-label']) }}
        {{ Form::text('state', $cust->state, ['class' => 'form-control']) }}
    </div>

    <div class="form-group col-md-3">
        {{ Form::label('zip', 'zip', ['class' => 'control-label']) }}
        {{ Form::text('zip', $cust->zip, ['class' => 'form-control']) }}
    </div>
</div>

    {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

    {!! Form::close() !!}
@endsection