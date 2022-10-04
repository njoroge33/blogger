<!-- {!! $blog->article_body !!} -->

@extends('frontend.base')

@section('content')

<!--begin::Content-->
<div class="container" id="kt_content">
<p class="text-center side-content">{{$blog->title}}</p>
    {!! $blog->article_body !!} 
</div>


@endsection