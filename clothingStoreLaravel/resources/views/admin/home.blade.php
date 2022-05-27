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
                    <div class="d-flex justify-content-center">
                    Successful login with administrator permissions.
                    </div>
                    <br>
                    <a class="d-flex justify-content-center " href="{{ route('admin.apparels.index')}}"> View All Apparels</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
