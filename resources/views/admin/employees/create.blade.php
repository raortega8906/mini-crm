@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session('message'))
            <div class="alert alert-success" role="alert">
                {{ session('message') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <ul>
                        <li>
                            {{ $error }}
                        </li>
                    </ul>
                @endforeach
            </div>
        @endif

        <div class="card">
            <div class="card-header">
                {{ __('Nuevo Empleado') }}
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
                        <form action="{{ route('admin.companies.employees.store', $company) }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="name">{{ __('Nombre') }}</label>
                                <input id="name" class="form-control" type="text" name="name">
                            </div>
                            <div class="form-group">
                                <label for="last_name">{{ __('Apellidos') }}</label>
                                <input id="last_name" class="form-control" type="text" name="last_name">
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input id="email" class="form-control" type="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="phone">{{ __('Web') }}</label>
                                <input id="phone" class="form-control" type="text" name="phone">
                            </div>
                            <button type="submit" class="btn btn-sm btn-success">{{ __('Crear empleado') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
