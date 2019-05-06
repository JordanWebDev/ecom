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

        <title>Blog - Get the latest news on whats what!</title>
    </head>
    <body>
        @include('partials.nav')
        <main id="app1">

            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">What's New!</h1>
                 </div>
            </section>
            <section class="blog-me pt-100 pb-100" id="blog">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 mx-auto text-center">
                            <div class="section-title mb-100">
                                <h4>latest blog</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-img">
                                    <img src="http://infinityflamesoft.com/html/abal-preview/assets/img/blog/blog1.jpg" alt="">
                                    <div class="post-category">
                                        <a href="#">Creative</a>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h4><a href="#">Mobilies UX Treend</a></h4>
                                        <div class="meta">
                                            <ul>
                                                <li>04 June 2018</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.</p>
                                    <a href="#" class="box_btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                          <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-img">
                                    <img src="http://infinityflamesoft.com/html/abal-preview/assets/img/blog/blog2.jpg" alt="">
                                    <div class="post-category">
                                        <a href="#">Creative</a>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h4><a href="#">Mobilies UX Treend</a></h4>
                                        <div class="meta">
                                            <ul>
                                                <li>23 June 2018</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.</p>
                                    <a href="#" class="box_btn">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <!-- Single Blog -->
                            <div class="single-blog">
                                <div class="blog-img">
                                    <img src="http://infinityflamesoft.com/html/abal-preview/assets/img/blog/blog3.jpg" alt="">
                                    <div class="post-category">
                                        <a href="#">Creative</a>
                                    </div>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-title">
                                        <h4><a href="#">Mobilies UX Treend</a></h4>
                                        <div class="meta">
                                            <ul>
                                                <li>31 July 2018</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in pulvinar neque.</p>
                                    <a href="#" class="box_btn">read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="blog1">
                <div class="container">
                    <div class="container-fluid">
                        <img />
                    </div>
                    <div class="text-center">
                        <h1></h1>
                        <p>

                        </p>
                    </div>
                </div>

            </section>
            <section id="blog2">
                <div class="container">
                    <div class="container-fluid">
                        <img />
                    </div>
                    <div class="text-center">
                        <h1></h1>
                        <p>

                        </p>
                    </div>
                </div>

            </section>
            <section id="blog3">
                <div class="container">
                    <div class="container-fluid">
                        <img />
                    </div>
                    <div class="text-center">
                        <h1></h1>
                        <p>

                        </p>
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
