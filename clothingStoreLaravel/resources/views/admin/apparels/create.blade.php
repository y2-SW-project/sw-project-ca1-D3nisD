@extends('layouts.app')

@section ('content')
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <div class="card">
          <div class="card-header d-flex justify-content-center">
            Add new Apparel
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
            <form method="POST" action="{{ route('admin.apparels.store')  }}" enctype="multipart/form-data">
              <input type="hidden" name="_token" value="{{  csrf_token()  }}">
              <div class="form-group">
                <label for="title">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" />
              </div>
              <div class="form-group">
                <label for="series">series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}" />
              </div>
              <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" id="location" name="price" value="{{ old('price') }}" />
              </div>
              <div class="form-group">
                <label for="refnumber">Reference Number</label>
                <input type="text" class="form-control" id="refnumber" name="refnumber" value="{{ old('refnumber') }}" />
              </div>
            <div class="form-group">
                <label for="image_name"> Album Image </label>
                <input type="file" class="form-control" id='image_name' name="image_name" />
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
