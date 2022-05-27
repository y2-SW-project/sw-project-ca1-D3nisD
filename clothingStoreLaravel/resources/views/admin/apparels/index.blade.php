@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex justify-content-center">
                    Apparel
                    <a href="{{ route('admin.apparels.create') }}" class="btn btn-primary float-right">Add</a>
                </div>
                <div class="card-body">
                    @if (count($apparels)=== 0)
                    <p>Currently Out Of Stock!</p>
                    @else
                    <table id="table-apparels" class="table table-hover">
                        <thead>
                            <th>Name</th>
                            <th>Series</th>
                            <th>Price</th>
                            <th>Ref Number</th>
                        </thead>
                        <tbody>
                            @foreach ($apparels as $apparel)
                            <tr data-id="{{ $apparel->id }}">
                                <td>{{ $apparel->name }}</td>
                                <td>{{ $apparel->series }}</td>
                                <td>{{ $apparel->price }}</td>
                                <td>{{ $apparel->refnumber }}</td>
                                <td>
                                    <a href="{{ route('admin.apparels.show', $apparel->id) }}"
                                        class="btn btn-default">View</a>
                                    <a href="{{ route('admin.apparels.edit', $apparel->id) }}"
                                        class="btn btn-warning">Edit</a>
                                    <form style="display:inline-block" method="POST"
                                        action="{{ route('admin.apparels.destroy', $apparel->id) }}">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <button type="submit" class="form-cotrol btn btn-danger">Delete</a>
                                    </form>
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
