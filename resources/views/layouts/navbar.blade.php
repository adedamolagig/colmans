<div class="banner">
    <div class="container">  
        <div class="header-top-nav">
            <p>
                <a href="#" class="fa fa-envelope {{ Request::is('#')? 'active' : '' }}" aria-hidden="true"> NEWSLETTER </a>
               <!--  <a href="{{ route('login') }}" class="fa fa-key {{ Request::is('login')? 'active' : '' }}" aria-hidden="true"> LOGIN</a>
                <a href="{{ route('register') }}" class="fa fa-user {{ Request::is('register')? 'active' : '' }}" aria-hidden="true"> APPLY</a> -->
            </p>
        </div>
    </div>
        
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header navbar-left">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a class="navbar-brand" href="/"> College of Management Sciences </a></h1>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    <nav class="link-effect-3" id="link-effect-3">
                        <ul class="nav navbar-nav w3-agileits_home_nav">
                            <li class="{{ Request::is('welcome')? 'active' : '' }}">
                                <a class="link link--yaku" href="{{ route('welcome') }}">
                                    <span>H</span><span>o</span><span>m</span><span>e</span>                    
                                </a>
                            </li>


                            <li class="{{ Request::is('services')? 'active' : '' }}">
                                <a class="link link--yaku" href="{{ route ('services') }}">
                                    <span>S</span><span>e</span><span>r</span><span>v</span><span>i</span><span>c</span><span>e</span><span>s</span>                    
                                </a>
                            </li>


                            <li class="{{ Request::is('gallery')? 'active' : '' }}">
                                <a class="link link--yaku scroll" href="{{ route('gallery') }}">
                                    <span>g</span><span>a</span><span>l</span><span>l</span><span>e</span><span>r</span><span>y</span>                  
                                </a>
                            </li>
                            <li class="{{ Request::is('programmes')? 'active' : '' }} dropdown">
                                <a class="link link--yaku scroll dropdown-toggle" data-toggle="dropdown" href=" {{ route('programmes') }} ">
                                    <span>Dep</span><span>art</span><span>men</span><span>ts</span>                   
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Accounting</a></li>
                                    <li><a class="dropdown-item" href="#">Business Administration</a></li>
                                    <li><a class="dropdown-item" href="#">Economics</a></li>
                                    <li><a class="dropdown-item" href="#">Finance</a></li>
                                    <li><a class="dropdown-item" href="#">Project Management</a></li>
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </nav>
            <div class="">
                <section class="">
                    <span><h1>Our Core Values</h1></span>
                    <div class="sentence">
                        <div class="popEffect">
                           <h1> <span style="color:white">Technology</span>
                            <span style="color:white">Management</span>
                            <span style="color:white">Business Solutions</span>
                            <span style="color:white">Economic Development</span></h1>
                        </div>
                    </div>
                </section>
               
        </div>
    </div>


<!-- //banner -->