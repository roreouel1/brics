@extends('home')
@section('content')
    
 
 <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex align-items-center">

    <div class="container" data-aos="zoom-out" data-aos-delay="100">
      <div class="row">
        <div class="col-xl-6">
          <h1>Helping Small Businesses Grow Big</h1>
          <h2>We are a consulting firm focused on strategic Technology, Business, Financial and Research services, set up to provide professional advice to organizations of all sizes.</h2>
          <a href="/bap.pdf" class="btn-get-started scrollto"><i class="bi bi-download me-auto">Download Our Corporate Profile</i></a>
        </div>
      </div>
    </div>

  </section> -->
  <!-- End Hero -->


  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/4.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Helping Small <span> Businesses</span> Grow Big</h2>
              <p class="animate__animated animate__fadeInUp">We are a consulting firm focused on strategic Technology, Business, Financial and Research services, set up to provide professional advice to organizations of all sizes.</p>
              <a href="/bap.pdf" class="btn-get-started animate__animated animate__fadeInUp scrollto">Download Our Corporate Profile</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/back2.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Lorem Ipsum Dolor</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        
        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/7.jpg)">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">Sequi ea ut et est quaerat</h2>
              <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

    <!-- ======= Tabs Section ======= -->
    <section id="tabs" class="tabs">
      <div class="container" data-aos="fade-up">
<!-- 
        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-2">
            <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
              <i class="ri-gps-line"></i>
              <h4 class="d-none d-lg-block">What We do?</h4>
            </a>
          </li>
          <li class="nav-item col-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
              <i class="ri-body-scan-line"></i>
              <h4 class="d-none d-lg-block">Training</h4>
            </a>
          </li>
          <li class="nav-item col-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">Reasearch</h4>
            </a>
          </li>
          <li class="nav-item col-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">Financial</h4>
            </a>
          </li>

          <li class="nav-item col-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
              <i class="ri-sun-line"></i>
              <h4 class="d-none d-lg-block">Strategy</h4>
            </a>
          </li>
          
          <li class="nav-item col-2">
            <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
              <i class="ri-store-line"></i>
              <h4 class="d-none d-lg-block">Technology</h4>
            </a>
          </li>
        </ul> -->

        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
                <h3>WHO WE ARE</h3>
                <p class="fst-italic">
                Brics Africa is a consulting ﬁrm focused on strategic Technology, Business, Financial and Research services, set up to provide professional advice to organizations of all sizes within various industries that help improve operational and ﬁnancial performance through a hands-on process that supports them in making well-informed decisions that deliver high-impact results and achieve sustained value.
                </p>
                <!-- <ul>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                  <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                  <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
                </ul>
                <p> -->
                Our insight and guidance is aimed at empowering our clients to improve organizational efﬁciency, effectiveness, agility and responsiveness; applying technical knowledge and expertise to 
strategy, research and technology to provide sustainable solutions to all organizational challenges.
Our expertise spans digital & IT services, ﬁnancial advisory, training & capacity building, strategy and business development among others.  So whether you want to mobilize your internal processes, develop an entrepreneurial idea, motivate your employees or simply raise the proﬁle of your brand - you can completely rely on us.

                </p>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                <img src="assets/img/back1.jpg" alt="" class="img-fluid">
              </div>
            </div>
          </div>

      </div>
      </div>
    </section><!-- End Tabs Section -->


    

            <!-- ======= Testimonials Section ======= -->
            <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">
        <div class="section-title easy">
          <h2>What we do</h2>
          <p>We provide these services</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <!-- <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt=""> -->
                  <i class="ri-bank-line big testimonial-img"></i>
                  <h3>Financial</h3>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Our financial modelling segment focuses on building abstract representations of real financial situations for our clients;<a href="{{route('services')}}" >Read more ....</a>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                   
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                <i class="ri-centos-line big testimonial-img"></i>
                  <h3>Strategy</h3>
                  
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Our business operations consultants will provide business plan, strategic support and advisory services <a href="{{route('services')}}" >Read more ....</a>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                    
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                <i class="ri-remote-control-line big testimonial-img"></i>
                  <h3>Technology</h3>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Our IT strategy services focus on strategic IT plans and IT advisory, which ordinarily represent the first phase of any IT task, <a href="{{route('services')}}" >Read more ....</a>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                <i class="ri-computer-line big testimonial-img"></i>
                  <h3>Research</h3>
                  
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    The Corporate & Business Research service area is all about the business side of innovation.<a href="{{route('services')}}" >Read more ....</a>
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                <i class="ri-ubuntu-line big testimonial-img"></i>
                  <h3>Training</h3>
      
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Our executive education program is dedicated purely to designing, developing and delivering training <a href="{{route('services')}}" >Read more ....</a>  
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

      <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="pricing section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title easy">
          <h2>Why Our Consulting?</h2>
          <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.</p> -->
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="box" data-aos="fade-up" data-aos-delay="100">
              <h3>•	COMPETENCE</h3>
              <p>
              Our team; made up of highly skilled and experienced professionals and consultants with a combined wealth of knowledge and expertise; ensures that on every task, we deliver impactful solutions to challenges, that ultimately improve performance and deliver results.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured" data-aos="fade-up" data-aos-delay="200">
              <h3>•	CONSISTENCY</h3>
              <p>
              Continuous improvement is central to everything we do. We strive to maintain the highest quality standards which guide our service delivery to ensure that we deliver consistent results to our clients, by evaluating and refining our services and customer experiences, in response to the changing needs of our clients to enrich our relationships.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="300">
              <h3>•	COLLABORATION</h3>
              <p>
              You want our experts to give you results but we don’t create value in a vacuum. We work with you to deliver the outcomes you desire. Whatever you visualize, we work with you to bring it to life; so on every project/task you are involved from start to finish- ensuring that we deliver exactly to your specifications.
              </p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="fade-up" data-aos-delay="300">
              <h3>•	CREATIVITY</h3>
              <p>
              We put our best creative minds on every project/task to ensure that the diversity of skill sets present within our team are fully tapped into, to develop innovative solutions to address the needs of our clients without compromising on standards
              </p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->

  @endsection
