@extends('Frontend.layout.app')
@section('title')About @endsection

@section('content')
<!--
      ============================
      PageTitle #1 Section
      ============================
      -->
<section class="page-title page-title-1" id="page-title">
    <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
        <div class="bg-section"><img src="{{asset('assets/images/page-titles/1.jpg')}}" alt="Background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="title">
                        <h1 class="title-heading">About Us</h1>
                        <p class="title-desc">We offer products, solutions, and services across the entire energy value
                            chain. We support our customers on their way to a more sustainable future.</p>
                        <div class="title-action"> <a class="btn btn--primary" href="{{route('service')}}"> <span>our
                                    services</span><i class="energia-arrow-right"></i></a><a
                                class="btn-video btn-video-2 popup-video"
                                href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumb-wrap">
        <div class="container">
            <ol class="breadcrumb d-flex">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="">company</a></li>
                <li class="breadcrumb-item active" aria-current="page">About Us</li>
            </ol>
            <!-- End .row-->
        </div>
    </div>
    <!-- End .container-->
</section>
<!-- End #page-title -->
<!--
      ============================
      About #1 Section
      ============================
      -->
<section class="about about-1" id="about-1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="about-img">
                    <div class="about-img-holder bg-overlay">
                        <div class="bg-section"><img src="{{asset('assets/images/about/1.jpg')}}" alt="about Image" />
                        </div>
                    </div>
                    <div>
                        <!-- Start .counter-->
                        <div class="counter">
                            <div class="counter-icon"> <i class="flaticon-033-plug"></i></div>
                            <div class="counter-num"> <span class="counting" data-counterup-nums="954">954</span>
                                <p></p>
                            </div>
                            <div class="counter-name">
                                <h6>happy clients</h6>
                            </div>
                        </div>
                        <!-- End .counter-->
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <!-- <div class="heading heading-1">

                    <p class="heading-subtitle heading-subtitle-bg">Complete Commercial And Residential Solar Systems
                    </p>
                    <h2 class="heading-title">We Are Pioneers In The World Of Solar & Renewable Energy!</h2>
                </div> -->
                <div class="about-block">
                    <div class="row">

                    <h5 class="heading-title">About Us:</h5>



<p>INVICTA SOLUTIONS LTD. (INVICTA) is an energy management services company with a strong focus on the Renewable Energy market. Our goal is to provide leading edge Renewable Energy solutions with excellence and high-quality service-delivery to all our clients.</p>

<p>Individuals, Critical Facilities and Businesses require stable, clean and reliable energy. A need that has never been greater than it currently is and there exists real concerns about power availability, power reliability, power quality (avoiding voltage dips, frequency issues, etc.) and increasing costs associated with the utility grid. We are committed to helping our clients on this journey to achieve energy independence in a cost-effective and sustainable manner.</p>

<p>INVICTA Solutions is comprised of professionals who have a real passion for what they do. We have a proven track record with large, complex installations and are committed to helping our clients achieve their energy independence by drawing on our years of experience and expertise combined with state-of-the-art robust and future-proof systems.</p>




<h5 class="heading-title">Vision:</h5>

<p>To be the leading Renewable Energy solutions provider by giving our clients control over their own energy requirements thereby helping them achieve energy independence.</p>

<h5 class="heading-title">Mission:</h5>

<p>To provide clean, affordable residential, commercial and industrial renewable energy solutions without compromising quality by using the latest innovations in the industry.</p>


<h5 class="heading-title">Why you should do business with INVICTA Solutions:</h5>


<h5 class="heading-title">Cost Savings</h5>

<p>We understand that many of our customers are looking for ways to reduce their energy bills and at the same time become less reliant on the grid, and our solar systems help them achieve just that. Our competitive pricing and long-term cost savings are the reason why a lot of reputable organizations have chosen us as partners.</p>

<h5 class="heading-title">Customization
<p>We understand that every customer is different, and we work closely with each one to create a solution that meets their unique needs and energy consumption patterns. </p>

<h5 class="heading-title">Expertise and Quality</h5>

<p>When it comes to the quality and durability of our systems, we're confident that we offer the best products on the market. We offer longer warranties than many of our competitors and our certified professional installers ensure that your system is installed as per the highest standards in the industry. </p>


