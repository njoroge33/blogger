<!-- {!! $blog->article_body !!} -->

@extends('frontend.base')

@section('content')

<!--begin::Content-->
<div class="container view-article" id="kt_content">
    <p class="text-center article-title side-content">{{$blog->title}}</p>
    {!! $blog->article_body !!} 
    
   
</div>
 {{-- <hr> --}}
    <div class="container form py-2 my-3 shadow radius feedback">
    <p class="fw-bold"><span>This post has 0 Comments </span><br>Leave a reply </p>

    <form class="">
    
        <div class="form-group">
        <label for="exampleFormControlInput1">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <div class="form-group">
        <label for="exampleFormControlTextarea1">Comment</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
        </div>
        
    <button type="submit" class="btn btn-primary my-3 send">Post Comment</button>
    </form>
    </div>


@endsection