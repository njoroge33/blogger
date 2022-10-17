@extends('frontend.base')

@section('content')
<main id="main" class="contact-main pt-3" role="main">
    <article id="post-15" class="post-15 page type-page status-publish hentry">

        <div class="">
            <h1 class="entry-title text-left">Contact Catherine</h1>

                    <div class="social-avatar">
                    <div class="contact-content">
                    <p class="null">Find me on social:&nbsp;&nbsp;

                    <a class="mx-1" style="color: inherit; border: 0;" href="" target="_blank" rel="noopener">
                        <img loading="lazy"
                            src="https://elnacain.com/wp-content/themes/elna-v5/images/icons/fa-facebook-f.svg" width="20"
                            height="20" data-pin-nopin="true"></a>
                    <a class="mx-1" style="color: inherit; border: 0;" href="https://twitter.com/ecainwrites"
                        target="_blank" rel="noopener">
                        <img loading="lazy" src="https://elnacain.com/wp-content/themes/elna-v5/images/icons/fa-twitter.svg"
                            width="20" height="20" data-pin-nopin="true"></a>
                    <a class="mx-1" style="color: inherit; border: 0;" href="https://www.instagram.com/ain/"
                        target="_blank" rel="noopener">
                        <img loading="lazy"
                            src="https://elnacain.com/wp-content/themes/elna-v5/images/icons/fa-instagram.svg" width="20"
                            height="20" data-pin-nopin="true"></a>
                    </p>
                    <p>To reach me, just drop me your email at <a
                    href="mailto:freelancersdigest@gmail.com" class="text-color">freelancersdigest@gmail.com</a>. I’ll find it and respond
                        ASAP!</p>
                    <p>You can also follow me on <a
                            class="text-color" href="https://www.linkedin.com/in/freelance-seo-copywriter-katie-the-writer/">LinkedIn</a> and send
                        me an Inmail and I’ll also respond within 12 hours.</p>
                    <p>Alternatively, you can leave me a WhatsApp message on +254 706 724 231</p>

                    <p>Or send me your questions or comments below and I’ll get back to you as soon as I can!</p>
                    </div>
                    
                    <img class="avatar-contact alignright size-thumbnail"
                    src="{{url('/images/cropped-me.jpg')}}" alt="cate" width="150"
                        height="150" data-pin-nopin="true">
                </div>
           
          
            <div class="clearfix"></div>
            <form>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="name" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
            <div class="form-group">
                <label for="name">Subject</label>
                <input type="text" class="form-control" id="subject" aria-describedby="subject" placeholder="Enter subject">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="6"></textarea>
            </div>
            
            <button type="submit" class="btn btn-primary btn-contact">Submit</button>
            </form>

        </div><!-- .entry-content -->


        <footer class="entry-footer">
        </footer><!-- .entry-footer -->

    </article><!-- #post-## -->
</main>

@endsection