<h5 class="heading-title">Innovation</h5>
<p>We are committed to innovation. We believe that staying on the cutting edge of new developments in the solar industry is key to our success. </p>
                    
                        <!-- <div class="col-12 col-lg-7">
                            <div class="block-left">
                                <p class="paragraph">We drive the transition to more sustainable, reliable & affordable
                                    energy systems. With our innovative technologies, we energize society, that’s our
                                    aim!</p>
                                <p>The increase in extreme weather events and rising sea levels are unmistakable signs
                                    of climate change. Roughly 850 million people still live without access to
                                    electricity, which is the foundation of sustainable development.</p><a
                                    class="btn btn--secondary" href="{{route('about')}}">read more <i
                                        class="energia-arrow-right"></i></a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-5">
                            <div class="block-right">
                                <div class="prief-set">
                                    <p>How can we meet the growing demand for electricity while protecting our climate &
                                        make planet a better place?</p>
                                    <ul class="list-unstyled advantages-list">
                                        <li>Reliability and performance</li>
                                        <li>Just-in-time manufacturing</li>
                                        <li>solar material financing</li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- End .col-lg-6-->
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>
<!--
      ============================
      Features #1 Section
      ============================
      --
<section class="features features-1 bg-overlay bg-overlay-theme2" id="features-1">
    <div class="bg-section"> <img src="{{asset('assets/images/background/2.jpg')}}" alt="Background" /></div>
    <div class="container">
        <div class="heading heading-2 heading-light heading-light2">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <p class="heading-subtitle">Sustainable, Reliable & Affordable Energy!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-lg-5">
                    <h2 class="heading-title">Providing Value To Our ClientsThrough Ongoing Product & Innovation.</h2>
                </div>
                <div class="col-12 col-lg-6 offset-lg-1">
                    <p class="heading-desc">While improving the yield and performance of solar energy products, our PV
                        industry experience enables us to provide in-depth material sourcing, financing and supply chain
                        expertise for every step.</p>
                    <p class="heading-desc">Raw polycrystalline silicon for PV manufacturing. Offered in various grades
                        and formats including chunks, chips, powder and ingot.</p>
                    <div class="actions-holder"><a class="btn btn--primary btn--inversed" href="{{route('contact')}}">
                            get started<i class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white"
                            href="{{route('about')}}">explore our plans</a></div>
                </div>
            </div>
            <!-- End .row--
        </div>
        <!-- End .heading--
        <div class="carousel owl-carousel carousel-dots" data-slide="4" data-slide-rs="2" data-autoplay="true"
            data-nav="false" data-dots="true" data-space="25" data-loop="true" data-speed="800">
            <div>
                <div class="feature-panel-holder" data-hover="">
                    <div class="feature-panel">
                        <div class="feature-icon"><i class="flaticon-024-energy"></i></div>
                        <div class="feature-content">
                            <h4>Save Your Money</h4>
                            <p>Save money on utilities or increase the value of your home by installing solar panels as
                                a great option.</p>
                        </div><a href="{{route('about')}}"><i class="energia-arrow-right"></i> <span>explore more</span>
                        </a>
                    </div>
                    <!-- End .feature-panel--
                </div>
            </div>
            <div>
                <div class="feature-panel-holder" data-hover="">
                    <div class="feature-panel">
                        <div class="feature-icon"><i class="flaticon-028-greenhouse"></i></div>
                        <div class="feature-content">
                            <h4>Home Is Energy</h4>
                            <p>Everyday the sun provides us with abundance of free energy by placing solar panels on
                                your roof.</p>
                        </div><a href="{{route('about')}}"><i class="energia-arrow-right"></i> <span>explore more</span>
                        </a>
                    </div>
                    <!-- End .feature-panel--
                </div>
            </div>
            <div>
                <div class="feature-panel-holder" data-hover="">
                    <div class="feature-panel">
                        <div class="feature-icon"><i class="flaticon-026-world"></i></div>
                        <div class="feature-content">
                            <h4>Consult &amp; Planning</h4>
                            <p>Our remote industrial solar systems are designed to reliably power our clients critical.
                            </p>
                        </div><a href="{{route('about')}}"><i class="energia-arrow-right"></i> <span>explore more</span>
                        </a>
                    </div>
                    <!-- End .feature-panel--
                </div>
            </div>
            <div>
                <div class="feature-panel-holder" data-hover="">
                    <div class="feature-panel">
                        <div class="feature-icon"><i class="flaticon-008-plant"></i></div>
                        <div class="feature-content">
                            <h4>Certified Engineers</h4>
                            <p>Our sales engineers on our staff have experience and can design any complete solar
                                system.</p>
                        </div><a href="{{route('about')}}"><i class="energia-arrow-right"></i> <span>explore more</span>
                        </a>
                    </div>
                    <!-- End .feature-panel--
                </div>
            </div>
            <div>
                <div class="feature-panel-holder" data-hover="">
                    <div class="feature-panel">
                        <div class="feature-icon"><i class="flaticon-024-energy"></i></div>
                        <div class="feature-content">
                            <h4>Save Your Money</h4>
                            <p>Save money on utilities or increase the value of your home by installing solar panels as
                                a great option.</p>
                        </div><a href="{{route('about')}}"><i class="energia-arrow-right"></i> <span>explore more</span>
                        </a>
                    </div>
                    <!-- End .feature-panel--
                </div>
            </div>
            <div>
                <div class="feature-panel-holder" data-hover="">
                    <div class="feature-panel">
                        <div class="feature-icon"><i class="flaticon-028-greenhouse"></i></div>
                        <div class="feature-content">
                            <h4>Home Is Energy</h4>
                            <p>Everyday the sun provides us with abundance of free energy by placing solar panels on
                                your roof.</p>
                        </div><a href="{{route('about')}}"><i class="energia-arrow-right"></i> <span>explore more</span>
                        </a>
                    </div>
                    <!-- End .feature-panel--
                </div>
            </div>
        </div>
        <!-- End .carousel--
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="more-features">
                    <p>If you have any questions or need help, feel free to contact with our team, or you can call us
                        any time <a href="tel:01061245741">(002) 01061245741</a></p><a
                        class="btn btn--bordered btn--white" href="{{route('about')}}">
                        free estimate<i class="energia-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-12 col-lg-8">
                <!--
              ============================
              Video #1 Section
              ============================
              --
                <div class="video video-1 bg-overlay bg-overlay-video" id="video-1">
                    <div class="bg-section"><img src="{{asset('assets/images/video/1.jpg')}}" alt="background" /></div>
                    <a class="popup-video btn-video" href="https://www.youtube.com/watch?v=nrJtHemSPW4"> <i
                            class="fas fa-play"></i><span>watch our video!</span></a>
                    <!-- End .popup-video--
                </div>
            </div>
        </div>
        <!-- End .row--
    </div>
    <!-- End .container--
