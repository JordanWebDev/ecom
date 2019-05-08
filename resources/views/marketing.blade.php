<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Welcome to the finest Liquor Online Store In North America Where You Can Get the Best of Beers">
        <meta name="author" content="Jordan Hayward">
        <meta name="keywords" content="Liquor, Beer, Wine, Online, Store, Shop, Ecommerce, Laravel" />

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}" />

        <title>Welcome - welcome to ecommerce store buy goods</title>
    </head>
    <body>
        @include('partials.nav')
        <main>
            <section class="jumbotron text-center">
                <header class="marketing-background text-center text-white">
                    <div class="marketing-content">
                        <div class="container">
                            <div class="background-text text-center">
                                <h1 id="titlecard">Ecommerce</h1>
                                <h3 id="motto">Checkout our best selections</h3>
                            </div>
                            <a href="/shop" id="learnmore-button" class="btn btn-primary btn-lg btn-block">Shop now!</a>
                        </div>
                    </div>
                </header>
                <br /><hr />
            </section>
            <section>
                <div class="container">
                    <video controls autoplay src="../videos/beerpromo.mp4" height="100%" width="100%"></video>
                </div>
            </section>
            <br /><hr />
            <section>
                <div class="container">
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <br />
                    <div class="row">
                        <div class="col-md-4 mb-5">
                            <div class="card h-50">
                                <img class="card-img-top coffeeImg" src="https://colatoday.6amcity.com/wp-content/uploads/sites/5/2018/10/pexels-photo-1283219-970x545.jpeg" alt="top brands">
                                <div class="card-body cardbodycss">
                                    <h4 class="card-title">What makes our drinks amazing?</h4>
                                    <p class="card-text">Our store only stocks the finest of drinks for the customers pleasure, you will never find
                                        off brand selections in our store. Only the best brands around with highly positive feedback!
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="/shop" class="btn btn-primary">Store!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="card h-50">
                                <img class="card-img-top voiceimg" src="http://farm1.static.flickr.com/24/39219651_eace652c68.jpg" alt="drink selection">
                                <div class="card-body">
                                    <h4 class="card-title">Party Selection</h4>
                                    <p class="card-text">We got the best brands around at your leisure, great for parties, order as many as you want! Buy your drinks now!
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="/shop" class="btn btn-primary">Store!</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mb-5">
                            <div class="card h-50">
                                <img class="card-img-top" src="https://cdn.shopify.com/s/files/1/0204/2542/collections/christmas_liquor_gift_basket_e2093374-5977-4fc2-bb0d-7e9915f3dd1c.jpg?v=1509226677" alt="holiday-drinks">
                                <div class="card-body">
                                    <h4 class="card-title">Festive Selection</h4>
                                    <p class="card-text">Our Brands are great for any holiday or celebration you can think of, like christmas, new year, and even birthday's. Buy your drinks now!
                                    </p>
                                </div>
                                <div class="card-footer">
                                    <a href="/shop" class="btn btn-primary">Store!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br /><hr />
            <section>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <div class="p-5">
                                <img class="img-fluid rounded-circle" src="https://ssmscdn.yp.ca/image/resize/486868d0-d326-421d-97b3-bc8da8e21d08/ypui-d-mp-pic-tb/beacon-landing-liquor-store-1.jpg" alt="drink1">
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="p-5">
                                <h2 class="display-4">Wine</h2>
                                <p>
                                    We got the top brands, absolutley the best selection around and for great prices!
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br /><hr />
            <section>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="p-5">
                                <img class="img-fluid rounded-circle" src="https://media.graytvinc.com/images/810*455/liquor+bottles.jpg" alt="drink2">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <h2 class="display-4">Liquor</h2>
                                <p>
                                    We got the top brands, absolutley the best selection around and for great prices!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <br /><hr />
            <section>
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-lg-2">
                            <div class="p-5">
                                <img class="img-fluid rounded-circle" src="https://sitejerk.com/images/liquor-png-15.png" alt="drink3">
                            </div>
                        </div>
                        <div class="col-lg-6 order-lg-1">
                            <div class="p-5">
                                <h2 class="display-4">Checkout our selections!</h2>
                                <p>
                                    We got the top brands, absolutley the best selection around and for great prices!
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
                <br />
            </section>
        </main>
        @include('partials.footer')

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="/js/app.js"></script>

    </body>
</html>
