@extends('layouts.app')

@section('content')
<header class="text-center" name="home">
  <div class="intro-text">
    <h1>We are <span class="color">Wisekim</span></h1>
    <p>design and development company</p>
    <div class="clearfix"></div>
    <a href="#about-section" class="btn btn-default btn-lg page-scroll">Learn More</a> </div>
</header>
<!-- Portfolio Section -->
<div id="works-section">
  <div class="container"> <!-- Container -->
    <div class="section-title">
      <h2>Our Products</h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a  data-filter="*" class="active">All</a></li>
            <li><a  data-filter=".android">Android</a></li>
            <li><a data-filter=".iphone">iPhone</a></li>
            <li><a  data-filter=".asus">Asus</a></li>
            <li><a  data-filter=".infinix">Infinix</a></li>
            <li><a  data-filter=".nokia">Nokia</a></li>
          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        @foreach($product as $mypro)
        <div class="col-sm-6 col-md-3 col-lg-3 {{ $mypro->type}}">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="{{$mypro->img_url}}" rel="prettyPhoto">
              <div class="hover-text">
                <h4>{{ $mypro->name}}</h4>
                <small>{{ $mypro->type}}</small>
                <div class="clearfix"></div>
              </div>
              <img src="{{ $mypro->img_url}}" class="img-responsive" alt="Project Title"> </a>
            </div>
          </div>
        </div>
        
        @endforeach
        <!-- <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02.jpg')}}" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>App Development</small>
                <div class="clearfix"></div>
              </div>
              <img src="{{ asset('img/portfolio/02.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03.jpg')}}" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small>
                <div class="clearfix"></div>
              </div>
              <img src="{{ asset('img/portfolio/03.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04.jpg')}}" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small>
                <div class="clearfix"></div>
              </div>
              <img src="{{ asset('img/portfolio/04.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05.jpg')}}" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>App Development</small>
                <div class="clearfix"></div>
              </div>
              <img src="{{ asset('img/portfolio/05.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06.jpg')}}" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Branding</small>
                <div class="clearfix"></div>
              </div>
              <img src="{{ asset('img/portfolio/06.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 branding app">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07.jpg')}}" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>App Development, Branding</small>
                <div class="clearfix"></div>
              </div>
              <img src="{{ asset('img/portfolio/07.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-3 col-lg-3 web">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08.jpg')}}" rel="prettyPhoto">
              <div class="hover-text">
                <h4>Project Title</h4>
                <small>Web Design</small>
                <div class="clearfix"></div>
              </div>
              <img src="{{ asset('img/portfolio/08.jpg')}}" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services-section">
  <div class="container">
    <div class="section-title">
      <h2>Our Services</h2>
      <hr>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-desktop"></i>
        <h4>Web design</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-gears"></i>
        <h4>App Development</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque.</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-pie-chart"></i>
        <h4>Analystics</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-line-chart"></i>
        <h4>Marketing</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>
      </div>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-shopping-cart"></i>
        <h4>eCommerce</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-file-text-o"></i>
        <h4>Content Development</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque.</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-rocket"></i>
        <h4>Branding</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque etiam.</p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <i class="fa fa-camera"></i>
        <h4>Video & Photography</h4>
        <p>Lorem ipsum dolor sit amet placerat facilisis felis mi in tempus eleifend pellentesque natoque.</p>
      </div>
    </div>
  </div>
</div>
<!-- Team Section -->
<div id="team-section">
  <div class="container">
    <div class="section-title">
      <h2>Meet the Team</h2>
      <hr>
    </div>
    <div id="row">
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="{{ asset('img/team/01.jpg')}}" alt="..." class="team-img">
          <div class="caption">
            <h3>John Doe</h3>
            <p>Founder</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="{{ asset('img/team/02.jpg')}}" alt="..." class="team-img">
          <div class="caption">
            <h3>Mike Doe</h3>
            <p>Web Designer</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="{{ asset('img/team/03.jpg')}}" alt="..." class="team-img">
          <div class="caption">
            <h3>Jane Doe</h3>
            <p>Creative Director</p>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="{{ asset('img/team/04.jpg')}}" alt="..." class="team-img">
          <div class="caption">
            <h3>Larry Show</h3>
            <p>Project Manager</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="about-section">
  <div class="container">
    <div class="section-title">
      <h2>About Us</h2>
      <hr>
    </div>
    <div class="space"></div>
    <div class="row">
      <div class="col-md-4">
        <h4>Who We Are</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh ante facilisis bibendum.</p>
      </div>
      <div class="col-md-4">
        <h4>What We Do</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh ante facilisis bibendum.</p>
      </div>
      <div class="col-md-4">
        <h4>Why Choose Us</h4>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor feugiat at. Duis sed dapibus leo nec ornare diam commodo nibh ante facilisis bibendum.</p>
      </div>
    </div>
  </div>
</div>
<!-- Contact Section -->
<div id="contact-section">
  <div class="container">
    <div class="section-title center">
      <h2>Contact Us</h2>
      <hr>
    </div>
    <div class="col-md-4">
      <h4>Contact info</h4>
      <div class="space"></div>
      <p><i class="fa fa-map-marker"></i>4321 California St,<br>
        San Francisco, CA 12345</p>
      <div class="space"></div>
      <p><i class="fa fa-envelope-o"></i>info@company.com</p>
      <div class="space"></div>
      <p><i class="fa fa-phone"></i>+1 123 456 1234</p>
    </div>
    <div class="col-md-8">
      <h4>Leave us a message</h4>
      <form name="sentMessage" id="contactForm" novalidate>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" class="form-control" placeholder="Name" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" class="form-control" placeholder="Email" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default">Send Message</button>
      </form>
    </div>
  </div>
</div>
@endsection
