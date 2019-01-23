@extends('layout')

@section('content')
    {!! Form::open(['route' => ['employees.store'], 'method' => 'post'])  !!}
    @include('employee.fields')
    {!! Form::close() !!}
@endsection