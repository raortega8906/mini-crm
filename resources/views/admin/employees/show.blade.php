@extends('layouts.crm')

@section('content')
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                {{ __('Empleado') }}
            </div>
            <div class="mt-3 mx-3">
                <a href="{{ route('admin.companies.show', $company) }}"
                   class="btn btn-sm btn-primary">{{ __('Listado de empleados') }}</a>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        {{ __('Datos del empleado') }}
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">{{ __('Nombre') }}</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $employee->name }}"
                                   disabled>
                        </div>
                        <div class="form-group">
                            <label for="last_name">{{ __('Apellidos') }}</label>
                            <input id="last_name" class="form-control" type="text" name="last_name"
                                   value="{{ $employee->last_name }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" class="form-control" type="email" name="email"
                                   value="{{ $employee->email }}" disabled>
                        </div>
                        <div class="form-group">
                            <label for="phone">{{ __('Web') }}</label>
                            <input id="phone" class="form-control" type="text" name="phone"
                                   value="{{ $employee->phone }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
