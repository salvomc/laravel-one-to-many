@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('You're logged in!') }}
                    </div>
                </div>
            </div>
            <div class="col-1  text-center my-5">
                <a href="{{ Route('admin.posts.index') }}" class="btn btn-primary">Projects</a>
            </div>
        </div>
    </div>
@endsection