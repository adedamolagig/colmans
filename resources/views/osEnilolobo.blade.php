@extends('layouts.master')



@section('body')

@include('layouts.navbar')


	
    <div class="container-fluid">
     
    	
	       
	        <div class="sidebar-offcanvas">

	          <section class="row text-center placeholders">
	           
	            <div class="col-6 col-sm-3 placeholder">
	              <img src="/images/osEnilolobo.jpg" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
	              <h4>Label</h4>
	              <span class="text-muted">Something else</span>
	            </div>
	            
	          </section>

	          <h2>Professor Name</h2>
	          <div class="row">
		        <nav class="navbar navbar-default  navbar-header">
		        	<!-- <nav class="col-sm-3 col-md-2 hidden-xs-down bg-faded sidebar"> -->
		          <ul class="nav nav-pills flex-column">
		            <li class="nav-item">
		              <a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
		            </li>
		            <li class="nav-item">
		              <router-link to="/eniloloboresearch">Research</router-link>
		            </li>
		            <li class="nav-item">
		              <router-link to="/eniloloboengagement">Engagements</a>
		            </li>
		             <li class="nav-item">
		              <router-link to="/eniloloboteaching">Teaching</router-link>
		            </li> 
		          </ul>
		        </nav>

					<router-view></router-view>

					

					
					

		      </div>
	        </div> 
	        
    </div>
</div>


  
    
  @endsection