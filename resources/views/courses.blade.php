@extends('layouts.master')

    @section('body')
        
        @include('layouts.navbar')
            


<!-- courses -->
	<div class="courses">
		<div class="container"> 
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_left">
					<p>01</p>
					<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
				</div>
				<div class="w3_agile_team_grid_right">
					<h3>Courses <span>Offered</span></h3>
					<p>Aliquam sit amet sapien felis. Proin vel dolor sed risus maximus gravida. 
						Ut suscipit orci sem, eget lobortis sem dictum eu. Etiam congue ex sed volutpat fringilla.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits_w3layouts_team_grids w3ls_courses_grids">
				<div class="col-md-6 w3ls_banner_bottom_left w3ls_courses_left">
					<div class="w3ls_courses_left_grids">
						<div class="w3ls_courses_left_grid">
							<h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i>pulvinar neque pharetra eget</h3>
							<p>Pellentesque convallis diam consequat magna vulputate malesuada. 
								Cras a ornare elit. Nulla viverra pharetra sem, eget pulvinar neque pharetra ac.</p>
						</div>
						<div class="w3ls_courses_left_grid">
							<h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i>consequat magna vulputate</h3>
							<p>Pellentesque convallis diam consequat magna vulputate malesuada. 
								Cras a ornare elit. Nulla viverra pharetra sem, eget pulvinar neque pharetra ac.</p>
						</div>
						<div class="w3ls_courses_left_grid">
							<h3><i class="fa fa-pencil-square-o" aria-hidden="true"></i>convallis diam consequat magna</h3>
							<p>Pellentesque convallis diam consequat magna vulputate malesuada. 
								Cras a ornare elit. Nulla viverra pharetra sem, eget pulvinar neque pharetra ac.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 agileits_courses_right">
					<img src="images/2.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //courses -->
<!-- stats -->
	<div class="stats">
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid">
			<p class="counter">1,546</p>
			<h3>Staffs</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid1">
			<p class="counter">14,345</p>
			<h3>Students</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid2">
			<p class="counter">563</p>
			<h3>Courses</h3>
		</div>
		<div class="col-md-3 w3layouts_stats_left w3_counter_grid3">
			<p class="counter">2,874</p>
			<h3>Projects</h3>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //stats -->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
		<script>
			$('.counter').countUp();
		</script>
<!-- //stats -->
<!-- stats-bottom-banner -->
	<div class="stats-bottom-banner">
		<div class="container">
			<h3>the whole purpose of <span>education</span> is to turn mirrors into windows</h3>
			<p>Nunc in dolor hendrerit, pellentesque mi ac, accumsan nunc. Vestibulum sapien lacus, 
				auctor sed ullamcorper id, aliquam molestie dui. Proin faucibus 
				ullamcorper erat id interdum.</p>
			<div class="w3l_more">
				<a href="#" class="button button--nina agileits_button" data-text="Learn more" data-toggle="modal" data-target="#myModal">
					<span>L</span><span>e</span><span>a</span><span>n</span> <span>m</span><span>o</span><span>r</span><span>e</span>
				</a>
			</div>
		</div>
	</div>
<!-- //stats-bottom-banner -->	
<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Edifying
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
				</div>
				<section>
					<div class="modal-body">
						<img src="images/10.jpg" alt=" " class="img-responsive" />
						<p>Ut enim ad minima veniam, quis nostrum 
							exercitationem ullam corporis suscipit laboriosam, 
							nisi ut aliquid ex ea commodi consequatur? Quis autem 
							vel eum iure reprehenderit qui in ea voluptate velit 
							esse quam nihil molestiae consequatur, vel illum qui 
							dolorem eum fugiat quo voluptas nulla pariatur.
							<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
					</div>
				</section>
			</div>
		</div>
	</div>
<!-- //bootstrap-pop-up -->
<!-- stats-bottom -->
	<div class="team">
		<div class="container"> 
			<div class="w3_agile_team_grid">
				<div class="w3_agile_team_grid_left">
					<p>03</p>
					<span class="glyphicon glyphicon-arrow-down" aria-hidden="true"></span>
				</div>
				<div class="w3_agile_team_grid_right">
					<h3>Our <span>Skills</span></h3>
					<p>Aliquam sit amet sapien felis. Proin vel dolor sed risus maximus gravida. 
						Ut suscipit orci sem, eget lobortis sem dictum eu. Etiam congue ex sed volutpat fringilla.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileits_w3layouts_team_grids">
				<div class="col-md-6 w3l_stats_bottom_grid_left">
					<img src="images/5.jpg" alt=" " class="img-responsive" />
				</div>
				<div class="col-md-6 w3l_stats_bottom_grid_right">
					<div class='bar_group'>
						<div class='bar_group__bar thin elastic' label='HTML / CSS Design' value='230'>
							<div class='w3ls_bar_group__bar_pos'>
								<p>65%</p>
							</div>
						</div>
						<div class='bar_group__bar thin elastic' label='Graphic Design' value='130'>
							<div class='w3ls_bar_group__bar_pos'>
								<p>35%</p>
							</div>
						</div>
						<div class='bar_group__bar thin elastic' label='SEO' value='160'>
							<div class='w3ls_bar_group__bar_pos'>
								<p>45%</p>
							</div>
						</div>
						<div class='bar_group__bar thin elastic' label='Wordpress' value='340'>
							<div class='w3ls_bar_group__bar_pos'>
								<p>100%</p>
							</div>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //stats-bottom -->	

<script src="{{ asset('js/bars.js') }}"></script>
@endsection