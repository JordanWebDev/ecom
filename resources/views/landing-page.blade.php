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

        <title>Welcome - welcome to ecommerce store buy goods</title>
    </head>
    <body>
        @include('partials.nav')
        <main>
            <section>
                <div>

                    <img src="../images/iceyourbeergif.gif" alt="beer-gif" height="100%" width="100%"/>

                </div>
            </section>
            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">FEATURED</h1>
                 </div>
            </section>
            <section id="app1">
                <div class="container">
                    <div class="row">
                        <example-component></example-component>
                        <products-component v-for="product in products"></products-component>

                    </div>
                </div>

            </section>
        </main>
        @include('partials.footer')

        <script src="/js/app.js"></script>
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
