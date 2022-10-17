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
													Create Testimonies
												</h2>
												
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
                                            
    <form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework" novalidate="novalidate" method="POST" action="{{ route('test.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row fv-row mb-12 fv-plugins-icon-container">
            <!--begin::Col-->
            <div class="col-xl-8">
                <label for="content_title" class="form-label fw-bolder text-dark fs-6">Testimony Owner</label>
                <input class="form-control form-control-lg form-control-solid" type="text" name="owner" placeholder="Owner" required>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Col-->
        </div>

        <div class="row fv-row mb-12 fv-plugins-icon-container">
            <!--begin::Col-->
            <div class="col-xl-8">
                <label for="content_title" class="form-label fw-bolder text-dark fs-6">Testimony Url</label>
                <input class="form-control form-control-lg form-control-solid" type="text" name="url" placeholder="Url" required>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Col-->
        </div>

        <div class="row fv-row mb-12 fv-plugins-icon-container">
            <!--begin::Col-->
            <div class="col-xl-8">
                <label for="content_title" class="form-label fw-bolder text-dark fs-6">Testimony Body</label>
                <textarea class="form-control form-control-lg form-control-solid" type="text" name="desc" placeholder="Testimony Body"></textarea>
                <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <!--end::Col-->
        </div>
	

       
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
