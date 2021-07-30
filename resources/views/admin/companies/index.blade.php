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
                {{ _('Empresas') }}
            </div>

            <div>
                <a href="{{ route('admin.companies.create') }}"
                    class="btn btn-sm btn-primary mt-3 mx-3">{{ _('Crear nueva empresa') }}</a>
            </div>

            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        {{ _('Listado de empresas') }}
                    </div>
                    <div class="card-body">
                        <table class="table table-light">
                            <thead class="thead-light">
                                <tr>
                                    <th>{{ _('Nombre') }}</th>
                                    <th>{{ _('Email') }}</th>
                                    <th>{{ _('Web') }}</th>
                                    <th>{{ _('Logo') }}</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($companies as $company)
                                    <tr>
                                        <td>{{ $company->name }}</td>
                                        <td>{{ $company->email }}</td>
                                        <td>{{ $company->website }}</td>
                                        <td>{{ $company->logo }}</td>
                                        <td class="d-flex">
                                            <a href="{{ route('admin.companies.show', $company) }}"
                                                class="btn btn-sm btn-primary mx-1">{{ _('Ver') }}</a>
                                            <a href="{{ route('admin.companies.edit', $company) }}"
                                                class="btn btn-sm btn-success mx-1">{{ _('Editar') }}</a>
                                            <form action="{{ route('admin.companies.destroy', $company) }}"
                                                method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger mx-1"
                                                    onclick="return confirm('Eliminar empresa definitivamente')">
                                                    {{ _('Eliminar') }}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">{{ _('No hay empresas registradas') }}</td>
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
