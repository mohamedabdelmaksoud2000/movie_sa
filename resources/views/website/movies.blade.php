@extends('layouts.website.app')

@section('title')
    movie search
@endsection

@section('content')
<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>Movie search</h1>
					<ul class="breadcumb">
						<li class="active"><a href="{{ route('home') }}">Home</a></li>
						<li> <span class="ion-ios-arrow-right"></span> movie search</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="flex-wrap-movielist mv-grid-fw">
                    @foreach ($movies as $movie)
                    <div class="movie-item-style-2 movie-item-style-1">
                        <img src="{{ $movie->imageUrl }}" alt="">
                        <div class="hvr-inner">
                            <a  href="{{ route('movie',$movie->id) }}"> Read more <i class="ion-android-arrow-dropright"></i> </a>
                        </div>
                        <div class="mv-item-infor">
                            <h6><a href="{{ route('movie',$movie->id) }}">{{ $movie->name }}</a></h6>
                            <p class="rate"><i class="ion-android-star"></i><span>{{ $movie->rate }}</span> /10</p>
                        </div>
                    </div>
                    @endforeach
				</div>		
			</div>
		</div>
	</div>
</div>
@endsection