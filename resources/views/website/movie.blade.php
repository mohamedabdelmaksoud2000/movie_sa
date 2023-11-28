@extends('layouts.website.app')

@section('title')
{{ $movie->name }}
@endsection

@section('content')

<div class="hero mv-single-hero"></div>

<div class="page-single movie-single movie_single">
	<div class="container">
		<div class="row ipad-width2">
			<div class="col-md-4 col-sm-12 col-xs-12">
				<div class="movie-img sticky-sb">
					<img src="{{ $movie->imageUrl }}" alt="">
					<div class="movie-btn">	
						<div class="btn-transform transform-vertical red">
							<div><a href="#" class="item item-1 redbtn"> <i class="ion-play"></i> Watch Trailer</a></div>
							<div><a href="{{ $movie->trailerUrl }}" class="item item-2 redbtn fancybox-media hvr-grow"><i class="ion-play"></i></a></div>
						</div>
						<div class="btn-transform transform-vertical">
							<div><a href="#" class="item item-1 yellowbtn"> <i class="ion-ios-cloud-download"></i> download</a></div>
							<div><a href="#" class="item item-2 yellowbtn"><i class="ion-ios-cloud-download"></i></a></div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-8 col-sm-12 col-xs-12">
				<div class="movie-single-ct main-content">
					<h1 class="bd-hd">{{ $movie->name }} <span>{{ $movie->year }}</span></h1>
					<div class="social-btn">
						{{-- <a href="#" class="parent-btn"><i class="ion-heart"></i> Add to Favorite</a> --}}
					</div>
					<div class="movie-rate">
						<div class="rate">
							<i class="ion-android-star"></i>
							<p><span>{{ $movie->rate }}</span> /10<br>
							</p>
						</div>
						<div class="rate-star">
							<p>Rate This Movie:  </p>
							@for ($i=1 ; $i <= 10 ;$i++)
                                @if ($i > $movie->rate)
                                <i class="ion-ios-star-outline"></i>
                                @else
                                <i class="ion-ios-star"></i>
                                @endif
                            @endfor
						</div>
					</div>
					<div class="movie-tabs">
						<div class="tabs">
							<ul class="tab-links tabs-mv">
								<li class="active"><a href="#overview">Overview</a></li>                       
							</ul>
						    <div class="tab-content">
						        <div id="overview" class="tab active">
						            <div class="row">
						            	<div class="col-md-8 col-sm-12 col-xs-12">
						            		<p>{{ $movie->description }}</p>
											<div class="title-hd-sm">
												<h4>cast</h4>
											</div>
											<!-- movie cast -->
											<div class="mvcast-item">
												@foreach ($movie->actors as $actor)
                                                <div class="cast-it">
													<div class="cast-left">
														<img style="height: 40px;width:40px;border-raduis:5px" src="{{ $actor->imageUrl }}" alt="">
														<p>{{$actor->name}}</p>
													</div>
												</div>
                                                @endforeach
											</div>
						            	</div>
						            	<div class="col-md-4 col-xs-12 col-sm-12">
						            		<div class="sb-it">
						            			<h6>Genres:</h6>
						            			<p>
                                                    @foreach ($movie->genres as $genre)
                                                        {{$genre->name}},
                                                    @endforeach
                                                </p>
						            		</div>
						            		<div class="sb-it">
						            			<h6>Release Date:</h6>
						            			<p>{{ $movie->created_at }}</p>
						            		</div>
						            	</div>
						            </div>
						        </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection