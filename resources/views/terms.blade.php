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
                    <h1 class="jumbotron-heading">Terms of Conditions</h1>
                 </div>
            </section>
            <section>
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <h3 class="card-header">
                                    Last updated: 05/06/2019
                                </h3>
                                <p>
                                    Please read these Terms and Conditions ("Terms", "Terms and Conditions") carefully before using
                                    the http://www.ecommerce.local website and the My Mobile App (change this) mobile
                                    application (the "Service") operated by My Company Ecommerce ("us", "we", or "our").
                                </p>
                                <p>
                                    Your access to and use of the Service is conditioned on your acceptance of and compliance with
                                    these Terms. These Terms apply to all visitors, users and others who access or use the Service.
                                    By accessing or using the Service you agree to be bound by these Terms. If you disagree
                                    with any part of the terms then you may not access the Service.
                                </p>
                                <p>
                                    <h3>Purchases</h3>
                                    If you wish to purchase any product or service made available through the Service ("Purchase"),
                                    you may be asked to supply certain information relevant to your Purchase including, without
                                    limitation, your …
                                    The Purchases section is for businesses that sell online (physical or digital). For the full
                                    disclosure section, create your own Terms and Conditions.
                                </p>
                                <p>
                                    <h3>Subscriptions</h3>
                                    Some parts of the Service are billed on a subscription basis ("Subscription(s)"). You will be billed in
                                    advance on a recurring ...
                                    The Subscriptions section is for SaaS businesses. For the full disclosure section, create your
                                    own Terms and Conditions.
                                </p>

                                <p>
                                    <h3>Purchases</h3>
                                    Our Service allows you to post, link, store, share and otherwise make available certain information,
                                    text, graphics, videos, or other material ("Content"). You are responsible for the …
                                    The Content section is for businesses that allow users to create, edit, share, make content on
                                    their websites or apps. For the full disclosure section, create your own Terms and Conditions.
                                    Links To Other Web Sites
                                    Our Service may contain links to third-party web sites or services that are not owned or controlled
                                    by My Company (change this).
                                    My Company (change this) has no control over, and assumes no responsibility for, the content,
                                    privacy policies, or practices of any third party web sites or services. You further acknowledge and
                                    agree that My Company (change this) shall not be responsible or liable, directly or indirectly, for any
                                    damage or loss caused or alleged to be caused by or in connection with use of or reliance on any
                                    such content, goods or services available on or through any such web sites or services.
                                </p>
                                <p>
                                    <h3>Changes</h3>
                                    We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a
                                    revision is material we will try to provide at least 30 (change this) days' notice prior to any new terms
                                    taking effect. What constitutes a material change will be determined at our sole discretion.
                                    Contact Us
                                    If you have any questions about these Terms, <a href="{{ route('contact.index') }}">please contact us.</a>
                                </p>
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
