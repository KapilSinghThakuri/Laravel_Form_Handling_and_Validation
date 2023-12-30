@extends('layout.app')

@section('content')

<div class="container mt-3">
    <div class="row">
        <div class="col-md-12">

        <!-- FOR SHOWING ERROR MESSAGE -->
        <!-- @if($errors->any())
        <div>
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
                @endforeach
            </ul>
        </div>
        @endif -->

            <div class="card">
                <div class="card-header">
                    <h3>Electronic Items
                        <a href="" class="btn float-right btn-primary">Back</a>
                    </h3>
                </div>
                <div class="card-body">
                    <form action="{{ url('electronics/store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="">Device Name</label>
                            <input type="text" name="name" value="{{ old('name') }}" class="form-control">
                            @error('name') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Device Category</label>
                            <input type="text" name="electronic_category" value="{{ old('electronic_category') }}" class="form-control">
                            @error('electronic_category') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Description</label>
                            <input type="text" name="description" value="{{ old('description') }}" class="form-control">
                            @error('description') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Is available</label> <br>
                            <input type="checkbox"  name="is_available">
                            @error('is_available') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <label for=""> Price</label>
                            <input type="text" name="price" value="{{ old('price') }}" class="form-control">
                            @error('price') <span class="text-danger">{{$message}}</span> @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



@endsection