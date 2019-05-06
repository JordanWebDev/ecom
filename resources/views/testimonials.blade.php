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
        <main id="app1">

            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Testimonials</h1>
                 </div>
            </section>
            <section>
                <div class="container-fluid">
                    <img src="http://www.molsoncoors.com/areas/molsoncoors/public/images/share/default.jpg" alt="cheers image" height="100%" width="100%"/>
                </div>
                <div class="container content text-center">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <div class="testimonials">
                            	<div class="active item">
                                    <blockquote><h4>This is some of the best beer money can buy thank you so much for delivering high quality booz! Make America Great Again!</h4></blockquote>
                                    <div class="carousel-info card">
                                        <img alt="stock image1" src="http://b.rgbimg.com/users/b/ba/barunpatro/300/mf6HE0w.jpg" class="pull-left">
                                        <div class="pull-left">
                                            <span class="testimonials-name"><h4>Donald Trump</h4></span>
                                            <span class="testimonials-post"><h4>President of the United States of America</h4></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <hr />
                        <br />
                        <div class="col-md-6 col-md-offset-3">
                            <div class="testimonials">
                            	<div class="active item">
                                    <blockquote><h4>The wine selection is absolutly stunning, perfect for celebrations and winding down after a long day at the office!</h4></blockquote>
                                    <div class="carousel-info card">
                                        <img alt="stock image2" src="https://c8.alamy.com/comp/JT66T9/profile-businesswoman-gesturing-professional-person-JT66T9.jpg" class="pull-left" height="300px">
                                        <div class="pull-left">
                                            <span class="testimonials-name"><h4>Sidney Wes</h4></span>
                                            <span class="testimonials-post"><h4>American Actor</h4></span>
                                            <br />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br />
                        <hr />
                        <br />
                        <div class="col-md-6 col-md-offset-3">
                            <div class="testimonials">
                            	<div class="active item">
                                    <blockquote><h4>I'm not that big of a drinker but man was that Bourbon Delicious, I will definetley become of a regular customer just for that selection alone! best bourbon around!</h4></blockquote>
                                    <div class="carousel-info card">
                                        <img alt="stock image3" src="https://d1yn1kh78jj1rr.cloudfront.net/image/thumbnail/HGATaVJubj6casdeu/graphicstock-profile-businesswoman-gesturing-professional-person-vector-illustration_rC5LJa-F-_thumb.jpg" class="pull-left">
                                        <div class="pull-left">
                                            <span class="testimonials-name"><h4>Allison Patel</h4></span>
                                            <span class="testimonials-post"><h4>Billionaire</h4></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <br />
        <br />
        <br />
        @include('partials.footer')

        <script src="/js/app.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    </body>
</html>
