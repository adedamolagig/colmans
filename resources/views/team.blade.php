@extends('layouts.master')

@section('body')
@include('layouts.navbar')

<!-- team -->
	<div class="team">
		<div class="container">
			<h3 class="wthree_head wthree_head1"><i class="fa fa-users" aria-hidden="true"></i><span>COLMANS</span>Team</h3>
			
			<div class="container">
				<div class="col-md-4 agileits_team_grid" >
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
					<p>The Dean of the College uses the medium to introduce the wealth of knowledge he builds the college with...</p>
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
					<a href = "{{ route('boNjogo') }}"> <h4>Dr. B.O. Njogo <span>Deputy Dean </span></h4></a>
					<a href=" {{ route('boNjogo') }} "><p>Dr (Mrs) Njogo, Oluchukwu Bibiana is...</p></a>
				</div>
			</div>

			<div class="agileits_team_grids">
				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/3.jpg" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href=""><h4>Dr. M.K Onifade<span>Ag. HOD, Project Managemnt</span></h4></a>
					<p>Dr. Onifade Morakinyo was</p>
				</div>
				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/2.jpg" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href="{{ route('ooAremu') }}"> <h4>Dr. L.I Okafor<span>Ag. HOD, Business Administration</span></h4></a>
					<p>Dr. Okafor Linus is a versatile...</p>
				</div>

				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/8.jpg" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = "{{ route('limeokparia')}}"> <h4>Dr. L.A.E. Imeokparia <span>Ag. HOD, Economics, Accounting and Finance</span></h4></a>
					<p>Dr. L.A.E. Imeokparia</p>
				</div>


				<!-- <div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="images/cOgboi.png" alt=" " class="img-responsive" />
					</div>
					<div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
					<a href = "{{ route('cOgboi')}}"> <h4>Dr. C. Ogboi <span> </span></h4></a>
					<p>insert paragraph here...</p>
				</div> -->


				

				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/bbello.png" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = "{{ route('baBello') }}"> <h4>Dr. B.A Bello <span> </span></h4></a>
					
					<p>Dr. Bello Bashiru</p>
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
					
					<p>Mrs. Daramola, Gloria...</p>
				</div>


				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/6.jpg" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = "#"> <h4>Mr. A.M Ogundeinde <span> </span></h4></a>
					<p>Ogundeinde Adedamola, a professional and academician...</p>
				</div>

				<!-- <div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/9.jpg" alt=" " class="img-responsive" />
					</div>
					<div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div>
					<div class="clearfix"> </div>
					<a href = "#"> <h4>Mr. Pelumi Aremu <span> </span></h4></a>
					<p>insert paragraph here...</p>
				</div>			 -->	


				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/5.jpg" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = "#"> <h4>Dr. E.O Ajayi <span> </span></h4></a>
					<p>Dr. Ajayi Emmanuel... </p>
				</div>

				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/7.jpg" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = "#"> <h4>Dr. O.O Oladeinde <span> </span></h4></a>
					<p>insert paragraph here...</p>
				</div>

				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/cfnwoye.png" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = " {{ route('cfNwoye') }} "> <h4>Mr. C.F Nwoye <span> </span></h4></a>
					<p>insert paragraph here...</p>
				</div>

				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/ydadegbite.jpg" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = " {{ route('ydAdegbite') }} "> <h4>Mrs. D.Y Adegbite <span> </span></h4></a>
					<a href=" {{ route('ydAdegbite') }} "><p>Adegbite, Dorcas Yetunde is...</p></a>
				</div>

				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/amopele.png" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = " {{ route('ydAdegbite') }} "> <h4>Dr. A.M Opele <span> </span></h4></a>
					<a href=" {{ route('boNjogo') }} "><p>Opele, Adedayo is a...</p></a>
				</div>

				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/afolabi.png" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = " {{ route('ydAdegbite') }} "> <h4>Mr. Afolabi <span> </span></h4></a>
					<a href=" {{ route('boNjogo') }} "><p>Afolabi is known...</p></a>
				</div>

				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/ronke.png" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = " {{ route('ydAdegbite') }} "> <h4> <span> </span></h4></a>
					<a href=" {{ route('boNjogo') }} "><p>Mrs. Ronke is known...</p></a>
				</div>

				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/oluwaji.png" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = " {{ route('ydAdegbite') }} "> <h4> <span> </span></h4></a>
					<a href=" {{ route('boNjogo') }} "><p>Mr. Oluwaji</p></a>
				</div>

				<div class="col-md-4 agileits_team_grid">
					<div class="agileits_team_grid_figure">
						<img src="/images/colmans/aro.png" alt=" " class="img-responsive" />
					</div>
					<!-- <div class="agileits_team_grid_figure_social">
						<ul class="w3ls_social">
							<li><a href="#" class="w3_agile_facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" class="w3_agile_dribble"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
						</ul>
					</div> -->
					<div class="clearfix"> </div>
					<a href = " {{ route('ydAdegbite') }} "> <h4> <span> </span></h4></a>
					<a href=" {{ route('boNjogo') }} "><p>Mr. Aro</p></a>
				</div>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //team -->
@endsection