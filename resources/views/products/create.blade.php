<a class="nav-link ml-auto" href='#'>{{Auth::user()->name }}</a>
@extends('layouts.app')

@section('content')
    @include('partials.header')
    <div class="container">
        @if ($errors->any())
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endif
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <a href="/products">View Products</a>
                <form action="/products" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" placeholder="name" class="form-control" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        <textarea name="description" placeholder="description" class="form-control">{{ old('description') }}</textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" placeholder="price" class="form-control" value="{{ old('price') }}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="URL" placeholder="URL" class="form-control" value="{{ old('URL') }}">
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="active" value="1" checked  > Active
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" name="lastname" id="lastname" data-parsley-required="true">
                            @foreach($categories  as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div> 
                    <button class="form-control">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection