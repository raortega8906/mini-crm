@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        @if (session('message'))
            <div class="alert alert-danger" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                {{ __('Empresas') }}
            </div>

            <div>
                <a href="{{ route('admin.companies.create') }}"
                   class="btn btn-sm btn-primary mt-3 mx-3">{{ __('Crear nueva empresa') }}</a>
            </div>

            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        {{ __('Listado de empresas') }}
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-light">
                            <thead class="thead-light">
                            <tr>
                                <th>{{ __('Nombre') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Web') }}</th>
                                <th>{{ __('Logo') }}</th>
                                <th>{{ __('Cant. Empleados') }}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($companies as $company)
                                <tr>
                                    <td>{{ $company->name }}</td>
                                    <td>{{ $company->email }}</td>
                                    <td>{{ $company->website }}</td>
                                    <td>
                                        @if ($company->logo)
                                            <a href="{{ asset('images/' . $company->logo) }}">
                                                <img class="img-thumbnail"
                                                     src="{{ asset('images/' . $company->logo) }}" alt="" width="100"
                                                     height="">
                                            </a>
                                        @else
                                            {{ __('Sin logo') }}
                                        @endif
                                    </td>
                                    <td>
                                        @if ($company->employees->count() == 0)
                                            {{ __('Sin empleados') }}
                                        @elseif ($company->employees->count() == 1)
                                            {{ $company->employees->count().__(' empleado') }}
                                        @else
                                            {{ $company->employees->count().__(' empleados') }}
                                        @endif
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.companies.show', $company) }}"
                                           class="btn btn-sm btn-primary mx-1">{{ __('Ver') }}</a>
                                        <a href="{{ route('admin.companies.edit', $company) }}"
                                           class="btn btn-sm btn-success mx-1">{{ __('Editar') }}</a>
                                        <form action="{{ route('admin.companies.destroy', $company) }}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger mx-1"
                                                    onclick="return confirm('Eliminar empresa definitivamente')">
                                                {{ __('Eliminar') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">{{ __('No hay empresas registradas') }}</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="ml-3">
                {{ $companies->links() }}
            </div>
        </div>
    </div>

@endsection
