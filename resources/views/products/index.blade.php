 
<a class="nav-link ml-auto" href='#'>{{Auth::user()->name }}</a>
@extends('layouts.app')
<div class="flex-right position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                            <!-- LOGOUT BUTTON -->
                            <a href="{{ url('/logout') }}">Logout</a>
                            @else
                            <a href="{{ route('login') }}">Login</a>
                            <a href="{{ route('register') }}">Register</a>
                        @endauth
                    </div>
                @endif
            </div>
@section('content')
    @include('partials.header')
    
    <div class="container">
        @if($errors->first('error_message'))
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <p class="error">{{ $errors->first('error_message') }}</p>
            </div>
        </div>
        @endif
       
        <div class="row">
        
            <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                <a href="/products/create">+ New Product</a>
                <div class="table-responsive">
                <form action="/products" method="GET" role="search">
                                @csrf
                                <div class="input-group">
                                    <input type="text" class="form-control" 
                                    name="q" placeholder="Search names"> 
                                </div>
                        </form>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>URL</th>
                                <th>Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->description ?? '' }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td><a href=#>{{ $product->URL }}</a></td>
                                    @if($product->active)         
                                    <td><span class="checkmark">
                                        <div class="checkmark_stem"></div>
                                        <div class="checkmark_kick"></div>
                                        </span>
                                    </td>         
                                    @else
                                    <td>
                                        <div id="RedBox">
                                        <span id="x">X</span>
                                        </div>
                                    </td>        
                                    @endif

                                    <td>
                                        <form action="/products/{{ $product->id }}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button>Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection