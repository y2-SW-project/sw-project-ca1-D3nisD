@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
 
Welcome You have successfully logged in
                    <br>
                    <a href="{{route('user.apparels.index')}}"> View All apparels</a>
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
