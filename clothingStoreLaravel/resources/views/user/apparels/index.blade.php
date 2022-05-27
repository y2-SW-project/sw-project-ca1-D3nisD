@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-center">Apparel</div>
                <div class="card-body">
                    @if(count($apparel)=== 0)
                        <p>We are currently out of stock</p>
                    @else
                    <table id="table-apparel" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Series</th>
                            <th>Price</th>
                            <th>Ref Number</th>
                        </thead>
                        <tbody>
                            @foreach ($apparel as $apparel)
                             <tr data-id="{{ $apparel->id}}">
                                 <td>{{$apparel->name}}</td>
                                 <td>{{$apparel->series}}</td>
                                 <td>{{$apparel->price}}</td>
                                 <td>{{$apparel->refnumber}}</td>
                                 <td>
                                     <a href="{{route('user.apparels.show',$apparel->id)}}" class="btn btn-primary">View</a>
                                 </td>
                             </tr>
                             @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection