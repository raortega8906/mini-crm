@extends('layouts.crm')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}

                    <div>
                        <a href="{{ route('admin.companies.index') }}" class="btn btn-sm btn-primary mt-3">{{ __('Ir a la web') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
