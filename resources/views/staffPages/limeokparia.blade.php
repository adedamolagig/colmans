@extends('layouts.master')



@section('body')

@include('layouts.navbar')


	
    <div class="container-fluid">
     
    	
	       
	        <div class="sidebar-offcanvas staff-pages">

	          <section class="row text-center placeholders">
	           
	            <div class="col-6 col-sm-3 placeholder">
	              <img src="/images/cfNwoye.jpg" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
	              
	             
	            </div>
	            
	          </section>

	          <h2>Lawrence Imeokparia</h2>
	          <h4>B.Sc, M.sc,  Ph.D,</h4> 
	          <h2>
	          	<a target="_blank" href="https://www.researchgate.net/profile/Oluwafemi_Enilolobo"><i class="fab fa-researchgate"></i></a>
	          	<a href=""><i class="fab fa-researchgate"></i></a>
	          	<a href=""><i class="fab fa-researchgate"></i></a>
	          	<a href=""><i class="fab fa-researchgate"></i></a>
			  </h2>
	          <div class="row">
		        <nav class="navbar navbar-default  navbar-header">
		        	<!-- <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar"> -->
		          <ul class="nav nav-pills flex-column">
		            <li class="nav-item">
		              <router-link to="/imeokpariaoverview">Overview</router-link>
		            </li>
		            <li class="nav-item">
		              <router-link to="/imeokpariaresearch">Research</router-link>
		            </li>
		            <li class="nav-item">
		              <router-link to="/imeokpariaservices">Services</a>
		            </li>
		             <li class="nav-item">
		              <router-link to="/imeokpariateaching">Teaching</router-link>
		            </li> 
		          </ul>
		        </nav>

					<router-view></router-view>

					

					
					

		      </div>
	        </div> 
	        
    </div>
</div>


  
    
  @endsection