@extends('layouts.layout')

@section('content')
<!-- Header -->
<header class="masthead">
  <div class="container">
    <div class="intro-text">
      <div class="intro-lead-in">Welcome To Our Electronic Shop!</div>
      <div class="intro-heading text-uppercase">It's Nice To Help You</div>
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
    </div>
  </div>
</header>

<!-- Services -->
<section class="page-section" id="services">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Services</h2>
        <h3 class="section-subheading text-muted">Services Provided To You.</h3>
      </div>
    </div>
    <div class="row text-center">
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Buy</h4>
        <p class="text-muted">You Can Buy Item You Need.</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Sell</h4>
        <p class="text-muted">You can Sell Your Items.</p>
      </div>
      <div class="col-md-4">
        <span class="fa-stack fa-4x">
          <i class="fas fa-circle fa-stack-2x text-primary"></i>
          <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
        </span>
        <h4 class="service-heading">Perfect Price</h4>
        <p class="text-muted">You Can Find Perfect Price With Perfect Item.</p>
      </div>
    </div>
  </div>
</section>

<!-- updated  -->

<section class="bg-light page-section" id="portfolio">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Recently Uploaded</h2>
        <br>
      </div>
    </div>
    <div class="row">
      <?php $c = 1 ?>

      @foreach ($updated as $p)
      @if ($c<=6) <div class="col-md-4 col-sm-6 portfolio-item">
        <a class="portfolio-link" data-toggle="modal" href="  ">
          <div class="portfolio-hover">

          </div>
          <img style="height: 280px ; width: 100%;" class="img-fluid" src="{{asset('img/products/'.$p->image)}}"
            alt="">
        </a>
        <div class="portfolio-caption">
          <h4>{{$p->name}}</h4>
          <p class="text-muted">{{$p->description}}</p>
        </div>
    </div>
    @endif
    <?php  $c++ ?>
    @endforeach






  </div>
  </div>
  <div class="row justify-content-center">
    <a class="btn btn-primary btn-xl " href="/moreproduct">Tell Me More</a>
  </div>
</section>




<!-- About -->
<section class="page-section" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">About</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <ul class="timeline">
          <li>
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/about/1.jpg" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>2009-2011</h4>
                <h4 class="subheading">Our Humble Beginnings</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius
                  sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
                  dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/about/2.jpg" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>March 2011</h4>
                <h4 class="subheading">An Agency is Born</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius
                  sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
                  dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li>
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/about/3.jpg" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>December 2012</h4>
                <h4 class="subheading">Transition to Full Service</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius
                  sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
                  dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <img class="rounded-circle img-fluid" src="img/about/4.jpg" alt="">
            </div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4>July 2014</h4>
                <h4 class="subheading">Phase Two Expansion</h4>
              </div>
              <div class="timeline-body">
                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius
                  sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo
                  dolore laudantium consectetur!</p>
              </div>
            </div>
          </li>
          <li class="timeline-inverted">
            <div class="timeline-image">
              <h4>Be Part
                <br>Of Our
                <br>Story!</h4>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Team -->
<section class="bg-light page-section" id="team">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Owner</h2>
        <h3 class="section-subheading text-muted">Site Designed & Develped By.</h3>
      </div>
    </div>
    <div class="row d-flex justify-content-center">
      <div class="col-sm-4">
        <div class="team-member">
        <img class="mx-auto rounded-circle" src="{{asset('storage/img/male.png')}}" alt="">
          <h4>Mohamed Helmy</h4>
          <p class="text-muted">Designer & Developer</p>
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/profile.php?id=100017580706984">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>

    </div>
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <p class="large text-muted">Call me (01279783447) & menufia,tala </p>
      </div>
    </div>
  </div>
</section>



<!-- Contact -->
<section class="page-section" id="contact">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading text-uppercase">Contact Us</h2>
        <h3 class="section-subheading text-muted">Contact Site Admins.</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-12">
        <form id="contactForm" name="sentMessage" novalidate="novalidate">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required"
                  data-validation-required-message="Please enter your name.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required"
                  data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required"
                  data-validation-required-message="Please enter your phone number.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea class="form-control" id="message" placeholder="Your Message *" required="required"
                  data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send
                Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>



@endsection