@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if (Session::has('messege'))
               <div class="alert alert-success">
                {{Session::get('messege')}}
               </div>
            @endif
            <div class="card">
                <div class="card-header">{{ __('Update Food Category') }}</div>
                <form action="{{route('category.update',[$category->id])}}" method="post">@csrf
                   {{method_field('PUT')}}
                <div class="card-body">
                   <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" name="name" value="{{$category->name}}" class="form-control @error('name') is-invalid @enderror">
                      @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                     @enderror
                    </div>
                    <div class="form-group">
                        <button class="btn btn-outline-primary">SUBMIT</button>
                      </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection