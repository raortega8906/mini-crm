@extends('layouts.crm')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Solicitud de permisos') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (!auth()->user()->is_admin)
                            <div>
                                <form action="{{ route('permits.application') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-primary">
                                        {{ __('Solicitar permisos de administrador') }}
                                    </button>
                                </form>
                            </div>
                        @else
                            <div>
                                <p>
                                    {{ __('Ya tienes permisos de administrador') }}
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
