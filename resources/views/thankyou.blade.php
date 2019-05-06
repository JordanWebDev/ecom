@extends('layouts.checkout-layout')

@section('title', 'Checkout page - last step to confirmed your purchases!')

@section('breadcrumb')
    <div class="container">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('cart.index') }}">Cart</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('checkout.index') }}">Checkout</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Confirmation</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Payment Confirmed!</h1>
    </div>
</section>

@endsection
