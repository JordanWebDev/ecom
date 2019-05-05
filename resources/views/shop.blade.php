@extends('layouts.app')

@section('title', 'Shop - Come View Our Best Selections of Alcohol Around Town!')

@section('breadcrumb')
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active"><a href="/shop">Shop</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection
@section('content')

    <div class="container">
        <br />
        <h3 class="h3 text-center">Ecommerce Store</h3>
        <br />
        <div class="row">
            <div class="col-md-3" id="sidebar">
                @include('partials.sidebar')

            </div>

            @include('partials.allproducts')
        </div>
    </div>

@endsection
