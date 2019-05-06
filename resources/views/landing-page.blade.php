<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="" />

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="{!! asset('js/app.js') !!}"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}" />

        <title>Welcome - welcome to ecommerce store buy goods</title>
    </head>
    <body>
        @include('partials.nav')
        <main id="app1">
            <section>
                <div>

                    <img src="../images/iceyourbeergif.gif" alt="beer-gif" height="100%" width="100%"/>

                </div>
            </section>
            <section>
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">FEATURED</h1>
                 </div>
            </section>
                <div class="container">
                    <div class="row">

                        @foreach ($products as $product)

                        <div class="col-md-3 col-sm-6">
                            <div class="product-grid2">

                                <div class="product-image2">
                                    <a href="#">
                                        <img class="pic-1" src="{{ $product->image }}">
                                        <img class="pic-2" src="{{ $product->image }}">
                                    </a>
                                    <ul class="social">
                                        <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                        <li><a href="#" data-tip="Add to Wishlist"><i class="fa fa-shopping-bag"></i></a></li>
                                        <li>
                                            <form id="formCart" action="{{ route('cart.store') }}" method="POST">

                                                @csrf

                                                <input type="hidden" name="id" value="{{ $product->id }}" />
                                                <input type="hidden" name="name" value="{{ $product->name }}" />
                                                <input type="hidden" name="price" value="{{ $product->price }}" />
                                                <a id="addCart" href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a>

                                            </form>
                                        </li>
                                    </ul>

                                </div>
                                <div class="product-content">
                                    <h3 class="title"><a href="#">{{ $product->name }}</a></h3>
                                    <span class="price">${{ $product->presentPrice() }}</span>
                                </div>
                                <br />
                                <hr />
                                <br />
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
                test
                <div >

                    <example-component></example-component>

                </div>
            </section>
        </main>
        @include('partials.footer')

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <script>

            $( "#addCart" ).click(function() {

                $("#formCart").submit()

            });

        </script>
    </body>
</html>
