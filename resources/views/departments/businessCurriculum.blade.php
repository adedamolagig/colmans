@extends('layouts.master')
@section('assets')

	<script type="text/javascript" src="{{ asset ('js/curriculum_assets/js/jquery.tipsy.js')}}"></script>
	<script type="text/javascript" src="{{ asset ('js/curriculum_assets/js/cufon.yui.js')}}"></script>
	<script type="text/javascript" src="{{ asset ('js/curriculum_assets/js/scrollTo.js')}}"></script>
	<script type="text/javascript" src="{{ asset ('js/curriculum_assets/js/myriad.js')}}"></script>
	<script type="text/javascript" src="{{ asset ('js/curriculum_assets/js/jquery.colorbox.js')}}"></script>
	<script type="text/javascript" src="{{ asset ('js/curriculum_assets/js/custom.js')}}"></script>
	<script type="text/javascript"></script>

	
	<link type="text/css" rel="stylesheet" href="{{ asset ('css/curriculum_assets/css/blue.css')}}" />
	<link type="text/css" rel="stylesheet" href="{{ asset ('css/curriculum_assets/css/print.css')}}" media="print"/>
	<!--[if IE 7]>
	<link href="css/ie7.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!--[if IE 6]>
	<link href="css/ie6.css" rel="stylesheet" type="text/css" />
	<![endif]-->
	<!-- <script type="text/javascript" src="{{ asset ('css/curriculum_assets/js/jquery-1.4.2.min.js')}}"></script> -->
	
@endsection
@section('body')
@include('layouts.navbar')
<!-- Begin Wrapper -->
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
          <img class="portrait" src="/images/curriculum_images/image.jpg" alt="John Smith" />
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 class="name">AWARDS OF DEGREE <br />
              <span><!-- To be eligible for the award of B.Sc Business Administration degree with specialisation in a candidate must pass the approved compulsory, required and elective courses prescribed for the degree. --></span></h1>
            <ul>
              <li class="#"> Business Computing</li>
              <li class="#">Human Resources Management</li>
              <li class="#">International Business</li>
              <li class="#"> and Marketing,</li>
            </ul>
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social -->
          <div class="social">
            <ul>
              <li><a class='north' href="#" title="Download .pdf"><img src="/images/curriculum_images/icn-save.jpg" alt="Download the pdf version" /></a></li>
              <li><a class='north' href="javascript:window.print()" title="Print"><img src="/images/curriculum_images/icn-print.jpg" alt="" /></a></li>
              <li><a class='north' id="contact" href="contact/index.html" title="Contact Me"><img src="/images/curriculum_images/icn-contact.jpg" alt="" /></a></li>
              <li><a class='north' href="#" title="Follow me on Twitter"><img src="/images/curriculum_images/icn-twitter.jpg" alt="" /></a></li>
              <li><a class='north' href="#" title="My Facebook Profile"><img src="/images/curriculum_images/icn-facebook.jpg" alt="" /></a></li>
            </ul>
          </div>
          <!-- End Social -->
        </div>
        <!-- Begin 1st Row -->
        <div class="entry">
          <h2>OBJECTIVE</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dignissim viverra nibh sed varius. Proin bibendum nunc in sem ultrices posuere. Aliquam ut aliquam lacus.</p>
        </div>
        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->
        <div class="entry">
          <h2>EDUCATION</h2>
          <div class="content">
            <h3>Sep 2005 - Feb 2007</h3>
            <p>Academy of Art University, London <br />
              <em>Master in Communication Design</em></p>
          </div>
          <div class="content">
            <h3>Sep 2001 - Jun 2005</h3>
            <p>University of Art &amp; Design, New York <br />
              <em>Bachelor of Science in Graphic Design</em></p>
          </div>
        </div>
        <!-- End 2nd Row -->
        <!-- Begin 3rd Row -->
        <div class="entry">
          <h2>EXPERIENCE</h2>
          <div class="content">
            <h3>May 2009 - Feb 2010</h3>
            <p>Agency Creative, London <br />
              <em>Senior Web Designer</em></p>
            <ul class="info">
              <li>Vestibulum eu ante massa, sed rhoncus velit.</li>
              <li>Pellentesque at lectus in <a href="#">libero dapibus</a> cursus. Sed arcu ipsum, varius at ultricies acuro, tincidunt iaculis diam.</li>
            </ul>
          </div>
          <div class="content">
            <h3>Jun 2007 - May 2009</h3>
            <p>Junior Web Designer <br />
              <em>Bachelor of Science in Graphic Design</em></p>
            <ul class="info">
              <li>Sed fermentum sollicitudin interdum. Etiam imperdiet sapien in dolor rhoncus a semper tortor posuere. </li>
              <li>Pellentesque at lectus in libero dapibus cursus. Sed arcu ipsum, varius at ultricies acuro, tincidunt iaculis diam.</li>
            </ul>
          </div>
        </div>
        <!-- End 3rd Row -->
        <!-- Begin 4th Row -->
        <div class="entry">
          <h2>SKILLS</h2>
          <div class="content">
            <h3>Software Knowledge</h3>
            <ul class="skills">
              <li>Photoshop</li>
              <li>Illustrator</li>
              <li>InDesign</li>
              <li>Flash</li>
              <li>Fireworks</li>
              <li>Dreamweaver</li>
              <li>After Effects</li>
              <li>Cinema 4D</li>
              <li>Maya</li>
            </ul>
          </div>
          <div class="content">
            <h3>Languages</h3>
            <ul class="skills">
              <li>CSS/XHTML</li>
              <li>PHP</li>
              <li>JavaScript</li>
              <li>Ruby on Rails</li>
              <li>ActionScript</li>
              <li>C++</li>
            </ul>
          </div>
        </div>
        <!-- End 4th Row -->
         <!-- Begin 5th Row -->
        <div class="entry">
        <h2>WORKS</h2>
        	<ul class="works">
        		<li><a href="/images/curriculum_images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="/images/curriculum_images/image.jpg" alt="" /></a></li>
        		<li><a href="/images/curriculum_images/2.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="/images/curriculum_images/image.jpg" alt="" /></a></li>
        		<li><a href="/images/curriculum_images/3.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="/images/curriculum_images/image.jpg" alt="" /></a></li>
        		<li><a href="/images/curriculum_images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="/images/curriculum_images/image.jpg" alt="" /></a></li>
        		<li><a href="/images/curriculum_images/2.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="/images/curriculum_images/image.jpg" alt="" /></a></li>
        		<li><a href="/images/curriculum_images/3.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="/images/curriculum_images/image.jpg" alt="" /></a></li>
        		<li><a href="/images/curriculum_images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="/images/curriculum_images/image.jpg" alt="" /></a></li>
        		<li><a href="/images/curriculum_images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="/images/curriculum_images/image.jpg" alt="" /></a></li>
        	</ul>
        </div>
        <!-- Begin 5th Row -->
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Go to Top</a></div>
<!-- End Wrapper -->
@endsection