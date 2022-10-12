@extends('frontend.base')

@section('content')

<main id="main" class="main" role="main">
    <article id="post-10366"
        class="post-10366 post type-post status-publish format-standard has-post-thumbnail sticky hentry category-blog">
        <section class="all-posts ">
       <div class="card-deck">
       @foreach ($blogs as $blog )
       <div class="card">
            <div class="card-body">
            <div class="card-img">
                    <div class="card-content">
                        <p class="text-center side-content">{{substr($blog->title, 0, 100)}}</p>
                    </div>
                <a href="#" class="entry-image-link"><img width="768" height="512" src="{{ asset('storage/'.$blog->image_url) }}"class="wp-image-0 post-image entry-image mb-4" alt="" loading="lazy"  data-pin-nopin="true"></a>

                </div>
                        <p class="small card-title">{{ \Carbon\Carbon::parse($blog->created_at)->format('M d, Y')}}</p>
                        <h4 class="text-center" style=";line-height:1.1"><a href="#">{{substr($blog->title, 0, 100)}} </a></h4>
               
                <p class="card-text">{{substr($blog->description, 0, 150)}} ...</p>
                            <p class="more-link-wrap"> 
                <a name="" id="" class="btn btn-primary more-link" href="{{route('view', $blog->article_id)}}" role="button">Continue reading →</a>
            <a href=""
                    class=""> <span class="meta-nav"></span></a>
                </p>
            </div>
        </div>
        @endforeach
        
       
   
            <div class="row mt-5">
                <div class="col">
                    <div class="mx-auto text-center"><a class="btn btn-primary text-center btn-readmore" href="https://elnacain.com/blog/">Read more blog posts →</a></div>
                </div>
            </div>

        </div>
    </section>
   

       




   
 
</main>
@endsection