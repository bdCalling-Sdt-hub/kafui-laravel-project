@extends('Frontend.layout.app')
@section('title')Project @endsection

@section('content')
<!--
      ============================
      PageTitle #12 Section
      ============================
      -->
      <section class="page-title page-title-12" id="page-title">
        <div class="page-title-wrap bg-overlay bg-overlay-dark-3">
          <div class="bg-section"><img src="{{asset('assets/images/page-titles/12.jpg')}}" alt="Background"/></div>
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-6 offset-lg-3">
                <div class="title text-center">
                  <h1 class="title-heading">projects</h1>
                  <p class="title-desc">We offer products, solutions, and services across the entire energy value chain. We support our customers on their way to a more sustainable future.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="breadcrumb-wrap">
          <div class="container">
            <ol class="breadcrumb d-flex">
              <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Projects</li>
            </ol>
            <!-- End .row-->
          </div>
        </div>
        <!-- End .container-->
      </section>
      <!-- End #page-title-->
      <!--
      ============================
      Projects Standard #1 Section
      ============================
      -->
      <section class="projects projects-standard projects-standard-1" id="projects-standard-1">
        <div class="container">
          <div class="row"> 
            <div class="col-12">
              <!-- Start .projects-filter-->
              <div class="projects-filter">
                <ul class="list-inline mb-0">
                  <li><a class="active-filter" href="javascript:void(0)" data-filter="*">All</a></li>
                  <li><a href="javascript:void(0)" data-filter=".filter-finance">finance</a></li>
                  <li><a href="javascript:void(0)" data-filter=".filter-supply">supply chain</a></li>
                  <li><a href="javascript:void(0)" data-filter=".filter-inovations">inovations</a></li>
                  <li><a href="javascript:void(0)" data-filter=".filter-infrastructure">infrastructure</a></li>
                  <li><a href="javascript:void(0)" data-filter=".filter-green">green energy</a></li>
                  <li><a href="javascript:void(0)" data-filter=".filter-eco">ECO</a></li>
                </ul>
              </div>
              <!-- End .projects-filter-->
            </div>
          </div>
          <!-- End .row-->
          <div class="row" id="projects-all">
                        <div class="col-12 col-md-6 col-lg-4 project-item filter-finance filter-supply">
                          <div class="project-panel" data-hover="">
                            <div class="project-panel-holder">
                              <div class="project-img"><a class="link" href="{{route('singelProject')}}"></a><img src="{{asset('assets/images/projects/modern/1.jpg')}}" alt="project image"/></div>
                              <!-- End .project-img-->
                              <div class="project-content"> 
                                <div class="project-title">
                                  <h4><a href="{{route('singelProject')}}">expanding The Solar Supply Chain Finance Program</a></h4>
                                </div>
                                <div class="project-cat"><a href="{{route('project')}}">finance</a><a href="{{route('project')}}">supply chain</a>
                                </div>
                              </div>
                              <!-- End .project-content -->
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 project-item filter-green">
                          <div class="project-panel" data-hover="">
                            <div class="project-panel-holder">
                              <div class="project-img"><a class="link" href="{{route('singelProject')}}"></a><img src="{{asset('assets/images/projects/modern/2.jpg')}}" alt="project image"/></div>
                              <!-- End .project-img-->
                              <div class="project-content"> 
                                <div class="project-title">
                                  <h4><a href="{{route('singelProject')}}">Addressing Wind Energy Innovation Challenges</a></h4>
                                </div>
                                <div class="project-cat"><a href="{{route('project')}}">energy</a><a href="{{route('project')}}">green energy</a>
                                </div>
                              </div>
                              <!-- End .project-content -->
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 project-item filter-infrastructure">
                          <div class="project-panel" data-hover="">
                            <div class="project-panel-holder">
                              <div class="project-img"><a class="link" href="{{route('singelProject')}}"></a><img src="{{asset('assets/images/projects/modern/3.jpg')}}" alt="project image"/></div>
                              <!-- End .project-img-->
                              <div class="project-content"> 
                                <div class="project-title">
                                  <h4><a href="{{route('singelProject')}}">Smarter Ways to Manage EV Charging Infrastructures</a></h4>
                                </div>
                                <div class="project-cat"><a href="{{route('project')}}">electric vehicle</a><a href="{{route('project')}}">infrastructure</a>
                                </div>
                              </div>
                              <!-- End .project-content -->
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 project-item filter-green filter-eco">
                          <div class="project-panel" data-hover="">
                            <div class="project-panel-holder">
                              <div class="project-img"><a class="link" href="{{route('singelProject')}}"></a><img src="{{asset('assets/images/projects/modern/4.jpg')}}" alt="project image"/></div>
                              <!-- End .project-img-->
                              <div class="project-content"> 
                                <div class="project-title">
                                  <h4><a href="{{route('singelProject')}}">New Public Attitude Tracker Towards Renewable Energy</a></h4>
                                </div>
                                <div class="project-cat"><a href="{{route('project')}}">green energy</a><a href="{{route('project')}}">eco</a>
                                </div>
                              </div>
                              <!-- End .project-content -->
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 project-item filter-inovations">
                          <div class="project-panel" data-hover="">
                            <div class="project-panel-holder">
                              <div class="project-img"><a class="link" href="{{route('singelProject')}}"></a><img src="{{asset('assets/images/projects/modern/5.jpg')}}" alt="project image"/></div>
                              <!-- End .project-img-->
                              <div class="project-content"> 
                                <div class="project-title">
                                  <h4><a href="{{route('singelProject')}}">Dangerous Environmental Impacts of Natural Gas</a></h4>
                                </div>
                                <div class="project-cat"><a href="{{route('project')}}">energy</a><a href="{{route('project')}}">inovation</a>
                                </div>
                              </div>
                              <!-- End .project-content -->
                            </div>
                          </div>
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 project-item filter-eco filter-supply">
                          <div class="project-panel" data-hover="">
                            <div class="project-panel-holder">
                              <div class="project-img"><a class="link" href="{{route('singelProject')}}"></a><img src="{{asset('assets/images/projects/modern/6.jpg')}}" alt="project image"/></div>
                              <!-- End .project-img-->
                              <div class="project-content"> 
                                <div class="project-title">
                                  <h4><a href="{{route('singelProject')}}">What Does the Future Hold for Renewable Energy?</a></h4>
                                </div>
                                <div class="project-cat"><a href="{{route('project')}}">eco</a><a href="{{route('project')}}">supply chain</a>
                                </div>
                              </div>
                              <!-- End .project-content -->
                            </div>
                          </div>
                        </div>
          </div>
          <!-- End .row-->
          <div class="row"> 
            <div class="col-12 text-center"><a class="btn btn--primary" id="load-more" href="javascript:void(0)">load more <i class="fas fa-plus"></i></a></div>
          </div>
          <!-- End .row-->
        </div>
        <!-- End .container-->
      </section>
@endsection