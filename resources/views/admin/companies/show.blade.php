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
                {{ _('Empresa: ') }} {{ $company->name }}
            </div>

            <div>
                <a href="{{ route('admin.companies.index') }}"
                   class="btn btn-sm btn-primary mt-3 mx-3">{{ _('Listado de empresas') }}</a>
            </div>

            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        {{ _('Listado de empleados') }}
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <a href="{{ route('admin.companies.employees.create', $company) }}"
                               class="btn btn-sm btn-primary">{{ _('Crear nuevo empleado') }}
                            </a>
                        </div>

                        <table class="table table-light">
                            <thead class="thead-light">
                            <tr>
                                <th>{{ __('Nombre') }}</th>
                                <th>{{ __('Apellidos') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Teléfono') }}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($employees as $employee)
                                <tr>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->last_name }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->phone }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('admin.companies.employees.show', [$company, $employee]) }}"
                                               class="btn btn-sm btn-primary mx-1">
                                                {{ __('Ver') }}
                                            </a>
                                            <a href="{{ route('admin.companies.employees.edit', [$company, $employee]) }}"
                                               class="btn btn-sm btn-success mx-1">
                                                {{ __('Editar') }}
                                            </a>
                                            <form
                                                action="{{ route('admin.companies.employees.destroy', [$company, $employee]) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger mx-1"
                                                        onclick="return confirm('Eliminar el empleado definitivamente')">
                                                    {{ __('Eliminar') }}
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">{{ __('No hay empleados registrados') }}</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="ml-3">
                {{ $employees->links() }}
            </div>
        </div>
    </div>
@endsection