</section>
<!--
      ============================
      Projects Modern #2 Section
      ============================
      --
<section class="projects projects-modern projects-modern-2" id="projects-modern-1">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
                <div class="heading heading-5 text-center">
                    <p class="heading-subtitle">Innovation, Quality And Continuous Improvement</p>
                    <h2 class="heading-title">Latest Projects, Solutions And Energy Supplies</h2>
                </div>
            </div>
        </div>
        <!-- End .row--
        <div class="row">
            <div class="col-12">
                <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-rs="1" data-autoplay="true"
                    data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="3000">
                    <div>
                        <div class="project-panel" data-hover="">
                            <div class="project-panel-holder">
                                <div class="project-img"><a class="link" href="{{route('singelProject')}}"></a><img
                                        src="{{asset('assets/images/projects/modern/1.jpg')}}" alt="project image" />
                                </div>
                                <!-- End .project-img--
                                <div class="project-content">
                                    <div class="project-cat"><a href="{{route('project')}}">finance</a><a
                                            href="{{route('project')}}">supply chain</a>
                                    </div>
                                    <div class="project-title">
                                        <h4><a href="{{route('singelProject')}}">expanding The Solar Supply Chain
                                                Finance Program</a></h4>
                                    </div>
                                    <div class="project-desc">
                                        <p>The great thing about solar panels is that they do not requiremaintenance.
                                            However, it is still important to get them checked regularly to ensure safe.
                                        </p>
                                    </div>
                                    <div class="project-more"> <a class="btn btn--bordered btn--white"
                                            href="{{route('singelProject')}}">explore more <i
                                                class="energia-arrow-right"></i></a></div>
                                </div>
                                <!-- End .project-content --
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="project-panel" data-hover="">
                            <div class="project-panel-holder">
                                <div class="project-img"><a class="link" href="{{route('singelProject')}}"></a><img
                                        src="{{asset('assets/images/projects/modern/2.jpg')}}" alt="project image" />
                                </div>
                                <!-- End .project-img--
                                <div class="project-content">
                                    <div class="project-cat"><a href="{{route('project')}}">energy</a><a
                                            href="{{route('project')}}">green energy</a>
                                    </div>
                                    <div class="project-title">
                                        <h4><a href="{{route('singelProject')}}">Addressing Wind Energy Innovation
                                                Challenges</a></h4>
                                    </div>
                                    <div class="project-desc">
                                        <p>As wind turbines increase in size &amp; height to capture more energy, and as
                                            wind power plants with many turbines spread out over greater areas </p>
                                    </div>
                                    <div class="project-more"> <a class="btn btn--bordered btn--white"
                                            href="{{route('singelProject')}}">explore more <i
                                                class="energia-arrow-right"></i></a></div>
                                </div>
                                <!-- End .project-content --
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="project-panel" data-hover="">
                            <div class="project-panel-holder">
                                <div class="project-img"><a class="link" href="{{route('singelProject')}}"></a><img
                                        src="{{asset('assets/images/projects/modern/3.jpg')}}" alt="project image" />
                                </div>
                                <!-- End .project-img--
                                <div class="project-content">
                                    <div class="project-cat"><a href="{{route('project')}}">eco</a><a
                                            href="{{route('project')}}">green energy</a>
                                    </div>
                                    <div class="project-title">
                                        <h4><a href="{{route('singelProject')}}">Smarter Ways to Manage EV Charging
                                                Infrastructures</a></h4>
                                    </div>
                                    <div class="project-desc">
                                        <p>If you own an electric vehicle (EV), the recurring question you’ll get is:
                                            how easy is it to charge the battery on the road? Clearly, people simply
                                            want to get.</p>
                                    </div>
                                    <div class="project-more"> <a class="btn btn--bordered btn--white"
                                            href="{{route('singelProject')}}">explore more <i
                                                class="energia-arrow-right"></i></a></div>
                                </div>
                                <!-- End .project-content --
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="project-panel" data-hover="">
                            <div class="project-panel-holder">
                                <div class="project-img"><a class="link" href="{{route('singelProject')}}"></a><img
                                        src="{{asset('assets/images/projects/modern/4.jpg')}}" alt="project image" />
                                </div>
                                <!-- End .project-img--
                                <div class="project-content">
                                    <div class="project-cat"><a href="{{route('project')}}">eco</a><a
                                            href="{{route('project')}}">green energy</a>
                                    </div>
                                    <div class="project-title">
                                        <h4><a href="{{route('singelProject')}}">New Public Attitude Tracker Towards
                                                Renewable Energy</a></h4>
                                    </div>
                                    <div class="project-desc">
                                        <p>Government tracks the nation’s changing attitudes towards energy
                                            infrastructure closely, with quarterly surveys led by the Department of
                                            Business.</p>
                                    </div>
                                    <div class="project-more"> <a class="btn btn--bordered btn--white"
                                            href="{{route('singelProject')}}">explore more <i
                                                class="energia-arrow-right"></i></a></div>
                                </div>
                                <!-- End .project-content --
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container--
</section>
<!--
      ============================
      Clients #1 Section
      ============================
      --
