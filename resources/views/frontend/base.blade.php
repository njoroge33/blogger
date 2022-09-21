<!DOCTYPE html>
<html>

<head>
    <title>thefreelancersdigest.com</title>
    <meta name="description" content="@yield('page_description', $page_description ?? '')" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="shortcut icon" href="{{ asset('media/logos/favicon.ico') }}" />
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>

<body>


    <!-- start nav -->
    <header class="site-header">
        <nav class="navbar navbar-expand-md navbar-dark ">
            <div class="container-md g-3">
                <a class="navbar-brand" href="{{route('home')}}">The Freelancers' Digest</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas-collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas-collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('blog')}}">Blog</a>
                        </li>
                        <li class="nav-item">
                        <section class="footer-search">
                        <form role="search" method="get" class="search-form" action="https://elnacain.com/">
                            <div class="input-group mb-4">
                                <input type="search" id="search-form-1" class="search-field form-control border-end-0"
                                    placeholder="Search..." value="" name="s">
                                <label for="search-form-1" class="visually-hidden">Search</label>
                                <button type="submit" class="search-submit btn btn-primary">
                                    <svg width="20" fill="currentColor" height="20" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 512 512">
                                        <path
                                            d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                        </path>
                                    </svg> </button>

                            </div>
                        </form>
                    </section>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLinkCourses"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">Products</a>
                            <ul class="dropdown-menu dropdown-menu-dark bg-primary"
                                aria-labelledby="navbarDropdownMenuLinkCourses">
                                <li><a class="dropdown-item" href="" rel="noopener" target="_blank">Start and Scale up your Freelance Writing Career</a></li>
                               
                            </ul>
                        </li>
                       
                        <li class="nav-item">
                            <a class="nav-link" href="">Services</a>
                        </li>
						<li class="nav-item">
                            <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('about')}}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('contact')}}">Contact</a>
                        </li>
                        
                       
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- end nav -->

    <!-- start main -->
	@yield('content')

 
    <!-- end main -->

    <!-- start footer -->
    <footer id="site-footer" class="site-footer mt-5" role="contentinfo">
        <div class="container">
            <div class="row">

                <div class="col-md-4 col-sm-6">
                    <section class="footer-bio">
                        <h4 class="text-center">About Catherine</h4>

                        <div>
                            <picture>
                                <source type="image/webp"
                                    srcset="https://freelancersdigest.com/wp-content/uploads/2022/05/Me-1.jpg">
                                <img alt="Elna" width="100" height="100"
                                    style="margin: .25rem 1rem .25rem 0; float:left; shape-outside:circle();"
                                    class="avatar"
                                    src="https://elnacain.com/wp-content/themes/elna-v5/images/51367ff51910f9c7b6fd7ade3f9e3c43.jpg"
                                    loading="lazy" data-pin-nopin="true">
                            </picture>
                            <p>Hey, I am Catherine, welcome to my blog.I help freelancer writers find freedom and escape
                                the rat race through freelance writing. Are you a newbie writer looking for mentorship?
                                Head on to my BLOG right away. Are you a business owner looking for a professional
                                writer to help you craft, Engaging and informative blog articles, high-converting
                                website copy or quality landing pages for your website? You've come to the right place.
                                CONTACT me right away and let's get started growing your business<a
                                    href="{{route('about')}}"><strong>→</strong></a></p>
                        </div>
                    </section>

                </div>

                <div class="col-md-5 col-sm-6">
                    <section class="footer-courses">
                        <h4 class="text-center">Products</h4>
                        <ul class="text-center list-unstyled">
                            <li><a class="btn btn-primary btn-sm" href="" rel="noopener"
                                    target="_blank">Start and Scale up your Freelance Writing Career</a></li>
                        </ul>
                    </section>

                </div>

                <div class="col-md-3 col-sm-6">
                    <!-- <section class="footer-reach-out">
					<h4>Reach Out</h4>
					<ul class="list-unstyled text-center">
						<li><a href="https://elnacain.com/about/">About</a></li>
						<li><a href="https://elnacain.com/contact/">Contact</a></li>
					</ul>
				</section> -->

                    <section class="footer-contact-icons">
                        <h4 class="text-center">Reach Out</h4>
                        <ul class="list-unstyled text-center">
                            <li class=""><a style="color: inherit" href="https://elnacain.com/contact/"><img
                                        src="https://elnacain.com/wp-content/themes/elna-v5/images/icons/fa-envelope.svg"
                                        loading="lazy" width="20" height="20" class="fa-white" data-pin-nopin="true">
                                    <span class="xvisually-hidden">Contact</span></a></li>
                    
                            <li class=""><a style="color: inherit" href="https://www.facebook.com/ecainwrites"
                                    rel="noopener" target="_blank"><img
                                        src="https://elnacain.com/wp-content/themes/elna-v5/images/icons/fa-facebook-f.svg"
                                        loading="lazy" width="20" height="20" class="fa-white" data-pin-nopin="true">
                                    <span class="xvisually-hidden">Facebook</span></a></li>
                            <li class=""><a style="color: inherit" href="https://twitter.com/ecainwrites" rel="noopener"
                                    target="_blank"><svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256"><path fill="#0A66C2" d="M218.123 218.127h-37.931v-59.403c0-14.165-.253-32.4-19.728-32.4c-19.756 0-22.779 15.434-22.779 31.369v60.43h-37.93V95.967h36.413v16.694h.51a39.907 39.907 0 0 1 35.928-19.733c38.445 0 45.533 25.288 45.533 58.186l-.016 67.013ZM56.955 79.27c-12.157.002-22.014-9.852-22.016-22.009c-.002-12.157 9.851-22.014 22.008-22.016c12.157-.003 22.014 9.851 22.016 22.008A22.013 22.013 0 0 1 56.955 79.27m18.966 138.858H37.95V95.967h37.97v122.16ZM237.033.018H18.89C8.58-.098.125 8.161-.001 18.471v219.053c.122 10.315 8.576 18.582 18.89 18.474h218.144c10.336.128 18.823-8.139 18.966-18.474V18.454c-.147-10.33-8.635-18.588-18.966-18.453"/></svg>
                                    <span class="xvisually-hidden">Linked In</span></a></li>
                          
                        </ul>
                    </section>
                   

                </div>
            </div><!-- /row-->

            <div class="row text-center fs-6">
                <p class="col">
                    2022 Copyright ©freelancersdigest | All Rights Reserved
                    <span class="sep"><span class="visually-hidden">|</span></span>
                    <span class="sep"><span class="visually-hidden">|</span></span>
                    <a href="{{route('blog')}}">Blog</a>
                    <span class="sep"><span class="visually-hidden">|</span></span>
                    <a href="{{route('contact')}}">Contact</a>
                </p>
            </div>
        </div><!-- /container-fluid -->
    </footer>
    <!-- end footer -->

    <!-- <footer class="row">
		<p>include footer here</p>
	</footer> -->



</html>