@extends('frontend.base')

@section('content')
<main id="main" class="main " role="main">
    <!-- start image -->
    <div class="home-header  container-fluid">
        <div class="firstsection d-flex justify-content-center text-center">
            <section class="front-page-optin front-page-optin-gptw mt-5">

                <h1 class="fp-optin-title landing-page-h1">Feeling Clueless </h1>
                <h1 class="fp-optin-title landing-page-h1">About Landing Clients? </h1>
                <div class="fp-optin-text">Here’s a <span style="background-color: #ff0">FREE 5-step guide</span> to start landing high-paying freelance writing jobs </div>
                <div class="fp-form-wrap">
                    <div class="clearfix"></div>
                    <div data-form-id="14214" class="pc-form">
                        <div class="wrap p-4">
                            <form class="form-reg mb-3" method="post">
                                <div class="row g-3">
                                    <div class="col-form-name col-md-6">
                                        <input type="text" name="fname" class="form-control" placeholder="First name...">
                                    </div>
                                    <div class="col-form-email col-md-6">
                                        <input type="email" name="email" class="form-control" placeholder="Email..." required="">
                                        <div class="invalid-feedback">Please enter a valid email.</div>
                                    </div>
                                    <div class="col-form-submit d-grid col-6 mx-auto">
                                        <button onfocus="this.blur()" onclick="return false;" type="submit" class="btn  btn-primary ">Sign me up!</button>
                                    </div>
                                </div>

                                <input type="hidden" name="formid" value="14214">
                            </form>
                            <div class="caption-notice"></div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- end section -->
        </div>

    </div>



    <section class="featured container-fluid">
        <section>
            <div class="row d-flex justify-content-center">
                <div class="col-md-10 col-xl-8 text-center">
                    <h3 class="mb-4">Testimonials</h3>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-md-6 mb-5 mb-md-0">
                   
                    <h5 class="mb-3">Walter Akolo</h5>
                    <h6 class="text-primary mb-3"><a href="http://freelancerkenya.com">freelancerkenya.com</a></h6>
                    <div class="col-md-6 container">
                        <i class="fas fa-quote-left fa-lg text-warning me-5"></i>
                    <p>Catherine is an excellent freelance writer who crafts high-quality content and delivers on time. Her content was impactful on both my site's traffic and sales.</p>
                    </div>
                    
                </div>
                <div class="col-md-6 mb-5 mb-md-0">
                    <h5 class="mb-3">Leonard Rono</h5>
                    <h6 class="text-primary mb-3"><a href="http://thepennyvoice.com">thepennyvoice.com</a></h6>
                    <p class="px-xl-3">
                    Catherine is an excellent Copywriter with an impressive understanding of topic clusters. Her ability to create content that converts played an integral role in our newly-launched blog getting a consistent number of readers.
                    </p>
                
                </div>

            </div>
        </section>
    </section>

    <section class="help-you container-fluid">
        <div class="wrap">

            <div class="row">
                <div class="col-12 h1 pb-4 text-center">
                    How Can I Help You?
                </div>
            </div>

            <div class="card-deck justify-content-center">
                <div class="card">
                    <div class="card-body">
                        <a href="https://elnacain.com/course/getpaid/">
                            <div class="icon-item mx-auto d-flex justify-content-center align-items-center"><img src="https://elnacain.com/wp-content/themes/elna-v5/images/icons/client.svg" data-pin-nopin="true" data-pin-no-hover="true" class="primary" width="100" height="75"></div>
                        </a>
                        <p><a href="https://elnacain.com/course/getpaid/"><strong>I want to land my first
                                    client</strong></a></p>
                    </div>
                    <p class="Xcard-footer">Learn the first steps to find your first client <a href="https://elnacain.com/course/getpaid/">→</a></p>
                </div>
                <div class="card">
                    <div class="card-body">
                        <a href="https://writeto1k.com/" rel="noopener" target="_blank">
                            <div class="icon-item mx-auto d-flex justify-content-center align-items-center"><img src="https://elnacain.com/wp-content/themes/elna-v5/images/icons/make-living.svg" data-pin-nopin="true" data-pin-no-hover="true" class="planning" style="margin-left: 4px" width="90" height="81"></div>
                        </a>
                        <p><a href="https://writeto1k.com/" rel="noopener" target="_blank"><strong>I want to make
                                    money writing</strong></a></p>
                    </div>
                    <p class="Xcard-footer">Get the exact blueprint I used to make a living as a writer <a href="https://writeto1k.com/" rel="noopener" target="_blank">→</a></p>

                </div>
                <div class="card">
                    <div class="card-body">
                        <a href="https://elnacain.com/contact/">
                            <div class="icon-item mx-auto d-flex justify-content-center align-items-center"><img src="https://elnacain.com/wp-content/themes/elna-v5/images/icons/content-writer.svg" data-pin-nopin="true" data-pin-no-hover="true" class="development" style="margin-left: 10px;margin-bottom: 10px;" width="100" height="74"></div>
                        </a>
                        <p><strong><a href="https://elnacain.com/contact/">I'm looking to hire a writer</a></strong>
                        </p>
                    </div>
                    <p class="Xcard-footer">Want me to write for you? Contact me! <a href="https://elnacain.com/contact/">→</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="latest-posts container-fluid">
        <div class="wrap">
            <div class="row">
                <div class="col text-center">
                    <div class="fancy-headline pb-4">Latest Blog Posts</div>
                </div>
            </div>

            <div class="row gx-5">

                <div class="col-md-10 mx-auto text-center mb-5">
                    <div class="wrap">

                        <a href="https://elnacain.com/blog/how-to-start-a-blog/" class="entry-image-link"><img width="768" height="512" src="https://elnacain.com/wp-content/uploads/2017/11/start-blog-template-768x512.jpg" class="wp-image-0 post-image entry-image mb-4" alt="" loading="lazy" srcset="https://elnacain.com/wp-content/uploads/2017/11/start-blog-template-768x512.jpg 768w, https://elnacain.com/wp-content/uploads/2017/11/start-blog-template-300x200.jpg 300w, https://elnacain.com/wp-content/uploads/2017/11/start-blog-template-1024x683.jpg 1024w, https://elnacain.com/wp-content/uploads/2017/11/start-blog-template-720x480.jpg 720w, https://elnacain.com/wp-content/uploads/2017/11/start-blog-template-360x240.jpg 360w, https://elnacain.com/wp-content/uploads/2017/11/start-blog-template.jpg 1200w" sizes="(max-width: 768px) 100vw, 768px" data-pin-nopin="true"></a>
                        <div class="small">Apr 1, 2022</div>
                        <h4 class="text-center" style=";line-height:1.1"><a href="https://elnacain.com/blog/how-to-start-a-blog/">How to Start a Blog for Your
                                Business in 3 Easy Steps</a></h4>
                        <div>Interested in learning how to start a business? Did you know you can start a blog and
                            turn that into a business? I’ve been blogging…</div>
                    </div><!-- .wrap -->
                </div>


                <div class="col-md-6 text-center mb-5">
                    <div class="wrap">

                        <a href="https://elnacain.com/blog/2-jobs-in-2-weeks/" class="entry-image-link"><img width="768" height="512" src="https://elnacain.com/wp-content/uploads/2022/08/new-freelance-writing-job-768x512.jpg" class="wp-image-0 post-image entry-image mb-4" alt="" loading="lazy" srcset="https://elnacain.com/wp-content/uploads/2022/08/new-freelance-writing-job-768x512.jpg 768w, https://elnacain.com/wp-content/uploads/2022/08/new-freelance-writing-job-300x200.jpg 300w, https://elnacain.com/wp-content/uploads/2022/08/new-freelance-writing-job-1024x683.jpg 1024w, https://elnacain.com/wp-content/uploads/2022/08/new-freelance-writing-job-720x480.jpg 720w, https://elnacain.com/wp-content/uploads/2022/08/new-freelance-writing-job-360x240.jpg 360w, https://elnacain.com/wp-content/uploads/2022/08/new-freelance-writing-job.jpg 1200w" sizes="(max-width: 768px) 100vw, 768px" data-pin-nopin="true"></a>
                        <div class="small">Aug 26, 2022</div>
                        <h4 class="text-center" style=";line-height:1.1"><a href="https://elnacain.com/blog/2-jobs-in-2-weeks/">2 Freelance Writing Jobs in 2
                                Weeks (From Big Brands)</a></h4>
                        <div>A few years ago, I wanted to do a case study of using job boards to land new freelance
                            writing gigs. I was able to…</div>
                    </div><!-- .wrap -->
                </div>


                <div class="col-md-6 text-center mb-5">
                    <div class="wrap">

                        <a href="https://elnacain.com/blog/freelance-writer-logo/" class="entry-image-link"><img width="768" height="512" src="https://elnacain.com/wp-content/uploads/2022/08/freelance-writer-logo-768x512.jpg" class="wp-image-0 post-image entry-image mb-4" alt="" loading="lazy" srcset="https://elnacain.com/wp-content/uploads/2022/08/freelance-writer-logo-768x512.jpg 768w, https://elnacain.com/wp-content/uploads/2022/08/freelance-writer-logo-300x200.jpg 300w, https://elnacain.com/wp-content/uploads/2022/08/freelance-writer-logo-1024x683.jpg 1024w, https://elnacain.com/wp-content/uploads/2022/08/freelance-writer-logo-720x480.jpg 720w, https://elnacain.com/wp-content/uploads/2022/08/freelance-writer-logo-360x240.jpg 360w, https://elnacain.com/wp-content/uploads/2022/08/freelance-writer-logo.jpg 1200w" sizes="(max-width: 768px) 100vw, 768px" data-pin-nopin="true"></a>
                        <div class="small">Aug 22, 2022</div>
                        <h4 class="text-center" style=";line-height:1.1"><a href="https://elnacain.com/blog/freelance-writer-logo/">How to Design a Freelance
                                Writer Logo</a></h4>
                        <div>When I started as a freelance writer in 2014, I wanted to have a freelance writer logo
                            that embodied my personality and excitement of starting…</div>
                    </div><!-- .wrap -->
                </div>


                <div class="col-md-6 text-center mb-5">
                    <div class="wrap">

                        <a href="https://elnacain.com/blog/best-copywriting-books/" class="entry-image-link"><img width="768" height="512" src="https://elnacain.com/wp-content/uploads/2022/08/best-copywriting-books-768x512.jpg" class="wp-image-0 post-image entry-image mb-4" alt="" loading="lazy" srcset="https://elnacain.com/wp-content/uploads/2022/08/best-copywriting-books-768x512.jpg 768w, https://elnacain.com/wp-content/uploads/2022/08/best-copywriting-books-300x200.jpg 300w, https://elnacain.com/wp-content/uploads/2022/08/best-copywriting-books-1024x683.jpg 1024w, https://elnacain.com/wp-content/uploads/2022/08/best-copywriting-books-720x480.jpg 720w, https://elnacain.com/wp-content/uploads/2022/08/best-copywriting-books-360x240.jpg 360w, https://elnacain.com/wp-content/uploads/2022/08/best-copywriting-books.jpg 1200w" sizes="(max-width: 768px) 100vw, 768px" data-pin-nopin="true"></a>
                        <div class="small">Aug 11, 2022</div>
                        <h4 class="text-center" style=";line-height:1.1"><a href="https://elnacain.com/blog/best-copywriting-books/">16 Best Copywriting Books
                                You Should Read</a></h4>
                        <div>Did you know that some of my absolute favorite writing jobs are copywriting jobs?
                            Copywriting is such a fascinating form of writing, but it can…</div>
                    </div><!-- .wrap -->
                </div>


                <div class="col-md-6 text-center mb-5">
                    <div class="wrap">

                        <a href="https://elnacain.com/blog/editing-books/" class="entry-image-link"><img width="768" height="512" src="https://elnacain.com/wp-content/uploads/2022/08/editing-books-768x512.jpg" class="wp-image-0 post-image entry-image mb-4" alt="" loading="lazy" srcset="https://elnacain.com/wp-content/uploads/2022/08/editing-books-768x512.jpg 768w, https://elnacain.com/wp-content/uploads/2022/08/editing-books-300x200.jpg 300w, https://elnacain.com/wp-content/uploads/2022/08/editing-books-1024x683.jpg 1024w, https://elnacain.com/wp-content/uploads/2022/08/editing-books-720x480.jpg 720w, https://elnacain.com/wp-content/uploads/2022/08/editing-books-360x240.jpg 360w, https://elnacain.com/wp-content/uploads/2022/08/editing-books.jpg 1200w" sizes="(max-width: 768px) 100vw, 768px" data-pin-nopin="true"></a>
                        <div class="small">Aug 5, 2022</div>
                        <h4 class="text-center" style=";line-height:1.1"><a href="https://elnacain.com/blog/editing-books/">13 Editing Books for Beginner
                                Freelance Writers</a></h4>
                        <div>As a writer and editor you soak up as much information on copy editing as you possibly
                            can. And just like any other topic, you…</div>
                    </div><!-- .wrap -->
                </div>


                <div class="col-md-6 text-center mb-5">
                    <div class="wrap">

                        <a href="https://elnacain.com/blog/ux-writer-jobs/" class="entry-image-link"><img width="768" height="512" src="https://elnacain.com/wp-content/uploads/2022/07/ux-writer-jobs-768x512.jpg" class="wp-image-0 post-image entry-image mb-4" alt="" loading="lazy" srcset="https://elnacain.com/wp-content/uploads/2022/07/ux-writer-jobs-768x512.jpg 768w, https://elnacain.com/wp-content/uploads/2022/07/ux-writer-jobs-300x200.jpg 300w, https://elnacain.com/wp-content/uploads/2022/07/ux-writer-jobs-1024x683.jpg 1024w, https://elnacain.com/wp-content/uploads/2022/07/ux-writer-jobs-720x480.jpg 720w, https://elnacain.com/wp-content/uploads/2022/07/ux-writer-jobs-360x240.jpg 360w, https://elnacain.com/wp-content/uploads/2022/07/ux-writer-jobs.jpg 1200w" sizes="(max-width: 768px) 100vw, 768px" data-pin-nopin="true"></a>
                        <div class="small">Aug 3, 2022</div>
                        <h4 class="text-center" style=";line-height:1.1"><a href="https://elnacain.com/blog/ux-writer-jobs/">11+ Top UX Writer Jobs That Pay
                                Well in 2022</a></h4>
                        <div>Nowadays, more and more businesses are hiring writers to create UX content for their
                            sites, apps, and other digital products. In fact, the Business Bureau…</div>
                    </div><!-- .wrap -->
                </div>


                <div class="col-md-6 text-center mb-5">
                    <div class="wrap">

                        <a href="https://elnacain.com/blog/best-books-on-writing/" class="entry-image-link"><img width="768" height="512" src="https://elnacain.com/wp-content/uploads/2022/07/best-books-on-writing-768x512.jpg" class="wp-image-0 post-image entry-image mb-4" alt="" loading="lazy" srcset="https://elnacain.com/wp-content/uploads/2022/07/best-books-on-writing-768x512.jpg 768w, https://elnacain.com/wp-content/uploads/2022/07/best-books-on-writing-300x200.jpg 300w, https://elnacain.com/wp-content/uploads/2022/07/best-books-on-writing-1024x683.jpg 1024w, https://elnacain.com/wp-content/uploads/2022/07/best-books-on-writing-720x480.jpg 720w, https://elnacain.com/wp-content/uploads/2022/07/best-books-on-writing-360x240.jpg 360w, https://elnacain.com/wp-content/uploads/2022/07/best-books-on-writing.jpg 1200w" sizes="(max-width: 768px) 100vw, 768px" data-pin-nopin="true"></a>
                        <div class="small">Jul 30, 2022</div>
                        <h4 class="text-center" style=";line-height:1.1"><a href="https://elnacain.com/blog/best-books-on-writing/">31 Best Books on Writing You
                                Have to Read</a></h4>
                        <div>You can never stop learning, right? Whether you have tons of experience or are a
                            budding writer, it never hurts to pick up a book…</div>
                    </div><!-- .wrap -->
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="mx-auto text-center"><a class="btn btn-primary text-center" href="https://elnacain.com/blog/">Read more blog posts →</a></div>
                </div>
            </div>

        </div>
    </section>
</main>

@endsection