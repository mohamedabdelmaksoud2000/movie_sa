@extends('layouts.master')
@section('css')
<!---Internal  Owl Carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<!--- Internal Timeline css-->
<link href="{{URL::asset('assets/plugins/timeline/css/timeline.min.css')}}" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>

@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">update genre</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Genre</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- Row -->
                <form method="POST" action="{{route('dashboard.genre.update',$genre->id)}}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card custom-card">
                            <div class="card-header custom-card-header">
								<h6 class="card-title mb-0"><i class="fa-solid fa-file"></i> update genre : {{ $genre->name }}</h6>
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                            </div>
                            <div class="card-body row">
                                <div class="form-group col-sm-12 col-md-4">
                                    <label for="name_book"><i class="fa-solid fa-file-signature"></i> Title</label>
                                    <input type="text" name="name" class="form-control" id="name_book" placeholder="name genre" value="{{ $genre->name }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row -->
                    {{--End row--}}
                    <div class="row" style="margin-right: 0px;width: 100%">
                        <div class="col-sm-12">
                            <div class="card custom-card">
                                <div class="card-body row">
                                    <div class="col-sm-4" style="margin: 0 auto">
                                        <input type="submit" class="btn btn-success btn-block" value="Insert">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                {{--End row--}}
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Fileuploads js-->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endsection
