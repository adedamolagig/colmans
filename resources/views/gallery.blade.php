@extends('layouts.master')

    @section('body')
        
        @include('layouts.navbar')
<!-- gallery -->
	<div id="gallery" class="gallery_main">
		<div class="container">
			<h3 class="wthree_head"><i class="fa fa-picture-o" aria-hidden="true"></i><span>COLMANS</span>Photo Gallery</h3>
			<div class="w3l_gallery_grids">
				<ul class="w3l_gallery_grid gallery" id="lightGallery">
					<li data-title="COLMANS" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/1.jpg" data-responsive-src="images/1.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="images/1.jpg">
								<img src="images/1.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>COLMANS</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
										sed diam nonummy nibh euismod tincidunt.</p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="COLMANS" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/7.jpg" data-responsive-src="images/7.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/7.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>COLMANS</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
										sed diam nonummy nibh euismod tincidunt.</p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="COLMANS" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/5.jpg" data-responsive-src="images/5.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/5.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>COLMANS</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
										sed diam nonummy nibh euismod tincidunt.</p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="COLMANS" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/6.jpg" data-responsive-src="images/6.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/6.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>COLMANS</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
										sed diam nonummy nibh euismod tincidunt.</p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="COLMANS" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/8.jpg" data-responsive-src="images/8.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/8.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>COLMANS</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
										sed diam nonummy nibh euismod tincidunt.</p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="COLMANS" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/9.jpg" data-responsive-src="images/9.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/9.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>COLMANS</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
										sed diam nonummy nibh euismod tincidunt.</p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="COLMANS" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/10.jpg" data-responsive-src="images/10.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/10.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>COLMANS</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
										sed diam nonummy nibh euismod tincidunt.</p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="COLMANS" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/11.jpg" data-responsive-src="images/11.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/11.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>COLMANS</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
										sed diam nonummy nibh euismod tincidunt.</p>
								</div>
							</a>
						</div>
					</li>
					<li data-title="COLMANS" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/12.jpg" data-responsive-src="images/12.jpg"> 
						<div class="w3_w3l_gallery_grid box">
							<a href="#">
								<img src="images/12.jpg" alt=" " class="img-responsive" /> 
								<div class="caption scale-caption">
									<h3>COLMANS</h3>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, 
										sed diam nonummy nibh euismod tincidunt.</p>
								</div>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<script src="js/lightGallery.js"></script>
	<script>
    	 $(document).ready(function() {
			$("#lightGallery").lightGallery({
				mode:"fade",
				speed:800,
				caption:true,
				desc:true,
				mobileSrc:true
			});
		});
    </script>
<!-- //gallery -->

@endsection