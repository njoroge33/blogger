@extends('frontend.base')

@section('content')
<main id="main" class="main " role="main">
    <!-- start image -->
    <div class="home-header  row">
        <div class="col-lg-6">
            <img src="{{asset('images/wrapper.jpg')}}" alt="" class="wrapper-img">
        </div>
        <div class="col-lg-6">
        <div class="firstsection d-flex justify-content-center text-center">
            <section class="front-page-optin front-page-optin-gptw ">

                <p class="fp-optin-title landing-page-h1">Feeling Clueless </br>About Landing Clients? </p>
                <p class="fp-optin-text">Here’s a <span >FREE 5-step guide</span> to start landing high-paying freelance writing jobs </p>
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
                                    <div class="col-form-submit d-grid mx-auto">
                                        <button onfocus="this.blur()" onclick="return false;" type="submit" class="submit-btn  btn-primary ">Sign me up!</button>
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
       
    </div>

    <section class="help-you  pt-2">
        <div class="wrap">

            <div class="row">
                <div class="col-12 h1 pb-4 text-center">
                    How Can I Help You?
                </div>
            </div>

            <div class="card-deck justify-content-around d-flex">
                <div class="card">
                    <div class="card-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m19.07 14.88l2.05 2.05L15.06 23H13v-2.06l6.07-6.06m1.97-1.75c.14 0 .27.06.38.17l1.28 1.28c.22.21.22.56 0 .77l-1 1l-2.05-2.05l1-1c.11-.11.25-.17.39-.17M17 4v6l-2-2l-2 2V4H9v16h2v2H7c-1.05 0-2-.95-2-2v-1H3v-2h2v-4H3v-2h2V7H3V5h2V4a2 2 0 0 1 2-2h12c1.05 0 2 .95 2 2v6l-2 2V4h-2M5 5v2h2V5H5m0 6v2h2v-2H5m0 6v2h2v-2H5Z"/></svg>
                        <p class= "help-titles"><a href="https://elnacain.com/course/getpaid/"><strong>I want to land my first
                                    client</strong></a></p>
                    </div>
                    <p class="Xcard-footer">Learn the first steps to find your first client <a href="https://elnacain.com/course/getpaid/">→</a></p>
                </div>
                <div class="card">
                    <div class="card-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 26 26"><path fill="currentColor" d="M18 .188c-4.315 0-7.813 1.929-7.813 4.312S13.686 8.813 18 8.813c4.315 0 7.813-1.93 7.813-4.313S22.314.187 18 .187zm7.813 5.593c-.002 2.383-3.498 4.313-7.813 4.313c-4.303 0-7.793-1.909-7.813-4.281V7.5c0 1.018.652 1.95 1.72 2.688c1.08.294 2.042.702 2.843 1.218c.993.252 2.085.406 3.25.406c4.315 0 7.813-1.929 7.813-4.312V5.781zm0 3c0 2.383-3.498 4.313-7.813 4.313c-.525 0-1.035-.039-1.531-.094a4.35 4.35 0 0 1 .781 1.781c.249.014.495.031.75.031c4.315 0 7.813-1.929 7.813-4.312V8.781zM8 11.187c-4.315 0-7.813 1.93-7.813 4.313S3.686 19.813 8 19.813c4.315 0 7.813-1.93 7.813-4.313S12.314 11.187 8 11.187zm17.813.594c-.002 2.383-3.498 4.313-7.813 4.313c-.251 0-.505-.018-.75-.032c-.011.075-.017.175-.031.25c.05.151.093.3.093.47v1c.227.011.455.03.688.03c4.315 0 7.813-1.929 7.813-4.312v-1.719zm0 3c-.002 2.383-3.498 4.313-7.813 4.313c-.251 0-.505-.018-.75-.032c-.011.075-.017.175-.031.25c.05.15.093.3.093.47v1c.227.011.455.03.688.03c4.315 0 7.813-1.929 7.813-4.312v-1.719zm-10 2c-.002 2.383-3.498 4.313-7.813 4.313c-4.303 0-7.793-1.909-7.813-4.282V18.5c0 2.383 3.497 4.313 7.813 4.313s7.813-1.93 7.813-4.313v-1.719zm0 3c-.002 2.383-3.498 4.313-7.813 4.313c-4.303 0-7.793-1.909-7.813-4.282V21.5c0 2.383 3.497 4.313 7.813 4.313s7.813-1.93 7.813-4.313v-1.719z"/></svg>
                        <p class= "help-titles"><a href="https://writeto1k.com/" rel="noopener" target="_blank"><strong>I want to make
                                    money writing</strong></a></p>
                    </div>
                    <p class="Xcard-footer">Get the exact blueprint I used to make a living as a writer <a href="https://writeto1k.com/" rel="noopener" target="_blank">→</a></p>

                </div>
                <div class="card">
                    <div class="card-body">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 48 48"><mask id="svgIDa"><g fill="none" stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="4"><path fill="#fff" d="M8 8h32v20H8z"/><path d="M8 28L4 41h40l-4-13"/><path fill="#fff" d="M19.9 35h8.2l1.9 6H18l1.9-6Z"/></g></mask><path fill="currentColor" d="M0 0h48v48H0z" mask="url(#svgIDa)"/></svg>
                        <p class= "help-titles"><strong><a href="https://elnacain.com/contact/">I'm looking to hire a writer</a></strong>
                        </p>
                    </div>
                    <p class="Xcard-footer">Want me to write for you?</br> Contact me! <a href="https://elnacain.com/contact/">→</a></p>
                </div>
            </div>
        </div>
    </section>
    <section class="latest-posts ">
        <p class= "fancy-headline text-center">Latest Blog Posts</p>
       <div class="card-deck">
       <div class="card">
            <div class="card-body">
            <div class="card-img">
                    <div class="card-content">
                        <p class="text-center">2 new </br> FREELANCE </br> jobs in 2 weeks from</br> Big Brands</p>
                    </div>
                <a href="https://elnacain.com/blog/how-to-start-a-blog/" class="entry-image-link"><img width="768" height="512" src="{{asset('images/wrapper.jpg')}}" class="wp-image-0 post-image entry-image mb-4" alt="" loading="lazy"  data-pin-nopin="true"></a>

                </div>
                        <p class="small card-title">Aug 26, 2022</p>
                        <h5 class="text-center"><a class='article-link' href="https://elnacain.com/blog/2-jobs-in-2-weeks/">2 Freelance Writing Jobs in 2
                                Weeks (From Big Brands)</a></h5>
               
             
                            <p class="card-text">A few years ago, I wanted to do a case study of using job boards to land new freelance
                            writing gigs. I was able to…</p>
                            <p class="more-link-wrap"> 
                <a name="" id="" class="btn btn-primary more-link" href="https://elnacain.com/blog/how-to-start-a-blog/#more-10366" role="button">Read</a>
            
                </p>
            </div>
        </div>
        
        <div class="card">
            <div class="card-body">
            <div class="card-img">
                    <div class="card-content">
                        <p class="text-center">2 new </br> FREELANCE </br> jobs in 2 weeks from</br> Big Brands</p>
                    </div>
                <a href="https://elnacain.com/blog/how-to-start-a-blog/" class="entry-image-link"><img width="768" height="512" src="{{asset('images/wrapper.jpg')}}" class="wp-image-0 post-image entry-image mb-4" alt="" loading="lazy"  data-pin-nopin="true"></a>

                </div>
                        <p class="small card-title">Aug 26, 2022</p>
                        <h5 class="text-center"><a class='article-link' href="https://elnacain.com/blog/2-jobs-in-2-weeks/">2 Freelance Writing Jobs in 2
                                Weeks (From Big Brands)</a></h5>
               
             
                            <p class="card-text">A few years ago, I wanted to do a case study of using job boards to land new freelance
                            writing gigs. I was able to…</p>
                            <p class="more-link-wrap"> 
                <a name="" id="" class="btn btn-primary more-link" href="https://elnacain.com/blog/how-to-start-a-blog/#more-10366" role="button">Read</a>
            
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <div class="card-img">
                    <div class="card-content">
                        <p class="text-center">2 new </br> FREELANCE </br> jobs in 2 weeks from</br> Big Brands</p>
                    </div>
                <a href="https://elnacain.com/blog/how-to-start-a-blog/" class="entry-image-link"><img width="768" height="512" src="{{asset('images/wrapper.jpg')}}" class="wp-image-0 post-image entry-image mb-4" alt="" loading="lazy"  data-pin-nopin="true"></a>

                </div>
                        <p class="small card-title">Aug 26, 2022</p>
                        <h5 class="text-center"><a class='article-link' href="https://elnacain.com/blog/2-jobs-in-2-weeks/">2 Freelance Writing Jobs in 2
                                Weeks (From Big Brands)</a></h5>
               
             
                            <p class="card-text">A few years ago, I wanted to do a case study of using job boards to land new freelance
                            writing gigs. I was able to…</p>
                            <p class="more-link-wrap"> 
                <a name="" id="" class="btn btn-primary more-link" href="https://elnacain.com/blog/how-to-start-a-blog/#more-10366" role="button">Read</a>
            
                </p>
            </div>
        </div>
         <div class="card">
            <div class="card-body">
            <div class="card-img">
                    <div class="card-content">
                        <p class="text-center">2 new </br> FREELANCE </br> jobs in 2 weeks from</br> Big Brands</p>
                    </div>
                <a href="https://elnacain.com/blog/how-to-start-a-blog/" class="entry-image-link"><img width="768" height="512" src="{{asset('images/wrapper.jpg')}}" class="wp-image-0 post-image entry-image mb-4" alt="" loading="lazy"  data-pin-nopin="true"></a>

                </div>
                        <p class="small card-title">Aug 26, 2022</p>
                        <h5 class="text-center"><a class='article-link' href="https://elnacain.com/blog/2-jobs-in-2-weeks/">2 Freelance Writing Jobs in 2
                                Weeks (From Big Brands)</a></h5>
               
             
                            <p class="card-text">A few years ago, I wanted to do a case study of using job boards to land new freelance
                            writing gigs. I was able to…</p>
                            <p class="more-link-wrap"> 
                <a name="" id="" class="btn btn-primary more-link" href="https://elnacain.com/blog/how-to-start-a-blog/#more-10366" role="button">Read</a>
            
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <div class="card-img">
                    <div class="card-content">
                        <p class="text-center">2 new </br> FREELANCE </br> jobs in 2 weeks from</br> Big Brands</p>
                    </div>
                <a href="https://elnacain.com/blog/how-to-start-a-blog/" class="entry-image-link"><img width="768" height="512" src="{{asset('images/wrapper.jpg')}}" class="wp-image-0 post-image entry-image mb-4" alt="" loading="lazy"  data-pin-nopin="true"></a>

                </div>
                        <p class="small card-title">Aug 26, 2022</p>
                        <h5 class="text-center"><a class='article-link' href="https://elnacain.com/blog/2-jobs-in-2-weeks/">2 Freelance Writing Jobs in 2
                                Weeks (From Big Brands)</a></h5>
               
             
                            <p class="card-text">A few years ago, I wanted to do a case study of using job boards to land new freelance
                            writing gigs. I was able to…</p>
                            <p class="more-link-wrap"> 
                <a name="" id="" class="btn btn-primary more-link" href="https://elnacain.com/blog/how-to-start-a-blog/#more-10366" role="button">Read</a>
            
                </p>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
            <div class="card-img">
                    <div class="card-content">
                        <p class="text-center">2 new </br> FREELANCE </br> jobs in 2 weeks from</br> Big Brands</p>
                    </div>
                <a href="https://elnacain.com/blog/how-to-start-a-blog/" class="entry-image-link"><img width="768" height="512" src="{{asset('images/wrapper.jpg')}}" class="wp-image-0 post-image entry-image mb-4" alt="" loading="lazy"  data-pin-nopin="true"></a>

                </div>
                        <p class="small card-title">Aug 26, 2022</p>
                        <h5 class="text-center"><a class='article-link' href="https://elnacain.com/blog/2-jobs-in-2-weeks/">2 Freelance Writing Jobs in 2
                                Weeks (From Big Brands)</a></h5>
               
             
                            <p class="card-text">A few years ago, I wanted to do a case study of using job boards to land new freelance
                            writing gigs. I was able to…</p>
                            <p class="more-link-wrap"> 
                <a name="" id="" class="btn btn-primary more-link" href="https://elnacain.com/blog/how-to-start-a-blog/#more-10366" role="button">Read</a>
            
                </p>
            </div>
        </div>
       </div>
   
            <div class="row mt-5">
                <div class="col">
                    <div class="mx-auto text-center"><a class="btn btn-primary text-center btn-readmore" href="https://elnacain.com/blog/">Read more blog posts →</a></div>
                </div>
            </div>

        </div>
    </section>
   
     
           
                    
    </div>
    <div class="row testimonials">
  
    <h3 class="text-center testimonial-title">Testimonials</h3>

        <div class="card-decks">

            
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Leonard Rono</h4>
                    <h6 class="text-primary mb-3"><a href="http://thepennyvoice.com">thepennyvoice.com</a></h6>

                    <p class="card-text">
                    Catherine is an excellent Copywriter with an impressive understanding of topic clusters. Her ability to create content that converts played an integral role in our newly-launched blog getting a consistent number of readers.
                        
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Leonard Rono</h4>
                    <h6 class="text-primary mb-3"><a href="http://thepennyvoice.com">thepennyvoice.com</a></h6>

                    <p class="card-text">
                    Catherine is an excellent Copywriter with an impressive understanding of topic clusters. Her ability to create content that converts played an integral role in our newly-launched blog getting a consistent number of readers.
                        
                    </p>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Leonard Rono</h4>
                    <h6 class="text-primary mb-3"><a href="http://thepennyvoice.com">thepennyvoice.com</a></h6>

                    <p class="card-text">
                    Catherine is an excellent Copywriter with an impressive understanding of topic clusters. Her ability to create content that converts played an integral role in our newly-launched blog getting a consistent number of readers.
                        
                    </p>
                </div>
            </div>
            
        </div>
    </div>
      
</main>

@endsection