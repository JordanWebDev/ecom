@extends('layouts.app')

@section('breadcrumb')
    @include('partials.breadcrumb')
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
