@extends('layout')

@section('content')
    <form class="form-horizontal">
        <div class="form-group">
            <label class="col-sm-2 control-label">Tên</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" disabled value="{{ $employee->name }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" disabled value="{{ $employee->email }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Địa chỉ</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" disabled value="{{ $employee->address }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Trạng thái</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" disabled value="{{ $employee->status }}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label"></label>
            <div class="col-sm-10">
                <a href="{!! route('employees.index') !!}" class='btn btn-primary'>Trở về</a>
            </div>
        </div>
    </form>
@endsection