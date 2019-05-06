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
        <div class="products-header">
            <h3 class="h3 text-center">{{ $categoryName }}</h3>
            <div class="text-right">
                <strong>Price: </strong>
                <a href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'low_high' ])}}">Low to High</a>
                <a href="{{ route('shop.index', ['category' => request()->category, 'sort' => 'high_low' ])}}">High to Low</a>
            </div>
        </div>
        <br />
        <div class="row">
            <div class="col-md-3" id="sidebar">
                @include('partials.sidebar')

            </div>

                @include('partials.allproducts')


            <div class="col-md-12">
                <div class="text-center">
                    <ul class="pagination">

                        <li>
                            {{ $products->appends(request()->input())->links() }}
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>

@endsection
