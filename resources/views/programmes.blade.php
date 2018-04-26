@extends('layouts.master')

@section('body')
@include('layouts.navbar')
<!-- services -->
	<div class="services" id="services">
		<div class="container">
			<h3 class="wthree_head"><i class="fa fa-book" aria-hidden="true"></i><span>Departments</span></h3>

			<div class="agileinfo_services_grids">
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<a  href="{{ route('team') }}"><h1>Accounting</h1></a>
					</div>
					<div class="agileinfo_services_grid_right">
						<span class="fa fa-money fa-4x" aria-hidden="true"></span>
					</div>
					<div class="clearfix"> </div>
					<p>Aliquam ex orci, dapibus eu facilisis non, scelerisque id nisl. 
						Praesent at tincidunt nisi. Aliquam molestie sem a purus pharetra.</p>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<a href=""><h1>Business Administration</h1></a>
					</div>
					<div class="agileinfo_services_grid_right">
						<span class="fa fa-laptop fa-4x"></span>
					</div>
					<div class="clearfix"> </div>
					<p>Aliquam ex orci, dapibus eu facilisis non, scelerisque id nisl. 
						Praesent at tincidunt nisi. Aliquam molestie sem a purus pharetra.</p>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<a href=""><h1>Economics</h1></a>
					</div>
					<div class="agileinfo_services_grid_right">
						<span class="fa fa-futbol-o fa-4x"></span>
					</div>
					<div class="clearfix"> </div>
					<p>Aliquam ex orci, dapibus eu facilisis non, scelerisque id nisl. 
						Praesent at tincidunt nisi. Aliquam molestie sem a purus pharetra.</p>
				</div>
				


				
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<a href="#"><h1>Project Management</h1></a>
					</div>
					<div class="agileinfo_services_grid_right">
						<span class="fa fa-briefcase fa-4x"></span>
					</div>
					<div class="clearfix"> </div>
					<p style="color:red">Aliquam ex orci, dapibus eu facilisis non, scelerisque id nisl. 
						Praesent at tincidunt nisi. Aliquam molestie sem a purus pharetra.</p>
				</div>
				<div class="col-md-4 agileinfo_services_grid">
					<div class="agileinfo_services_grid_left">
						<a href=""><h1>Transport Management</h1></a>
					</div>
					<div class="agileinfo_services_grid_right">
						<span class="fa fa-truck fa-4x"></span>
					</div>
					<div class="clearfix"> </div>
					<p>Aliquam ex orci, dapibus eu facilisis non, scelerisque id nisl. 
						Praesent at tincidunt nisi. Aliquam molestie sem a purus pharetra.</p>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->
@endsection