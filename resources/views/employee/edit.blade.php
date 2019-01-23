@extends('layout')

@section('content')
    {!! Form::model($employee, ['route' => ['employees.update', $employee->id], 'method' => 'put']) !!}
    @include('employee.fields')
    {!! Form::close() !!}
@endsection