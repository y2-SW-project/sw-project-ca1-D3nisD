@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header d-flex justify-content-center">
            Edit Apparel
          </div>
          <div class="card-body">
          <!-- this block is ran if the validation code in the controller fails
          this code looks after displaying the correct error message to the user -->
            @if ($errors->any())
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            @endif
            <form method="POST" action="{{ route('admin.apparels.update', $apparel->id)}}">
              <input type="hidden" name="_token" value="{{  csrf_token()  }}">
              <input type="hidden" name="_method" value="PUT">

              <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $apparel->name) }}" />
              </div>
              <div class="form-group">
                <label for="series">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series', $apparel->series) }}" />
              </div>
              <div class="form-group">
                <label for="price">Price (In Euros €)</label>
                <input type="text" class="form-control" id="price" name="price" value="{{ old('price', $apparel->price) }}" />
              </div>
              <div class="form-group">
                <label for="refnumber">reference number</label>
                <input type="text" class="form-control" id="refnumber" name="refnumber" value="{{ old('refnumber', $apparel->refnumber) }}" />
              </div>
              <a href="{{ route('admin.apparels.index') }}" class="btn btn-outline">Cancel</a>
              <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
