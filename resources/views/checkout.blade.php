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
                        <li class="breadcrumb-item active" aria-current="page">Checkout</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
@endsection

@section('content')
<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Checkout Page</h1>
    </div>
</section>
<div class="row">
    <div class="col-md 6">
        <div class="container">
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Country</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Country">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">City</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="City">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Address</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Address">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Second Address</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Second Address">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Postal Code</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Postal Code">
                </div>
                <br />
                <hr />
                <br />
                <div class="form-group">
                    <label for="formGroupExampleInput2">Name on Card</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Name on Card">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Credit Card Number</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Credit Card Number">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">CV</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="CV">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Expiration</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Expiration">
                </div>
                <button class="btn btn-primary"></button>
            </form>
        </div>
    </div>

    <div class="col-md-6">
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
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="{{ route('shop.index')}}" class="btn btn-block btn-light" role="button">Continue Shopping</a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href="{{ route('payment.index') }}" class="btn btn-lg btn-block btn-success text-uppercase" role="button">Pay Now!</a>
                </div>
            </div>
        </div>
        <br />
        <hr />
        <br />
        <div class="container-fluid">
            <div class="row">
        		<div class="paymentCont">
    				<div class="headingWrap">
    					<h3 class="headingTop text-center">Select Your Payment Method</h3>
    				</div>
    				<div class="paymentWrap">
    					<div class="btn-group paymentBtnGroup btn-group-justified" data-toggle="buttons">
    			            <label class="btn paymentMethod active">
    			            	<div class="method visa"></div>
    			                <input type="radio" name="options" checked>
    			            </label>
    			            <label class="btn paymentMethod">
    			            	<div class="method master-card"></div>
    			                <input type="radio" name="options">
    			            </label>
    			            <label class="btn paymentMethod">
    		            		<div class="method amex"></div>
    			                <input type="radio" name="options">
    			            </label>
    			             <label class="btn paymentMethod">
    		             		<div class="method vishwa"></div>
    			                <input type="radio" name="options">
    			            </label>
    			            <label class="btn paymentMethod">
    		            		<div class="method ez-cash"></div>
    			                <input type="radio" name="options">
    			            </label>
    			        </div>
    				</div>
    			</div>
        	</div>
        </div>


@endsection
