@extends('layouts.master')

@section('body')
@include('layouts.navbar')

<!-- team -->
	<div class="team">
		<div class="container">
			<h3 class="wthree_head wthree_head1"><i class="fa fa-users" aria-hidden="true"></i><span>COLMANS</span>Team</h3>
			
			<div class="container col-md-offset-4">
				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/1.jpg" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href="{{ route('osEnilolobo') }}"><h4>Olorunfemi Enilolobo <span>Ag. Dean</span></h4></a>
					<p>Morbi non elit sed neque rhoncus maximus ac at enim. 
						Praesent a nisi sit amet risus semper laoreet et nec eros.</p>
				</div>
			</div>

			<div class="agileits_team_grids">
				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/1.png" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href=""><h4>Jane Nguyen <span>Ag. Dean</span></h4></a>
					<p>Morbi non elit sed neque rhoncus maximus ac at enim. 
						Praesent a nisi sit amet risus semper laoreet et nec eros.</p>
				</div>
				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/ooAremu.png" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href="{{ route('ooAremu') }}"> <h4>Mr. Aremu Oluwapelumi <span>College Officer</span></h4></a>
					<p>Morbi non elit sed neque rhoncus maximus ac at enim. 
						Praesent a nisi sit amet risus semper laoreet et nec eros.</p>
				</div>

				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/mkOnifade.png" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = "{{ route('mkOnifade')}}"> <h4>Dr. M.K Onifade <span>Ag. HOD</span></h4></a>
					<p>Morbi non elit sed neque rhoncus maximus ac at enim. 
						Praesent a nisi sit amet risus semper laoreet et nec eros.</p>
				</div>


				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/cOgboi.png" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = "{{ route('cOgboi')}}"> <h4>Dr. C. Ogboi <span> </span></h4></a>
					<p>Morbi non elit sed neque rhoncus maximus ac at enim. 
						Praesent a nisi sit amet risus semper laoreet et nec eros.</p>
				</div>


				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/boNjogo.png" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = "{{ route('boNjogo') }}"> <h4>Dr. B.O. Njogo <span> </span></h4></a>
					<p>Morbi non elit sed neque rhoncus maximus ac at enim. 
						Praesent a nisi sit amet risus semper laoreet et nec eros.</p>
				</div>

				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/baBello.png" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = "{{ route('baBello') }}"> <h4>Dr. B.A Bello <span> </span></h4></a>
					
					<p>Morbi non elit sed neque rhoncus maximus ac at enim. 
						Praesent a nisi sit amet risus semper laoreet et nec eros.</p>
				</div>

				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/gcDaramola.png" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = "{{ route('gcDaramola') }}"> <h4>Mrs. G.C Daramola <span> </span></h4></a>
					
					<p>Morbi non elit sed neque rhoncus maximus ac at enim. 
						Praesent a nisi sit amet risus semper laoreet et nec eros.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
@endsection