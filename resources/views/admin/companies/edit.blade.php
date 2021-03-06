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
                {{ __('Editar empresa') }}
            </div>

            <div>
                <a href="{{ route('admin.companies.index') }}"
                   class="btn btn-sm btn-primary mt-3 mx-3">{{ __('Listado de empresas') }}</a>
            </div>

            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        {{ __('Datos de la empresa') }}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.companies.update', $company) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">{{ __('Nombre') }}</label>
                                <input id="name" class="form-control" type="text" name="name"
                                       value="{{ $company->name }}">
                            </div>
                            <div class="form-group">
                                <label for="email">{{ __('Email') }}</label>
                                <input id="email" class="form-control" type="email" name="email"
                                       value="{{ $company->email }}">
                            </div>
                            <div class="form-group">
                                <label for="website">{{ __('Web') }}</label>
                                <input id="website" class="form-control" type="url" name="website"
                                       value="{{ $company->website }}">
                            </div>
                            <div class="form-group">
                                <label for="logo">{{ __('Logo') }}</label>
                                <input id="logo" class="form-control" type="file" name="logo"
                                       value="{{ $company->logo }}">
                            </div>
                            <button type="submit"
                                    class="btn btn-sm btn-success">{{ __('Actualizar la empresa') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
