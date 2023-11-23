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
                <form method="POST" action="{{route('movie.store')}}" enctype="multipart/form-data">
                @csrf
				<div class="row">
					<div class="col-lg-12">
						<div class="card custom-card">
							<div class="card-header custom-card-header">
								<h6 class="card-title mb-0"><i class="fa-solid fa-file"></i> Insert Image Movie</h6>
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
                                <div class="col-sm-12 col-md-4">
                                    <input name="image" type="file" class="dropify" data-height="200" multiple />
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
                                <h6 class="card-title mb-0"><i class="fa-solid fa-image"></i> insert trailer movie</h6>
                            </div>
                            <div class="card-body row">
                                <div class="col-sm-12 col-md-4">
                                    <input name="trailer" type="file" class="dropify" data-height="200" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-header custom-card-header">
                                <h6 class="card-title mb-0"><i class="fa-solid fa-info"></i> The Information Movie</h6>
                            </div>
                            <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-sm-12 col-md-4">
                                            <label for="name_book"><i class="fa-solid fa-file-signature"></i> Title</label>
                                            <input type="text" name="title" class="form-control" id="name_book" placeholder="Title">
                                        </div>
                                        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                            <p class="mg-b-10"><i class="fa-solid fa-language"></i> Language</p><select name="lang" class="form-control select2">
                                                <option>
                                                    Arabic
                                                </option>
                                                <option>
                                                    English
                                                </option>
                                                <option>
                                                    Chinese
                                                </option>
                                                <option>
                                                    Indian
                                                </option>
                                                <option>
                                                    Italian
                                                </option>
                                                <option>
                                                    Spanish
                                                </option>
                                                <option>
                                                    Russian
                                                </option>
                                                <option>
                                                    Turkish
                                                </option>
                                                <option >
                                                    French
                                                </option>
                                                <option >
                                                    German
                                                </option>
                                            </select>
                                        </div><!-- col-4 -->
                                        <div class="form-group col-sm-12 col-md-4">
                                            <label ><i class="fa-solid fa-globe"></i> Country</label>
                                            <input type="text" name="country" class="form-control" placeholder="Country">
                                        </div>
                                        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
                                            <p class="mg-b-10">Status</p><select name="status" class="form-control select2">
                                                <option value="soon">
                                                    soon
                                                </option>
                                                <option value="active" selected >
                                                    active
                                                </option>
                                            </select>
                                        </div><!-- col-4 -->
                                        <div class="form-group col-sm-12 col-md-4">
                                            <label ><i class="fa-solid fa-star"></i> rate IMBD</label>
                                            <input type="text" name="rate_imbd" class="form-control" placeholder="rate imbd">
                                        </div>
                                        <div class="form-group col-sm-12 col-md-4">
                                            <label ><i class="fa-solid fa-star"></i> movie year</label>
                                            <input type="text" name="movie_year" class="form-control" placeholder="movie year">
                                        </div>
                                    </div>
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
                                <h6 class="card-title mb-0"><i class="fa-solid fa-people-group"></i> Casts</h6>
                            </div>
                            <div id="newcast" class="card-body row">
                                <div class="row col-sm-12">
                                    <div class="col-sm-6 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10"><i class="fa-solid fa-user-tie"></i> person</p><select name="actor[]" class="form-control select2">
                                            @foreach($actors as $actor)
                                                <option value="{{$actor->id}}">
                                                    {{$actor->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div><!-- col-4 -->
                                    <div class="col-sm-6 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10"><i class="fa-solid fa-user-tie"></i> job</p><select name="cast[]" class="form-control select2">
                                            <option>
                                                Actor
                                            </option>
                                            <option>
                                                Director
                                            </option>
                                            <option>
                                                Author
                                            </option>
                                        </select>
                                    </div><!-- col-4 -->
                                </div>
                            </div>
                            <button type="button" class="btn btn-info btn-sm add-btn" id="add_cast"><i class="fa-solid fa-plus"></i></button>
                        </div>
                    </div>
                </div>
                {{--End row--}}
                {{--Start row--}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card custom-card">
                            <div class="card-header custom-card-header">
                                <h6 class="card-title mb-0"><i class="fa-solid fa-align-justify"></i> Catgories</h6>
                            </div>
                            <div id="newcategory" class="card-body row">
                                <div class="row col-sm-12">
                                    <div class="col-sm-6 mg-t-20 mg-lg-t-0">
                                        <p class="mg-b-10"><i class="fa-solid fa-puzzle-piece"></i> category</p><select name="category[]" class="form-control select2">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}">
                                                    {{$category->name}}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div><!-- col-4 -->
                                </div>
                            </div>
                            <button type="button" class="btn btn-info btn-sm" id="add_category"><i class="fa-solid fa-plus"></i></button>
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
                                    <textarea style="width:90%;height:150px" name="describe"></textarea>
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
                                    <input type="submit" class="btn btn-success btn-block" value="insert">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>

                <div id="casts" style="display:none">
                <div class="row col-sm-12">
                    <div class="col-sm-5 mg-t-20 mg-lg-t-0">
                        <p class="mg-b-10"><i class="fa-solid fa-user-tie"></i> person</p><select name="actor[]" class="form-control select2">
                            @foreach($actors as $actor)
                                <option value="{{$actor->id}}">
                                    {{$actor->name}}
                                </option>
                            @endforeach
                        </select>
                    </div><!-- col-4 -->
                    <div class="col-sm-5 mg-t-20 mg-lg-t-0">
                        <p class="mg-b-10"><i class="fa-solid fa-user-tie"></i> job</p><select name="cast[]" class="form-control select2">
                            <option>
                                Actor
                            </option>
                            <option>
                                Director
                            </option>
                            <option>
                                Author
                            </option>
                        </select>
                    </div><!-- col-4 -->
                    <button type="button" style="height: 38px;margin-top: 31px;" class="btn btn-danger btn-sm" id="remove-btn"><i class="fa-solid fa-minus" style="color: #fff"></i></button>
                </div>
                </div>

                <div id="category" style="display:none">
                    <div class="row col-sm-12">
                        <div class="col-sm-6 mg-t-20 mg-lg-t-0">
                            <p class="mg-b-10"><i class="fa-solid fa-puzzle-piece"></i> category</p><select name="category[]" class="form-control select2">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">
                                        {{$category->name}}
                                    </option>
                                @endforeach
                            </select>
                        </div><!-- col-4 -->
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
<!-- Internal Select2 js-->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!--Internal Fileuploads js-->
<script src="{{URL::asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
<script src="{{URL::asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
<script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
<script>
        $(document).ready(function () {
            var cast = document.getElementById('casts'); 
            
            var category =document.getElementById('category');

            $('#add_cast').on('click',function () {
                var html1 = cast.innerHTML;
                $("#newcast").append(html1);
            });
            $('#add_category').on('click',function () {
                console.log('mohamed');
                var html2 = category.innerHTML;
                $("#newcategory").append(html2);
            });
        });
        $(document).on('click','#remove-btn',function () {
            $(this).closest('div').remove();
        });

    </script>
@endsection