<section class="clients clients-carousel clients-1" id="clients-1">
    <div class="container">
        <div class="row">
            <div class="col">
                <h3 class="d-none">Our Clients</h3>
            </div>
            <div class="col-12">
                <div class="carousel owl-carousel" data-slide="6" data-slide-rs="2" data-autoplay="true"
                    data-nav="false" data-dots="false" data-space="0" data-loop="true" data-speed="3000">
                    <div class="client"><a href="javascript:void(0)"> </a><img
                            src="{{asset('assets/images/clients/1.png')}}" alt="client" /></div>
                    <div class="client"><a href="javascript:void(0)"> </a><img
                            src="{{asset('assets/images/clients/2.png')}}" alt="client" /></div>
                    <div class="client"><a href="javascript:void(0)"> </a><img
                            src="{{asset('assets/images/clients/3.png')}}" alt="client" /></div>
                    <div class="client"><a href="javascript:void(0)"> </a><img
                            src="{{asset('assets/images/clients/4.png')}}" alt="client" /></div>
                    <div class="client"><a href="javascript:void(0)"> </a><img
                            src="{{asset('assets/images/clients/5.png')}}" alt="client" /></div>
                    <div class="client"><a href="javascript:void(0)"> </a><img
                            src="{{asset('assets/images/clients/6.png')}}" alt="client" /></div>
                </div>
            </div>
        </div>
        <!-- End .row--
    </div>
    <!-- End .container--
