@extends('layouts.master')

@section('body')
@include('layouts.navbar')
<!-- services -->
	<div class="services" id="services">
		<div class="container" style="">
			<h3 class="wthree_head"><i class="fa fa-book" aria-hidden="true"></i><span>COLMANS</span>Special Services</h3>
			<div class="agileinfo_services_grids">
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<a  href="{{ route('team') }}"><h1>Faculty</h1></a>
					</div>
					<div class="agileinfo_services_grid_right">
						<span class="fa fa-university fa-4x" aria-hidden="true"></span>
					</div>
					<div class="clearfix"> </div>
					<p style="color:white">The College of management Sciences has a wealth of well trained and qqualified personel who ensure the effective delivery of the Colleges' Core Value</p>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<a href=""><h1>Career Growth</h1></a>
					</div>
					<div class="agileinfo_services_grid_right">
						<span class="fa fa-bell fa-4x"></span>
					</div>
					<div class="clearfix"> </div>
					<p style="color:white">In the College of Managment Sciences, Careers are grown</p>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<a href=""><h1>Sports & Events</h1></a>
					</div>
					<div class="agileinfo_services_grid_right">
						<span class="fa fa-futbol-o fa-4x"></span>
					</div>
					<div class="clearfix"> </div>
					<p style="color:white" >Aliquam ex orci, dapibus eu facilisis non, scelerisque id nisl. 
						Praesent at tincidunt nisi. Aliquam molestie sem a purus pharetra.</p>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<a href=""><h1>Curriculum</h1></a>
					</div>
					<div class="agileinfo_services_grid_right">
						<span class="fa fa-graduation-cap fa-4x"></span>
					</div>
					<div class="clearfix"> </div>
					<p style="color:white">The Curriculum of the three departmens under the college of managment sciences are designed around the with the core values that the COLLEGE exists</p>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<a href=""><h1>Awards</h1></a>
					</div>
					<div class="agileinfo_services_grid_right">
						<span class="fa fa-trophy fa-4x"></span>
					</div>
					<div class="clearfix"> </div>
					<p style="color:white">Aliquam ex orci, dapibus eu facilisis non, scelerisque id nisl. 
						Praesent at tincidunt nisi. Aliquam molestie sem a purus pharetra.</p>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<a href="#"><h1>Research Programs</h1></a>
					</div>
					<div class="agileinfo_services_grid_right">
						<span class="fa fa-briefcase fa-4x"></span>
					</div>
					<div class="clearfix"> </div>
					<p style="color:white">Aliquam ex orci, dapibus eu facilisis non, scelerisque id nisl. 
						Praesent at tincidunt nisi. Aliquam molestie sem a purus pharetra.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
@endsection