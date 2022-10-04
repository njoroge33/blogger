@extends('backend.base')

@section('content')
<!--begin::Content-->
<div class="content" id="kt_content">
					
						<!--begin::Entry-->
						<!-- <div class="d-flex flex-column-fluid"> -->
                        
                        
                        <!--begin::List Widget 9-->
										<div class="card">
											<!--begin::Header-->
											<div class="card-header align-items-center border-0 mt-4">
												<h2 class="card-title align-items-start flex-column">
													Edit Blog
												</h2>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
                                            
    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" method="POST" action="{{ route('blogs.update', $blog->article_id) }}" enctype="multipart/form-data">
        @csrf
        <div class="row fv-row mb-12 fv-plugins-icon-container">
            <!--begin::Col-->
            <div class="col-xl-8">
                <label for="content_title" class="form-label fw-bolder text-dark fs-6">Blog Title</label>
                <input class="form-control form-control-lg form-control-solid" type="text" name="content_title" id="content_title" placeholder="Title" value="{{$blog->title}}" required>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Col-->
        </div>

        <div class="row fv-row mb-12 fv-plugins-icon-container">
            <!--begin::Col-->
            <div class="col-xl-8">
                <label for="content_title" class="form-label fw-bolder text-dark fs-6">Blog Description</label>
                <textarea class="form-control form-control-lg form-control-solid" type="text" name="desc" placeholder="Description" >{{$blog->description}}</textarea>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Col-->
        </div>
	<!--end::Input group-->
        <div class="row fv-row mb-7 mt-2 fv-plugins-icon-container" id="image_link">
            <!--begin::Col-->
            <div class="col-xl-8">
                <label for="image_link" class="form-label fw-bolder text-dark fs-6">Placeholder Image</label>
                <input class="form-control form-control-lg form-control-solid" type="file" name="image_link" id="image_link" placeholder="Image Upload"  required>
                <p>Current image: </p>
                <img src="{{ asset('storage/'.$blog->image_url) }}" width="100px">
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->

        <!--end::Input group-->
        <div class="row fv-row mb-7 mt-2 fv-plugins-icon-container" id="content_id" >
            <!--begin::Col-->
            <div class="col-xl-8">
                <label for="content" class="form-label fw-bolder text-dark fs-6">Blog Content</label>
<!--<div id="toolbar-container"></div>-->
<div id="editor" name ="editor">{!!$blog->article_body!!}
</div>             
<input type="hidden" id="content" name="content" ></input>
 
		                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Col-->
        </div>
        <!--end::Input group-->
            <!--end::Input group-->
        <button type="submit" class="btn btn-primary float-right">Save</button>
        <!--end::Actions-->
        <div></div>
    </form>
												
											</div>
											<!--end: Card Body-->
										</div>
										<!--end: List Widget 9-->



   
    <!-- </div> -->
						<!--end::Entry-->
					</div>
					<!--end::Content-->

    @endsection
