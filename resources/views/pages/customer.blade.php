@extends('layout.app')

@section('content')
    <h1>{{$customer->firstName}} {{$customer->lastName}}</h1>

    <p>{{$customer->address}}</p>
    <p>{{$customer->city}}, {{$customer->state}}, {{$customer->zip}}</p>

    <div class="row">
        <div class="col-md-1">
            <a href="/customers/{{$customer->custID}}/edit" class="btn btn-primary">Edit</a>
        </div>

        <div class="col-md-1">
            {!! Form::open(['action' => ['customerController@destroy', $customer->custID], 'method' => 'delete']) !!}

            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

            {!! Form::close() !!}
        </div>
    </div>

    
@endsection