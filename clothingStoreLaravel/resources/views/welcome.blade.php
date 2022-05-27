@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="d-flex justify-content-center">
                        Welcome to OutOfMindClothing
                    </div>
                    <div class="d-flex justify-content-center">
                        <br>
                        <a href="{{route('user.apparels.index')}}">To the Apparel</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
