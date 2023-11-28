@extends('layouts.website.app')

@section('title')
feedback
@endsection

@section('content')
<div class="hero common-hero">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="hero-ct">
					<h1>feedback website</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="page-single">
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="blog-detail-ct">
					<div class="comment-form">
						<h4>feedback</h4>
						<form method="POST" action="{{ route('feedback.save') }}" style="width: 96%;">
                            @csrf
							<div class="row">
								<div class="col-md-4">
									<input type="text" name="name" placeholder="Your name">
								</div>
								<div class="col-md-4">
									<input type="text" name="email" placeholder="Your email">
								</div>
								<div class="col-md-4">
									<input type="text" name="rate" placeholder="rate (*/10)">
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<textarea name="feedback" id="" placeholder="feedback"></textarea>
								</div>
							</div>
							<input class="submit" type="submit" placeholder="submit" value="submit feedback">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection