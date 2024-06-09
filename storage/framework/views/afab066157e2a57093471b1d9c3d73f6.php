
<?php $__env->startSection('title'); ?>Service <?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<!--
      ============================
      PageTitle #10 Section
      ============================
      -->

<script>
    const handleModalData=(data)=>{
        alert(data)
    }
</script>
<section class="page-title page-title-10" id="page-title">
    <div class="page-title-wrap bg-overlay bg-overlay-dark-2">
        <div class="bg-section"><img src="<?php echo e(asset('assets/images/page-titles/10.jpg'), false); ?>" alt="Background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <div class="title">
                        <div class="title-list">
                            <div class="icon"> <i class="flaticon-040-green-energy"></i></div>
                            <div class="icon"> <i class="flaticon-020-factory"></i></div>
                            <div class="icon"> <i class="flaticon-031-nuclear-plant"></i></div>
                        </div>
                        <h1 class="title-heading">our services</h1>
                        <p class="title-desc">We offer products, solutions, and services across the entire energy value
                            chain. We support our customers on their way to a more sustainable future.</p>
                        <div class="title-action"> <a class="btn btn--primary btn--inversed"
                                href="<?php echo e(route('contact'), false); ?>">
                                get started<i class="energia-arrow-right"></i></a><a
                                class="btn btn--bordered btn--white" href="<?php echo e(route('about'), false); ?>">explore our plans</a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="breadcrumb-wrap">
                        <ol class="breadcrumb breadcrumb-light d-flex">
                            <li class="breadcrumb-item"><a href="<?php echo e(url('/'), false); ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
    </div>
    <!-- End .container-->
</section>
<!-- End #page-title -->
<!--
      ============================
      Services #4 Section
      ============================
      -->
<section class="services services-4 bg-grey" id="services-4">
    <div class="container">
        <div class="heading heading-3 text-center">
            <div class="row">
                <div class="col-12 col-lg-6 offset-lg-3">
                    <p class="heading-subtitle">Energize Society With Sustainable Energy!</p>
                    <h2 class="heading-title">A Leading Supplier Of Solar Materials For Manufacturers, Installers &
                        Contractors.</h2>
                </div>
                <!-- End .col-lg-6-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .heading-->
    <div class="row">
        <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $services): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>           
    <div class="col-12 col-md-6 col-lg-4">
        <div class="service-panel">
            <div class="service-icon"><i class="flaticon-004-solar-panel"></i></div>
            <div class="service-content">
                <h4><a href="#"><?php echo $services['title']; ?></a></h4>
                <p><?php echo e(str_limit(strip_tags($services['text']), 150), false); ?></p>
                <button class="btn btn--secondary" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo e($services['id'], false); ?>">Read More <i class="energia-arrow-right"></i></button>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal<?php echo e($services['id'], false); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header btn-warning">
                    <h5 class="modal-title text-white exampleModalLabel"><?php echo $services['title']; ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo $services['text']; ?>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-warning btn-sm" data-bs-dismiss="modal">Close</button>                        
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
            



            
          
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>


<!--
      ============================
      Features #2 Section
      ============================
      -->
<section class="features features-2 bg-overlay bg-overlay-theme2" id="features-2">
    <!-- <div class="bg-section"> <img src="<?php echo e(asset('assets/images/background/2.jpg'), false); ?>" alt="Background" /></div>
    <div class="container">
        <div class="heading heading-2 heading-light heading-light2">
            <div class="row">
                <div class="col-12 col-lg-5">
                    <p class="heading-subtitle">Sustainable, Reliable & Affordable Energy!</p>
                </div>
            </div> -->

            <!-- End .row--
        </div>
        <!-- End .heading--
        <div class="row">
            <div class="col-12 col-md-6 col-lg-3">
                <div class="feature-panel-holder" data-hover="">
                    <div class="feature-panel">
                        <div class="feature-icon"><i class="flaticon-024-energy"></i></div>
                        <div class="feature-content">
                            <h4>Save Your Money</h4>
                            <p>Save money on utilities or increase the value of your home by installing solar panels as
                                a great option.</p>
                        </div><a href="<?php echo e(route('about'), false); ?>"><i class="energia-arrow-right"></i> <span>explore more</span>
                        </a>
                    </div>
                    <!-- End .feature-panel--
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="feature-panel-holder" data-hover="">
                    <div class="feature-panel">
                        <div class="feature-icon"><i class="flaticon-028-greenhouse"></i></div>
                        <div class="feature-content">
                            <h4>Home Is Energy</h4>
                            <p>Everyday the sun provides us with abundance of free energy by placing solar panels on
                                your roof.</p>
                        </div><a href="<?php echo e(route('about'), false); ?>"><i class="energia-arrow-right"></i> <span>explore more</span>
                        </a>
                    </div>
                    <!-- End .feature-panel--
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="feature-panel-holder" data-hover="">
                    <div class="feature-panel">
                        <div class="feature-icon"><i class="flaticon-026-world"></i></div>
                        <div class="feature-content">
                            <h4>Consult &amp; Planning</h4>
                            <p>Our remote industrial solar systems are designed to reliably power our clients critical.
                            </p>
                        </div><a href="<?php echo e(route('about'), false); ?>"><i class="energia-arrow-right"></i> <span>explore more</span>
                        </a>
                    </div>
                    <!-- End .feature-panel--
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-3">
                <div class="feature-panel-holder" data-hover="">
                    <div class="feature-panel">
                        <div class="feature-icon"><i class="flaticon-008-plant"></i></div>
                        <div class="feature-content">
                            <h4>Certified Engineers</h4>
                            <p>Our sales engineers on our staff have experience and can design any complete solar
                                system.</p>
                        </div><a href="<?php echo e(route('about'), false); ?>"><i class="energia-arrow-right"></i> <span>explore more</span>
                        </a>
                    </div>
                    <!-- End .feature-panel--
                </div>
            </div>
        </div>
        <!-- End .row-->
        <!-- <div class="row">
            <div class="col-12">
                <div class="more-features more-features-3">
                    <p>Sustainable, reliable & affordable energy systems, <a href="<?php echo e(route('service'), false); ?>">Find Your
                            Solution Now! </a></p>
                </div>
            </div>
        </div>
        End .row
    </div> -->
    <div class="container">
        <div class="contact-panel contact-panel-2">
            <div class="row">
                <div class="col-12 col-lg-5 img-card-holder">
                    <div class="img-card img-card-2 bg-overlay bg-overlay-theme">
                        <div class="bg-section"><img src="<?php echo e(asset('assets/images/contact/2.jpg'), false); ?>" alt="image" /></div>
                        <div class="card-content">
                            <div class="content-top">
                                <p>As a world wide distributor of solar supplies we endeavor provide fast and
                                    knowledgeable service, we can get all the materials you need by sea or air.</p><a
                                    href="<?php echo e(route('contact'), false); ?>"><i class="energia-arrow-right"></i>global office map</a>
                            </div>
                            <div class="content-bottom">
                                <ul class="list-unstyled contact-infos">
                                    <li class="contact-info"><i class="energia-phone-Icon"></i>
                                        <p>Emergency Line: <a href="tel:123-456-7890">(002) 01061245741</a></p>
                                    </li>
                                    <li class="contact-info"><i class="energia-location-Icon"></i>
                                        <p>Location: <a href="mailto:info@energia.com">Brooklyn, New York, USA </a></p>
                                    </li>
                                    <li class="contact-info"><i class="energia-clock-Icon"></i>
                                        <p>Mon - Fri: 8:00 am - 7:00 pm </p>
                                    </li>
                                </ul><a class="btn btn--white" href="<?php echo e(route('contact'), false); ?>">contact us <i
                                        class="energia-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-7">
                    <div class="contact-card">
                        <div class="contact-body">
                            <h5 class="card-heading">Request A Quote</h5>
                            <p class="card-desc">We take great pride in everything that we do, control over products
                                allows us to ensure our customers receive the best quality service.</p>
                            <form class="requestForm" method="post" action="<?php echo e(route('Order'), false); ?>">
                                <?php echo csrf_field(); ?>
                                <div class="mb-20">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <label class="form-label" for="select-1">Who will install the
                                                system?</label>
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
                                            <label class="form-label" for="contact-usage">Monthly electric usage in
                                                kWh?</label>
                                            <input class="form-control" type="text" id="contact-usage"
                                                name="contact-usage" placeholder="1254 KWH" required />
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
                                                    <input class="custom-control-input" type="radio"
                                                        id="customRadioInline1" name="customRadioInline1" />
                                                    <label for="customRadioInline1">all</label>
                                                </div>
                                                <div class="custom-control">
                                                    <input class="custom-control-input" type="radio"
                                                        id="customRadioInline2" name="customRadioInline1" />
                                                    <label for="customRadioInline2">email</label>
                                                </div>
                                                <div class="custom-control">
                                                    <input class="custom-control-input" type="radio"
                                                        id="customRadioInline3" name="customRadioInline1" />
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
                        <!-- End .contact-body -->
                    </div>
                </div>
            </div>
            <!-- End .row-->
        </div>
        <!-- End .contact-panel-->
    </div>
    <!-- End .container-->
</section>
<!--
      ============================
      Testimonials #3 Section
      ============================
      -->
<section class="testimonial testimonial-3 bg-overlay bg-overlay-white2">
    <div class="bg-section"><img src="<?php echo e(asset('assets/images/background/wavy-pattern.png'), false); ?>" alt="background" /></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4">
                <div class="counters-holder">
                    <!-- Start .counter-->
                    <div class="counter counter-3">
                        <div class="counter-holder">
                            <div class="counter-num"> <span class="counting" data-counterup-nums="25"
                                    data-counterup-beginat="12">25</span></div>
                            <div class="counter-img">
                                <div class="bg-section"><img src="<?php echo e(asset('assets/images/counters/1.jpg'), false); ?>"
                                        alt="image" /></div><i class="flaticon-020-factory"></i>
                            </div>
                        </div>
                        <div class="counter-desc">
                            <p>Years Of Experience In The Solar Industry</p>
                        </div>
                    </div>
                    <!-- End .counter-->
                </div>
            </div>
            <div class="col-12 col-lg-7 offset-lg-1">
                <div class="heading heading-14">
                    <p class="heading-subtitle">Customers Doing it Their Way!</p>
                </div>
                <div class="testimonials-holder">
                    <div class="carousel owl-carousel testimonials-carousel" data-slide="1" data-slide-rs="1"
                        data-autoplay="true" data-nav="false" data-dots="false" data-space="0" data-loop="false"
                        data-speed="800">
                        <div class="testimonial-panel testimonial-panel-2">
                            <div class="testimonial-body">
                                <div class="testimonial-content">
                                    <p>Energia has been absolutely the best to work with. Their attention to detail and
                                        customer support was amazing!! They were fantastic through the entire purchase
                                        process. Had lots of questions and they were patient. When my system arrived, it
                                        was well packed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-panel testimonial-panel-2">
                            <div class="testimonial-body">
                                <div class="testimonial-content">
                                    <p>Energia has been absolutely the best to work with. Their attention to detail and
                                        customer support was amazing!! They were fantastic through the entire purchase
                                        process. Had lots of questions and they were patient. When my system arrived, it
                                        was well packed.</p>
                                </div>
                            </div>
                        </div>
                        <div class="testimonial-panel testimonial-panel-2">
                            <div class="testimonial-body">
                                <div class="testimonial-content">
                                    <p>Energia has been absolutely the best to work with. Their attention to detail and
                                        customer support was amazing!! They were fantastic through the entire purchase
                                        process. Had lots of questions and they were patient. When my system arrived, it
                                        was well packed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-thumbs">
                    <div class="testimonial-thumb active" data-hover="">
                        <div class="thumb-img"> <img src="<?php echo e(asset('assets/images/testimonial/1.jpg'), false); ?>"
                                alt="Testimonial Author" /></div>
                        <div class="thumb-body">
                            <h6>sami wade</h6>
                            <p>promina</p>
                        </div>
                    </div>
                    <div class="testimonial-thumb" data-hover="">
                        <div class="thumb-img"> <img src="<?php echo e(asset('assets/images/testimonial/2.jpg'), false); ?>"
                                alt="Testimonial Author" /></div>
                        <div class="thumb-body">
                            <h6>john peter</h6>
                            <p>optima inc</p>
                        </div>
                    </div>
                    <div class="testimonial-thumb" data-hover="">
                        <div class="thumb-img"> <img src="<?php echo e(asset('assets/images/testimonial/3.jpg'), false); ?>"
                                alt="Testimonial Author" /></div>
                        <div class="thumb-body">
                            <h6>sony blake</h6>
                            <p>koira ind</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End .row-->
    </div>
    <!-- End .container-->
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\kafio\resources\views/Frontend/service.blade.php ENDPATH**/ ?>