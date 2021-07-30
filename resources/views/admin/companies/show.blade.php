@extends('layouts.app')

@section('content')
    
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                {{ _('Datos de la empresa') }}
            </div>

            <div>
                <a href="{{ route('admin.companies.index') }}" class="btn btn-sm btn-primary mt-3 mx-3">{{ _('Listado de empresas') }}</a>
            </div>

            <div class="card-body">
                <div class="card">
                    <div class="card-header">
                        {{ _('Empresa') }}
                    </div>
                    <div class="card-body">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection