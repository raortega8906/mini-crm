@extends('layouts.crm')

@section('content')

    <div class="container-fluid">
        @if (session('message'))
            <div class="alert alert-danger" role="alert">
                {{ session('message') }}
            </div>
        @endif
        <div class="card">
            <div class="card-header">
                {{ __('Usuarios') }}
            </div>

            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        {{ __('Listado de usuarios') }}
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-light">
                            <thead class="thead-light">
                            <tr>
                                <th>{{ __('Nombre') }}</th>
                                <th>{{ __('Email') }}</th>
                                <th>{{ __('Rol') }}</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($users as $user)
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>
                                        @if ($user->is_admin)
                                            {{ __('Administrador') }}
                                        @else
                                            {{ __('Empleado') }}
                                        @endif
                                    </td>
                                    <td class="d-flex">
                                        <a href="{{ route('admin.users.show', $user) }}"
                                           class="btn btn-sm btn-primary mx-1">{{ __('Ver') }}</a>
                                           <a href="{{ route('admin.users.edit', $user) }}"
                                           class="btn btn-sm btn-success mx-1">{{ __('Editar') }}</a>
                                        <form action="{{ route('admin.users.destroy', $user) }}"
                                              method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger mx-1"
                                                    onclick="return confirm('Eliminar usuario definitivamente')">
                                                {{ __('Eliminar') }}
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">{{ __('No hay usuarios registrados') }}</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="ml-3">
                {{ $users->links() }}
            </div>
        </div>
    </div>

@endsection
