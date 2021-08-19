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
                {{ __('Usuario') }}
            </div>
            <div class="mt-3 mx-3">
                <a href="{{ route('admin.users.index', $user) }}"
                   class="btn btn-sm btn-primary">{{ __('Listado de usuarios') }}</a>
            </div>
            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        {{ __('Datos del usuario') }}
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">{{ __('Nombre') }}</label>
                            <input id="name" class="form-control" type="text" name="name" value="{{ $user->name }}"
                                   disabled>
                        </div>
                        <div class="form-group">
                            <label for="email">{{ __('Email') }}</label>
                            <input id="email" class="form-control" type="email" name="email"
                                   value="{{ $user->email }}" disabled>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection