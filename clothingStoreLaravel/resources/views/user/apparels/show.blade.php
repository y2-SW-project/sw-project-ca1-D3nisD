@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header d-flex justify-content-center">Apparel: {{$apparel->name}}</div>
                <div class="card-body">
                    <table id="table-apparels" class="table table-hover">
                    <tbody>
                  <tr>
                      <td rowspan="8"><img src="{{ asset('storage/images/' . $apparel->image_name) }}" width="250"/></td>
                  </tr>
                  <tr>
                    <td>Name</td>
                    <td>{{ $apparel->name }}</td>
                  </tr>
                  <tr>
                    <td>Series</td>
                    <td>{{ $apparel->series }}</td>
                  </tr>
                  <tr>
                    <td>Price</td>
                    <td>€{{ $apparel->price }}</td>
                  </tr>
                  <tr>
                    <td>Ref Number</td>
                    <td>{{ $apparel->refnumber }}</td>
                  </tr>
                </tbody>
                    </table>
                    <a href="{{route('user.apparels.index')}}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection