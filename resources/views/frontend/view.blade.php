<!-- {!! $blog->article_body !!} -->

@extends('frontend.base')

@section('content')

<!--begin::Content-->
<div class="container view-article" id="kt_content">
<p class="text-center article-title side-content">{{$blog->title}}</p>
    {!! $blog->article_body !!} 
</div>


@endsection