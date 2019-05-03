<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="" />

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ URL::asset('css/app.css')}}" />

        <title>Welcome - welcome to ecommerce store buy goods</title>
    </head>
    <body>
        @include('partials.nav')
        <main>
            <section>
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <img class="d-block w-100" src="../images/winepromo.png" alt="First slide" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../images/iceyourbeer.png" alt="Second slide" height="600px">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="../images/liquorjpg.jpg" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </section>
            <section>
            </section>
        </main>
        <footer>
            <div class="row">
                <div class="col-md-4">
                    &copy; Website name | 2019
                </div>
                <div class="col-md-4">
                    Menu
                </div>
                <div class="col-md-4">
                    About us
                </div>
                <div class="col-md-4">
                    Contact us
                </div>
                <div class="col-md-4">
                    Privacy Policy
                </div>
                <div class="col-md-4">
                    Terms of Service
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
