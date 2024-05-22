@extends('Frontend.layout.app')
@section('title')Request queate @endsection

@section('content')
<!--
      ============================
      PageTitle #14 Section
      ============================
      -->
<section class="page-title page-title-14" id="page-title">
    <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
        <div class="bg-section"><img src="{{asset('assets/images/page-titles/18.jpg')}}" alt="Background" /></div>
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="title">
                        <h1 class="title-heading">Request quote</h1>
                        <!-- End .breadcrumb-->
                    </div>
                    <!-- End .title-->
                </div>
                <!-- End .col-12-->
            </div>
            <!-- End .row-->
        </div>
        <!-- End .container-->
    </div>
</section>
<!-- End #page-title-->
<!--
      ============================
      Contact #4 Section
      ============================
      -->
<section class="contact contact-4" id="contact-4">
    <div class="container">
        <div class="contact-panel contact-panel-3">
            <div class="heading heading-6">
                <p class="heading-subtitle">Improving The Performance Of Solar Energy.</p>
                <h2 class="heading-title">Discover Independence Through Using The Power Of Solar Panels!</h2>
                <p class="heading-desc">We offer products, solutions, and services across the entire energy value chain.
                    We support our customers on their way to a more sustainable future – no matter how far along the
                    journey to energize society with affordable energy systems.</p>
                <div class="advantages-list-holder">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <ul class="list-unstyled advantages-list advantages-list-3">
                                <li>Reliabe and performance</li>
                                <li>Solar material financing</li>
                                <li>In-time manufacturing</li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-6">
                            <ul class="list-unstyled advantages-list advantages-list-3">
                                <li>50% more energy output</li>
                                <li>Built using ntype mono</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="contact-action"><a class="btn btn--primary" href="{{route('about')}}">learn more <i
                            class="energia-arrow-right"></i></a><a class="btn btn--bordered btn--white"
                        href="{{route('faq')}}">our core values</a></div>
                <div class="contact-quote contact-quote-3"> <img src="{{asset('assets/images/icons/noteicon-2.png')}}"
                        alt="icon" />
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
                                    <label class="form-label" for="contact-projects">Tell us about your project</label>
                                    <textarea class="form-control" id="contact-projects" name="contact-projects"
                                        placeholder="Add other data" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mb-20">
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="contact-first-name">First name</label>
                                    <input class="form-control" type="text" id="contact-first-name"
                                        name="contact-first-name" placeholder="Mahmoud" required />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="contact-last-name">Last name</label>
                                    <input class="form-control" type="text" id="contact-last-name"
                                        name="contact-last-name" placeholder="Adel" required />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="contact-phone">Phone</label>
                                    <input class="form-control" type="text" id="contact-phone" name="contact-phone"
                                        placeholder="Phone" required />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="contact-email">Email</label>
                                    <input class="form-control" type="email" id="contact-email" name="contact-email"
                                        placeholder="Email" required />
                                </div>
                            </div>
                        </div>
                        <div class="mb-20">
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label">Preferred Contact Method</label>
                                    <div class="custom-radio-group" id="custom-radio-group">
                                        <div class="custom-control">
                                            <input class="custom-control-input" type="radio" id="customRadioInline1"
                                                name="customRadioInline1" value="all" />
                                            <label for="customRadioInline1">All</label>
                                        </div>
                                        <div class="custom-control">
                                            <input class="custom-control-input" type="radio" id="customRadioInline2"
                                                name="customRadioInline1" value="email" />
                                            <label for="customRadioInline2">Email</label>
                                        </div>
                                        <div class="custom-control">
                                            <input class="custom-control-input" type="radio" id="customRadioInline3"
                                                name="customRadioInline1" value="phone" />
                                            <label for="customRadioInline3">Phone</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <label class="form-label" for="contact-address">Street address</label>
                                    <input class="form-control" type="text" id="contact-address" name="contact-address"
                                        placeholder="Write street address" required />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="contact-city">City</label>
                                    <input class="form-control" type="text" id="contact-city" name="contact-city"
                                        placeholder="Write city" required />
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-6">State</label>
                                    <select name='contact-state' class="form-control" id="select-6">
                                        <option value="Alabama">Alabama</option>
                                        <option value="New York">New York</option>
                                        <option value="California">California</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="contact-zip">ZIP code</label>
                                    <input class="form-control" type="text" id="contact-zip" name="contact-zip"
                                        placeholder="2145" required />
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-7">Country</label>
                                    <select name="contact-country" class="form-control" id="select-7">
                                        <option value="United States">United States</option>
                                        <option value="England">England</option>
                                        <option value="Germany">Germany</option>
                                    </select>
                                </div>
                                <div class="col-12 col-md-6">
                                    <label class="form-label" for="select-8">Ship to address type</label>
                                    <select name="ship_to_address_type" class="form-control" id="select-8">
                                        <option value="commercial">Commercial</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="custom-radio-group" id="custom-radio-group-2">
                                        <div class="custom-control">
                                            <input class="custom-control-input" type="radio" id="customRadioInline4"
                                                name="customRadioInline4" value="agree" />
                                            <label for="customRadioInline4">I agree to the <a
                                                    href="javascript:void(0)">terms and conditions</a></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn--secondary w-100">Submit request <i
                                            class="energia-arrow-right"></i></button>
                                </div>
                                <div class="col-12">
                                    <div class="contact-result"></div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <!-- End .contact-body -->
            </div>
        </div>
        <!-- End .contact-panel-->
    </div>
    <!-- End .container-->
</section>
@endsection