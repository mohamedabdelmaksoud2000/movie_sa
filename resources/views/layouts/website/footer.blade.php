<!-- footer section-->
<footer class="ht-footer">
	<div class="container">
		<div class="flex-parent-ft">
			<div class="flex-child-ft item1">
				 <a href="index.html"><img class="logo" src="images/logo1.png" alt=""></a>
			</div>
			<div class="flex-child-ft item2">
				<h4>Resources</h4>
				<ul>
					<li><a href="{{ route('home') }}">Home</a></li> 
					<li><a href="{{ route('movies') }}">movies</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
				<h4>Account</h4>
				<ul>
					<li><a href="#">My Account</a></li> 
					<li><a href="#">favority movies</a></li>
					<li><a href="#">rate movies</a></li>
				</ul>
			</div>
			<div class="flex-child-ft item4">
			
			</div>
			
			<div class="flex-child-ft item4">
			
			</div>
		</div>
	</div>
	<div class="ft-copyright">
		<div class="ft-left">
			<p><a href="#">megatronic soft</a></p>
		</div>
		<div class="backtotop">
			<p><a href="#" id="back-to-top">Back to top  <i class="ion-ios-arrow-thin-up"></i></a></p>
		</div>
	</div>
</footer>
<!-- end of footer section-->
<script src="{{asset('website/js/jquery.js')}}"></script>
<script src="{{asset('website/js/plugins.js')}}"></script>
<script src="{{asset('website/js/plugins2.js')}}"></script>
<script src="{{asset('website/js/custom.js')}}"></script>
@yield('scripts');
</body>


</html>
