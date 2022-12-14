@extends('layouts.app')

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
                    <div class="text-center">
                        <p class="pt-3">{{ $data1 }}</p>
                        <p>{{ $data2 }}</p>
                        <p>{{ $data3 }}</p>
                        <hr />
                        <p class="pt-3">{{ $opj->data1 }}</p>
                        <p>{{ $opj->data2 }}</p>
                        <p>{{ $opj->data3 }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
