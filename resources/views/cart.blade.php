@extends('layouts.cart-layout')

@section('title', 'Shopping Cart - Purchase the best liquor anywhere!')

@section('breadcrumb')
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('cart.index') }}">Cart</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('content')

    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">E-COMMERCE CART</h1>
         </div>
    </section>

    <div class="container mb-4">
        {{-- outputs success message if item added to cart --}}
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>

        @endif
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- shows item count added to cart --}}
        @if (Cart::count() > 0)

            <h2>{{ Cart::count() }} item(s) in Shopping Cart</h2>

            <div class="row">
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col"> </th>
                                    <th scope="col">Product</th>
                                    <th scope="col">Available</th>
                                    <th scope="col" class="text-center">Quantity</th>
                                    <th scope="col" class="text-right">Price</th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach (Cart::content() as $item)
                                <tr>
                                    <td>
                                        <a href="{{ route('shop.show', $item->model->slug) }}">
                                            <img src="{{ $item->model->image, $item->model->slug }}" width="50px" height="50px"/>
                                        </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('shop.show', $item->model->slug) }}">
                                            {{ $item->model->name }}
                                        </a>
                                    </td>
                                    <td>In stock</td>
                                    <td><input class="form-control" type="text" value="1" /></td>
                                    <td class="text-right">{{ $item->model->presentPrice() }}</td>
                                    <td class="text-right">
                                        <form action="{{ route('cart.destroy', $item->rowId) }}" method="POST">
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Sub-Total</td>
                                    <td class="text-right">{{ presentPrice(Cart::subtotal()) }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>Tax (5%)</td>
                                    <td class="text-right">{{ presentPrice(Cart::tax()) }}</td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><strong>Total</strong></td>
                                    <td class="text-right"><strong>{{ presentPrice(Cart::total()) }}</strong></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

            @else
                <h3>No items in Cart!</h3>
            @endif
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a href="{{ route('shop.index') }}" class="btn btn-block btn-light" role="button">Continue Shopping</a>
                    </div>
                    <div class="col-sm-12 col-md-6 text-right">
                        <a href="{{ route('checkout.index') }}" class="btn btn-lg btn-block btn-success text-uppercase" role="button">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
