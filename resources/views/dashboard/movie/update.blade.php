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
							<h4 class="content-title mb-0 my-auto">Insert Movie</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Movie</span>
						</div>
					</div>
					<div class="d-flex my-xl-auto right-content">
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-info btn-icon ml-2"><i class="mdi mdi-filter-variant"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-danger btn-icon ml-2"><i class="mdi mdi-star"></i></button>
						</div>
						<div class="pr-1 mb-3 mb-xl-0">
							<button type="button" class="btn btn-warning  btn-icon ml-2"><i class="mdi mdi-refresh"></i></button>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- Row -->
                <form method="POST" action="{{route('movie.update')}}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-header custom-card-header">
                                <h6 class="card-title mb-0"><i class="fa-solid fa-info"></i> The Information Movie</h6>
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
                            <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-12 col-md-4">
                                            <label for="name_book"><i class="fa-solid fa-file-signature"></i> Title</label>
                                            <input type="text" name="title" class="form-control" id="name_book" placeholder="Title" value="{{$movie->title}}">
                                        </div>
                                        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                            <p class="mg-b-10"><i class="fa-solid fa-language"></i> Language</p><select name="lang" class="form-control select2">
                                                <option @if($movie->lang == 'Arabic')selected @endif >
                                                    Arabic
                                                </option>
                                                <option @if($movie->lang == 'English')selected @endif >
                                                    English
                                                </option>
                                                <option @if($movie->lang == 'Chinese')selected @endif >
                                                    Chinese
                                                </option>
                                                <option @if($movie->lang == 'Indian')selected @endif >
                                                    Indian
                                                </option>
                                                <option @if($movie->lang == 'Italian')selected @endif >
                                                    Italian
                                                </option>
                                                <option @if($movie->lang == 'Spanish')selected @endif >
                                                    Spanish
                                                </option>
                                                <option @if($movie->lang == 'Russian')selected @endif >
                                                    Russian
                                                </option>
                                                <option @if($movie->lang == 'Turkish')selected @endif >
                                                    Turkish
                                                </option>
                                                <option @if($movie->lang == 'French')selected @endif >
                                                    French
                                                </option>
                                                <option @if($movie->lang == 'German')selected @endif >
                                                    German
                                                </option>
                                            </select>
                                        </div><!-- col-4 -->
                                        <div class="form-group col-sm-12 col-md-4">
                                            <label ><i class="fa-solid fa-globe"></i> Country</label>
                                            <input type="text" name="country" class="form-control" placeholder="Country" value="{{$movie->country}}">
                                        </div>
                                        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                            <p class="mg-b-10">Status</p><select name="status" class="form-control select2">
                                                <option value="soon" @if($movie->status == 'soon')selected @endif >
                                                    soon
                                                </option>
                                                <option value="active" @if($movie->status == 'active')selected @endif >
                                                    active
                                                </option>
                                            </select>
                                        </div><!-- col-4 -->
                                        <div class="form-group col-sm-12 col-md-4">
                                            <label ><i class="fa-solid fa-star"></i> rate IMBD</label>
                                            <input type="text" name="rate_imbd" class="form-control" placeholder="rate imbd" value="{{$movie->rate_imbd}}">
                                        </div>
                                        <div class="form-group col-sm-12 col-md-4">
                                            <label ><i class="fa-solid fa-star"></i> movie year</label>
                                            <input type="text" name="movie_year" class="form-control" placeholder="movie year" value="{{$movie->movie_year}}">
                                        </div>
                                    </div>
                                    <input type="hidden" style="display:none" name="id" value="{{$movie->id}}">
                            </div>
                        </div>
                    </div>
                </div>
                {{--End row--}}
                
                {{--Start row--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-header custom-card-header">
                                <h6 class="card-title mb-0"><i class="fa-solid fa-file-contract"></i> Describe Movie</h6>
                            </div>
                            <div class="card-body row">
                                <div class="form-group col-sm-12">
                                    <textarea style="width:90%;height:150px" name="describe" >{{$movie->describe}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--End row--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-body row">
                                <div class="col-sm-6" style="margin: 0 auto">
                                    <input type="submit" class="btn btn-success btn-block" value="update">
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
