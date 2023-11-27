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
							<h4 class="content-title mb-0 my-auto">create</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ Movie</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
            <form method="POST" action="{{route('dashboard.movie.update',$movie->id)}}" enctype="multipart/form-data">
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
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="name"><i class="fa-solid fa-file-signature"></i> name</label>
                                        <input type="text" name="name" class="form-control" id="name" placeholder="insert name" value="{{ $movie->name }}">
                                    </div>
                                    <div class="form-group col-sm-12 col-md-6">
                                        <label for="rate"><i class="fa-solid fa-file-signature"></i> rate</label>
                                        <input type="number" name="rate" class="form-control" id="rate" placeholder="insert rate" value="{{ $movie->rate }}">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{--End row--}}
                <!-- End Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-header custom-card-header">
                                <h6 class="card-title mb-0"><i class="fa-solid fa-align-justify"></i> Genres</h6>
                            </div>
                            <div id="newgenre" class="card-body row">
                                @foreach ($movie->genres as $movieGenre)
                                    <div class="row col-sm-12">
                                        <div class="col-sm-12 col-md-4 form-group">
                                            <p class="mg-b-10">genre</p>
                                            <select name="genres[]" class="form-control">
                                                <option label="choose Category">
                                                </option>
                                                @foreach ($genres as $genre)
                                                    <option value="{{ $genre->id }}" @if ($genre->id == $movieGenre->id)
                                                        selected
                                                    @endif>
                                                        {{ $genre->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="button" style="height: 38px;margin-top: 31px;" class="btn btn-danger btn-sm" id="remove-btn"><i class="fa-solid fa-minus" style="color: #fff"></i></button>
                                    </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-info btn-sm" id="add_genre"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                {{--End row--}}
                <!-- End Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-header custom-card-header">
                                <h6 class="card-title mb-0"><i class="fa-solid fa-align-justify"></i> Actors</h6>
                            </div>
                            <div id="newactor" class="card-body row">
                                @foreach ($movie->actors as $movieActor)
                                    <div class="row col-sm-12">
                                        <div class="col-sm-12 col-md-4 form-group">
                                            <p class="mg-b-10">actor</p>
                                            <select name="actors[]" class="form-control">
                                                <option label="choose Category">
                                                </option>
                                                @foreach ($actors as $actor)
                                                    <option value="{{ $actor->id }}" @if ($actor->id == $movieActor->id)
                                                        selected
                                                    @endif>
                                                        {{ $actor->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <button type="button" style="height: 38px;margin-top: 31px;" class="btn btn-danger btn-sm" id="remove-btn"><i class="fa-solid fa-minus" style="color: #fff"></i></button>
                                    </div>
                                @endforeach
                            </div>
                            <button type="button" class="btn btn-info btn-sm" id="add_actor"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                {{--End row--}}
				<!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-header custom-card-header">
                                <h6 class="card-title mb-0"><i class="fa-solid fa-image"></i> insert image</h6>
                            </div>
                            <div class="card-body row">
                                <div class="col-sm-6">
                                    <input name="image_file" type="file" class="dropify" data-height="200" />
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{ $movie->imageUrl }}" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

                <!-- Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-header custom-card-header">
                                <h6 class="card-title mb-0"><i class="fa-solid fa-image"></i> insert trailer</h6>
                            </div>
                            <div class="card-body row">
                                <div class="col-sm-12">
                                    <input name="trailer_file" type="file" class="dropify" data-height="200" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->

				{{--Start row--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-header custom-card-header">
                                <h6 class="card-title mb-0"><i class="fa-solid fa-file-contract"></i> Description</h6>
                            </div>
                            <div class="card-body row">
                                <div class="form-group col-sm-12">
                                    <textarea id="editor" class="ckeditor form-control" name="description">{{ $movie->description }}</textarea>
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
                                    <input type="submit" class="btn btn-success btn-block" value="add category">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
                {{--End row--}}
                <div id="actor" style="display:none">
                    <div class="row col-sm-12">
                        <div class="col-sm-12 col-md-4 form-group">
                            <p class="mg-b-10">actor</p>
                            <select name="actors[]" class="form-control">
                                <option label="choose Category">
                                </option>
                                @foreach ($actors as $actor)
                                    <option value="{{ $actor->id }}">
                                        {{ $actor->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="button" style="height: 38px;margin-top: 31px;" class="btn btn-danger btn-sm" id="remove-btn"><i class="fa-solid fa-minus" style="color: #fff"></i></button>
                    </div>
                </div>
                    {{--End row--}}
                    {{--End row--}}
                <div id="genre" style="display:none">
                    <div class="row col-sm-12">
                        <div class="col-sm-12 col-md-4 form-group">
                            <p class="mg-b-10">genre</p>
                            <select name="genres[]" class="form-control">
                                <option label="choose Category">
                                </option>
                                @foreach ($genres as $genre)
                                    <option value="{{ $genre->id }}">
                                        {{ $genre->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <button type="button" style="height: 38px;margin-top: 31px;" class="btn btn-danger btn-sm" id="remove-btn"><i class="fa-solid fa-minus" style="color: #fff"></i></button>
                    </div>
                </div>
                    {{--End row--}}
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
<script>
    $(document).ready(function () {
        $('.ckeditor').ckeditor();
    });
    $(document).ready(function () {
            var genre =document.getElementById('genre');
            var actor =document.getElementById('actor');
            $('#add_genre').on('click',function () {
                var html1 = genre.innerHTML;
                $("#newgenre").append(html1);
            });
            $('#add_actor').on('click',function () {
                var html2 = actor.innerHTML;
                $("#newactor").append(html2);
            });
        });
        $(document).on('click','#remove-btn',function () {
            $(this).closest('div').remove();
        });
</script>
@endsection