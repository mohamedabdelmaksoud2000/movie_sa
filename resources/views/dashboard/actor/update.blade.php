@extends('layouts.master')
@section('css')
<!---Internal  Owl Carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet">
<!--- Internal Timeline css-->
<link href="{{URL::asset('assets/plugins/timeline/css/timeline.min.css')}}" rel="stylesheet">
<!---Internal Fileupload css-->
<link href="{{URL::asset('assets/plugins/fileuploads/css/fileupload.css')}}" rel="stylesheet" type="text/css"/>
<!-- Internal Select2 css -->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<!--Internal  Datetimepicker-slider css -->
<link href="{{URL::asset('assets/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">

@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">create</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Actor</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
            <form method="POST" action="{{route('dashboard.actor.update',$actor->id)}}" enctype="multipart/form-data">
                @csrf
                @if ($errors->any())
                    <div class="row">
                        <div class="col-12">
                            <div class="card custom-card">
                                <div class="card-header custom-card-header">
                                    <h6 class="card-title mb-0"><i class="fa-solid fa-image"></i> errors</h6>
                                </div>
                                <div class="card-body row">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                <!-- Row -->
                
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-header custom-card-header">
                                <h6 class="card-title mb-0"><i class="fa-solid fa-info"></i> information</h6>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="form-group col-sm-12 col-md-4">
                                        <label for="name"><i class="fa-solid fa-file-signature"></i> name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="insert name" value="{{ $actor->name }}">
                                    </div>
                                </div>	
                            </div>
                        </div>
                    </div>
                </div>
                {{--End row--}}
				<!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-header custom-card-header">
                                <h6 class="card-title mb-0"><i class="fa-solid fa-image"></i> insert file</h6>
                            </div>
                            <div class="card-body row">
                                <div class="col-sm-6">
                                    <input name="image_file" type="file" class="dropify" data-height="200" />
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ $actor->imageUrl }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-body row">
                                <div class="col-sm-6" style="margin: 0 auto">
                                    <input type="submit" class="btn btn-success btn-block" value="save">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Datepicker js -->
<script src="{{URL::asset('assets/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
<!--Internal  jquery.maskedinput js -->
<script src="{{URL::asset('assets/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
<!--Internal  spectrum-colorpicker js -->
<script src="{{URL::asset('assets/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
<!-- Internal Select2.min js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal  jquery-simple-datetimepicker js -->
<script src="{{URL::asset('assets/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
<!-- Ionicons js -->
<script src="{{URL::asset('assets/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
<!-- Internal form-elements js -->
<script src="{{URL::asset('assets/js/form-elements.js')}}"></script>
<!--Internal Fileuploads js-->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
@endsection