</section>
<!--
      ============================
      Contact #1 Section
      ============================
      --
<section class="contact contact-1 bg-overlay bg-overlay-theme" id="contact-1">
    <div class="bg-section"><img src="{{asset('assets/images/background/3.jpg')}}" alt="background" /></div>
    <div class="container">
        <div class="contact-panel contact-panel-3">
            <div class="heading heading-light heading-6">
                <p class="heading-subtitle">Improving The Performance Of Solar Energy.</p>
                <h2 class="heading-title">Discover Independence Through Using The Power Of Solar Panels!</h2>
                <p class="heading-desc">We offer products, solutions, and services across the entire energy value chain.
                    We support our customers on their way to a more sustainable future – no matter how far along the
                    journey to energize society with affordable energy systems.</p>
                <div class="advantages-list-holder">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <ul class="list-unstyled advantages-list advantages-list-2">
                                <li>Reliabe and performance</li>
                                <li>Solar material financing</li>
                                <li>In-time manufacturing</li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-6">
                            <ul class="list-unstyled advantages-list advantages-list-2">
                                <li>50% more energy output</li>
                                <li>Built using ntype mono</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="contact-action"><a class="btn btn--white" href="{{route('about')}}">learn more <i
                            class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white"
                        href="{{route('faq')}}">our core values</a></div>
                <div class="contact-quote"> <img src="{{asset('assets/images/icons/noteicon.png')}}" alt="icon" />
                    <p>Receive an accurate quote within 3-5 days when you fill out this form. Or, give us a call: <a
                            href="tel:01061245741">(002) 01061245741</a></p>
                </div>
            </div>
            <div class="contact-card">
                <div class="contact-body">
                    <h5 class="card-heading">Request A Quote</h5>
                    <p class="card-desc">We take great pride in everything that we do, control over products allows us
                        to ensure our customers receive the best quality service.</p>
                    <form class="requestForm" method="post" action="{{route('Order')}}">
                        @csrf()
                        <div class="mb-20">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-1">Who will install the system?</label>
                                    <select class="form-control" name='install_system' id="select-1">
                                        <option value="local_contractor">Local contractor</option>
                                        <option value="foreign_contractor">Foreign contractor</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-2">System completed by?</label>
                                    <select class="form-control" name='system_complet_by' id="select-2">
                                        <option value="3-6_months">3-6 months</option>
                                        <option value="6-12_months">6-12 months</option>
                                        <option value="12-24_months">12-24 months</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="contact-usage">Monthly electric usage in kWh?</label>
                                    <input class="form-control" type="text" id="contact-usage" name="contact-usage"
                                        placeholder="1254 KWH" required />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-3">Solar system type?</label>
                                    <select class="form-control" name="solar_system_type" id="select-3">
                                        <option value="OffGrid">OffGrid</option>
                                        <option value="OnGrid">OnGrid</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-4">Solar panels place?</label>
                                    <select class="form-control" name='solar_panel_place' id="select-4">
                                        <option value="huge_farm">Huge farm</option>
                                        <option value="small_farm">Small farm</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-5">Materials on your roof?</label>
                                    <select class="form-control" name="metarial_on_your_rof" id="select-5">
                                        <option value="comp_shingle">Comp shingle</option>
                                        <option value="roof_shingle">Roof shingle</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Preferred Contact Method</label>
                                    <div class="custom-radio-group" id="custom-radio-group">
                                        <div class="custom-control">
                                            <input class="custom-control-input" type="radio" id="customRadioInline1"
                                                name="customRadioInline1" />
                                            <label for="customRadioInline1">all</label>
                                        </div>
                                        <div class="custom-control">
                                            <input class="custom-control-input" type="radio" id="customRadioInline2"
                                                name="customRadioInline1" />
                                            <label for="customRadioInline2">email</label>
                                        </div>
                                        <div class="custom-control">
                                            <input class="custom-control-input" type="radio" id="customRadioInline3"
                                                name="customRadioInline1" />
                                            <label for="customRadioInline3">phone</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn--secondary w-100">submit request <i
                                            class="energia-arrow-right"></i></button>
                                </div>
                                <div class="col-12">
                                    <div class="contact-result"></div>
                                </div>
                            </div>
                    </form>
                </div>
                <!-- End .contact-body --
            </div>
        </div>
        <!-- End .contact-panel--
    </div>
    <!-- End .container-->
</section>

@endsection