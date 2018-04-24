@extends('layouts.master')



@section('body')

@include('layouts.navbar')


	
    <div class="container-fluid">
     
    	
	       
	        <div class="sidebar-offcanvas staff-pages">

	          <section class="row text-center placeholders">
	           
	            <div class="col-6 col-sm-3 placeholder">
	              <img src="/images/baBello.png" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
	              <h4>B.Sc, M.sc,  Ph.D</h4>
	              
	            </div>
	            
	          </section>

	          <h2>Dr Bashiru Bello</h2>
	          <div class="row">
		        <nav class="navbar navbar-default  navbar-header">
		        	<!-- <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar"> -->
		          <ul class="nav nav-pills flex-column">
		            <li class="nav-item">
		              <router-link to="/bellooverview">Overview</router-link>
		            </li>
		            <li class="nav-item">
		              <router-link to="/belloresearch">Research</router-link>
		            </li>
		            <!-- <li class="nav-item">
		              <router-link to="/belloservices">Services</router-link>
		            </li>
		             <li class="nav-item">
		              <router-link to="/belloteaching">Teaching</router-link>
		            </li>  -->
		          </ul>
		        </nav>

					<router-view></router-view>

					

					
					

		      </div>
	        </div> 
	        
    </div>
</div>


  
    
  @endsection