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
                    <h1 class="jumbotron-heading">Privacy Policy</h1>
                 </div>
            </section>
            <section>
                <div class="container">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="text-center card-header">
                                Last updated: 05/06/2019
                            </h3>
                            <p>
                                My Company EcommerceLiquorStore OurTeam operates https://www.ecommerce.local/.
                            </p>
                            <p>
                                This page informs you of our policies regarding the collection, use and disclosure of
                                Personal Information we receive from users of the Site.
                            </p>
                            <p>
                                We use your Personal Information only for providing and improving the Site. By using the Site, you
                                agree to the collection and use of information in accordance with this policy.
                            </p>
                            <p>
                                Information Collection And Use While using our Site, we may ask you to provide us with certain personally identifiable information
                                that can be used to contact or identify you.
                            </p>
                            <p>
                                Personally identifiable information may include, but is not
                                limited to your name ("Personal Information").
                            </p>
                            <p>
                                <h3>Log Data:</h3>
                                Like many site operators, we collect information that your browser sends whenever you visit our Site
                                ("Log Data").
                            </p>
                            <p>
                                This Log Data may include information such as your computer's Internet Protocol ("IP") address,
                                browser type, browser version, the pages of our Site that you visit, the time and date of your visit,
                                the time spent on those pages and other statistics.
                            </p>
                            <p>
                                In addition, we may use third party services such as Google Analytics that collect, monitor and
                                analyze this …
                            </p>
                            <p>
                                The Log Data section is for businesses that use analytics or tracking services in websites or
                                apps, like Google Analytics. For the full disclosure section, create your own Privacy Policy.
                            </p>
                            <p>
                                <h3>Communications</h3>
                                We may use your Personal Information to contact you with newsletters, marketing or promotional
                                materials and other information that ...
                                The Communications section is for businesses that may contact users via email (email
                                newsletters) or other methods. For the full disclosure section, create your own Privacy Policy.
                            </p>
                            <p>
                                <h3>Cookies</h3>
                                Cookies are files with small amount of data, which may include an anonymous unique identifier.
                                Cookies are sent to your browser from a web site and stored on your computer's hard drive.
                                Like many sites, we use "cookies" to collect information. You can instruct your browser to refuse all
                                cookies or to indicate when a cookie is being sent. However, if you do not accept cookies, you may
                                not be able to use some portions of our Site.
                            </p>
                            <p>
                                <h3>Security</h3>
                                The security of your Personal Information is important to us, but remember that no method of
                                transmission over the Internet, or method of electronic storage, is 100% secure. While we strive to
                                use commercially acceptable means to protect your Personal Information, we cannot guarantee its
                                absolute security.
                                Changes To This Privacy Policy
                                This Privacy Policy is effective as of (add date) and will remain in effect except with respect to any
                                changes in its provisions in the future, which will be in effect immediately after being posted on this
                                page.
                            </p>
                            <p>
                                We reserve the right to update or change our Privacy Policy at any time and you should check this
                                Privacy Policy periodically. Your continued use of the Service after we post any modifications to the
                                Privacy Policy on this page will constitute your acknowledgment of the modifications and your
                                consent to abide and be bound by the modified Privacy Policy.
                                If we make any material changes to this Privacy Policy, we will notify you either through the email
                                address you have provided us, or by placing a prominent notice on our website.
                                Contact Us
                                If you have any questions about this Privacy Policy, please contact us.
                            </p>
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
