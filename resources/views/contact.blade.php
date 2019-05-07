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

        <title>Contact - Contact us if you have any questions or concerns</title>
    </head>
    <body>
        @include('partials.nav')
        <main id="app1">

            <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading">Contact Page</h1>
                 </div>
            </section>
            <section>
                <div class="container">
                    <h1>Contact Us</h1>
                    <div class="row">
                        <div class="col-md-6">
                            {{-- checking if session has flash_message --}}
                            @if (Session::has('flash_message'))
                                {{-- if it does display this in this div --}}
                                <div class="alert alert-success">

                                    {{ Session::get('flash_message')}}

                                </div>

                            @endif
                            <form method="POST" action="{{ route('contact.store')}}">
                                @csrf
                                <div class="form-group">
                                    <label>Full Name:</label>
                                    <input type="text" class="form-control" name="name"/>
                                    @if ($errors->has('name'))
                                        <small class="form-text invalid-feedback">{{ $errors->first('name')}}</small>
                                    @endif                                </div>
                                <div class="form-group">
                                    <label>Email Address:</label>
                                    <input type="text" class="form-control" name="email"/>
                                    @if ($errors->has('message'))
                                        <small class="form-text invalid-feedback">{{ $errors->first('message')}}</small>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label>Message:</label>
                                    <textarea name="message" class="form-control"></textarea>
                                </div>
                                <button class="btn btn-primary">Submit</button>
                            </form>

                        </div>
                        <div class="col-md-6">

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
