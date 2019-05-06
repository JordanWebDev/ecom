<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Welcome to the finest Liquor Online Store In North America Where You Can Get the Best of Beers">
        <meta name="author" content="Jordan Hayward">
        <meta name="keywords" content="Liquor, Beer, Wine, Online, Store, Shop, Ecommerce, Laravel" />

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <script src="{!! asset('js/app.js') !!}"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}" />

        <title>Welcome - Learn about our company and what makes us great!</title>
    </head>
    <body>
        @include('partials.nav')
        <main id="app1">

            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">ABOUT</h1>
                 </div>
            </section>

            <section>
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h2 class="text-center">Drizly Corporate Benefits</h2>

                        </div>
                        <div class="middle image text-center img-responsive">
                            <img src="http://cdn.stimulantonline.ca/wp/wp-content/uploads/2015/07/main-img-bottles.jpg" alt="corporate beer"/>
                        </div>
                        <p>
                            <h3>-Event Planning Tool-</h3>
                            <hr />
                            Let us do the work. Our party planning tool will pre-populate your cart with the perfect amount of beer and wine for your next event in seconds.
                            <h3>-Reorder Your Happy Hour-</h3>
                            <hr />
                            Create a cart with your office favorites and schedule a weekly delivery by the touch of a button. Simply go to your Order History and click “reorder" on any past Happy Hour Cart.
                            <h3>-Corporate Gifting Solutions-</h3>
                            <hr />
                            Send gifts with personalized notes directly to your clients, customers, and coworkers. Wouldn't you prefer a nice bottle of wine or whiskey over a paperweight?
                            <h3>-Free Smart Fridge for Corporate Customers!-</h3>
                            <hr />
                            The Office Bud-e WiFi connected smart beer fridge will keep your workplace fully stocked and ready for any occasion. It comes in 7 different design options and connects to your Drizly account through your WiFi network to ensure that your favorite beer brands are always on hand. Get an Office Bud-E fridge for your office by filling out this form to see if you qualify. The fridge is totally free; the only thing you'll pay for is the beer you order.
                        </p>
                    </div>
                </div>
            </section>
            <br />
            <br />
            <hr />
            <br />
            <br />

        </main>
        @include('partials.footer')

        <script src="/js/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
