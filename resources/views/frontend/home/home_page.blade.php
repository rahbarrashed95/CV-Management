@extends('frontend.app')
@section('content')
<div class="animated-sections">
              <!-- Home Subpage -->
             
              <section data-id="home" class="animated-section start-page">
                <div class="section-content vcentered">

                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title-block">
                          <h2>{{ $user_data->name }}</h2>
                          <div class="owl-carousel text-rotation">                                    
                            <div class="item">
                              <div class="sp-subtitle">{{ $user_data->designation }}</div>
                            </div>
                            
                            <div class="item">
                              <div class="sp-subtitle">{{ $user_data->designation }}</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
              </section>
              
              <!-- End of Home Subpage -->

              <!-- About Me Subpage -->
              <section data-id="about-me" class="animated-section">
                <div class="page-title">
                  <h2>About <span>Me</span></h2>
                </div>

                <div class="section-content">
                  <!-- Personal Information -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-7">
                      <p>
                          
                          {!! $user_data->details !!}
                          
                      </p>
                    </div>

                    <div class="col-xs-12 col-sm-5">
                      <div class="info-list">
                        <ul>
                          <li>
                            <span class="title">Age</span>
                            <span class="value">
                                {{ $user_data->age }}
                            </span>
                          </li>
                          <li>
                            <span class="title">Address</span>
                            <span class="value">{{$user_data->address }}</span>
                          </li>

                          <li>
                            <span class="title">e-mail</span>
                            <span class="value">
                                {{ $user_data->email }}
                            </span>
                          </li>

                          <li>
                            <span class="title">Phone</span>
                            <span class="value">{{ $user_data->phone }}</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- End of Personal Information -->

                  <div class="white-space-50"></div>

                  <!-- Services -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>What <span>I Do</span></h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                      
                    <div class="col-xs-12 col-sm-12">
                      <div class="col-inner">
                        <div class="row info-list-w-icon">
                            
                            @foreach($service_items as $item)  
                            
                              <div class="col-md-6 info-block-w-icon">
                                <div class="ci-icon">
                                    <img src="{{ asset('public/backend/service/'.$item->icon) }}">
                                  <!--<i class="lnr lnr-store"></i>-->
                                </div>
                                <div class="ci-text">
                                  <h4>{{ $item->title }}</h4>
                                  <p>{!! $item->description !!}</p>
                                </div>
                              </div>
                          
                             @endforeach
                          
                        </div>
                      </div>
                    </div>
                   
                    
                  </div>
                  <!-- End of Services -->

                  <div class="white-space-50"></div>

                </div>
              </section>
              <!-- End of About Me Subpage -->

              <!-- Resume Subpage -->
              <section data-id="resume" class="animated-section">
                <div class="page-title">
                  <h2>Resume</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-xs-12 col-sm-7">

                      <div class="block-title">
                        <h3>Education</h3>
                      </div>
                      
                      
                      
                      <div class="timeline timeline-second-style clearfix">
                          
                        @foreach($education_items as $item)  
                          
                            <div class="timeline-item clearfix">
                              <div class="left-part">
                                <h5 class="item-period">{{ $item->year }}</h5>
                                <span class="item-company">{{ $item->uni_name }}</span>
                              </div>
                              <div class="divider"></div>
                              <div class="right-part">
                                <h4 class="item-title">{{ $item->background }}</h4>
                                <p>{!! $item->details !!}</p>
                              </div>
                            </div>
                        
                        @endforeach
                        
                        
                      </div>
                      
                      

                      <div class="white-space-50"></div>

                      <div class="block-title">
                        <h3>Experience</h3>
                      </div>

                      <div class="timeline timeline-second-style clearfix">
                          
                        @foreach($experience_items as $ex_item)
                          
                            <div class="timeline-item clearfix">
                              <div class="left-part">
                                <h5 class="item-period">{{ $ex_item->start_date }} to {{ $ex_item->end_date }}</h5>
                                <span class="item-company">{{ $ex_item->company_name }}</span>
                              </div>
                              <div class="divider"></div>
                              <div class="right-part">
                                <h4 class="item-title">{{ $ex_item->designation }}</h4>
                                <p>{!! $ex_item->responsibilities !!}</p>
                              </div>
                            </div>
                        
                        @endforeach
                       
                      </div>
                      

                    </div>

                    <!-- Skills & Certificates -->
                    <div class="col-xs-12 col-sm-5">
                      <!-- Design Skills -->
                      <div class="block-title">
                        <h3>Key <span>Skills</span></h3>
                      </div>

                      <div class="skills-info skills-second-style">
                          
                        @foreach(json_decode($user_data->skill) as $item)
                          
                            <!-- Skill 1 -->
                            <div class="skill clearfix">
                              <h4>{{ $item }}</h4>
                              <div class="skill-value">100%</div>
                            </div>
                            <div class="skill-container skill-1">
                              <div class="skill-percentage"></div>
                            </div>
                            <!-- End of Skill 1 -->
                        
                        @endforeach

                      </div>
                      
                      <!-- End of Design Skills -->

                      <div class="white-space-10"></div>
                      
                      <!-- End of Knowledges -->
                    </div>
                    <!-- End of Skills & Certificates -->
                  </div>

                  <div class="white-space-50"></div>

                  <!-- Certificates -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Certificates</h3>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                      
                    @foreach($certification_items as $cert_item)  
                      
                        <!-- Certificate 1 -->
                        <div class="col-xs-12 col-sm-6">
                          <div class="certificate-item clearfix">
                            <div class="certi-logo">
                              <img src="{{ asset('public/backend/certification/'.$cert_item->image) }}" alt="logo">
                            </div>
                            
                            <div class="certi-content">
                              <div class="certi-title">
                                <h4>{{ $cert_item->title }}</h4>
                              </div>
                              <!--<div class="certi-id">-->
                              <!--  <span>Membership ID: XXXX</span>-->
                              <!--</div>-->
                              <div class="certi-date">
                                <span>{{ $cert_item->certificate_date }}</span>
                              </div>
                              <div class="certi-company">
                                <span></span>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!-- End of Certificate 1 -->

                    @endforeach

                  </div>
                  <!-- End of Certificates -->
                </div>
              </section>
              <!-- End of Resume Subpage -->

              <!-- Portfolio Subpage -->
              <section data-id="portfolio" class="animated-section">
                <div class="page-title">
                  <h2>Portfolio</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <!-- Portfolio Content -->
                      <div class="portfolio-content">

                        <ul class="portfolio-filters">
                          <li class="active">
                            <a class="filter btn btn-sm btn-link" data-group="category_all">All</a>
                          </li>
                        </ul>

                        <!-- Portfolio Grid -->
                        <div class="portfolio-grid three-columns">
                          
                        @foreach($portfolio_items as $item)

                          <figure class="item lbvideo" data-groups='["category_all", "category_vimeo-videos"]'>
                            <div class="portfolio-item-img">
                              <img src="{{ asset('public/backend/portfolio/'.$item->thumbnail) }}" alt="Vimeo Video 1" title="" />
                              <a href="https://player.vimeo.com/video/158284739" class="lightbox mfp-iframe" title="Vimeo Video 1"></a>
                            </div>

                            <i class="far fa-image"></i>
                            <h4 class="name">{{ $item->title }}</h4>
                          </figure>

                        @endforeach  
                          
                        </div>
                      </div>
                      <!-- End of Portfolio Content -->
                    </div>
                  </div>
                </div>
              </section>
              <!-- End of Portfolio Subpage -->

              <!-- Blog Subpage -->
              <section data-id="blog" class="animated-section">
                <div class="page-title">
                  <h2>Blog</h2>
                </div>

                <div class="section-content">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="blog-masonry two-columns clearfix">
                        
                        @foreach($blog_items as $b_item)
                        
                            <!-- Blog Post 1 -->
                            <div class="item post-1">
                              <div class="blog-card">
                                <div class="media-block">
                                  <a href="#">
                                    <img src="{{ asset('public/backend/blog/'.$b_item->thumbnail) }}" class="size-blog-masonry-image-two-c" alt="Why I Switched to Sketch For UI Design" title="" />
                                    <div class="mask"></div>
                                  </a>
                                </div>
                                <div class="post-info">
                                  <div class="post-date">05 Mar 2020</div>
                                  <a href="">
                                    <h4 class="blog-item-title">{{ $b_item->title }}</h4>
                                  </a>
                                </div>
                              </div>
                            </div>
                            <!-- End of Blog Post 1 -->
                        
                        @endforeach
                        
                      </div>
                    </div>
                  </div>
                </div>


              </section>
              <!-- End of Blog Subpage -->

              <!-- Contact Subpage -->
              <section data-id="contact" class="animated-section">
                <div class="page-title">
                  <h2>Contact</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <!-- Contact Info -->
                    <!--<div class="col-xs-12 col-sm-4">-->
                    <!--  <div class="lm-info-block gray-default">-->
                    <!--    <i class="lnr lnr-map-marker"></i>-->
                    <!--    <h4>San Francisco</h4>-->
                    <!--    <span class="lm-info-block-value"></span>-->
                    <!--    <span class="lm-info-block-text"></span>-->
                    <!--  </div>-->

                    <!--  <div class="lm-info-block gray-default">-->
                    <!--    <i class="lnr lnr-phone-handset"></i>-->
                    <!--    <h4>415-832-2000</h4>-->
                    <!--    <span class="lm-info-block-value"></span>-->
                    <!--    <span class="lm-info-block-text"></span>-->
                    <!--  </div>-->

                    <!--  <div class="lm-info-block gray-default">-->
                    <!--    <i class="lnr lnr-envelope"></i>-->
                    <!--    <h4><a href="https://lmpixels.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0b6a676e734b6e736a667b676e25686466">[email&#160;protected]</a></h4>-->
                    <!--    <span class="lm-info-block-value"></span>-->
                    <!--    <span class="lm-info-block-text"></span>-->
                    <!--  </div>-->

                    <!--  <div class="lm-info-block gray-default">-->
                    <!--    <i class="lnr lnr-checkmark-circle"></i>-->
                    <!--    <h4>Freelance Available</h4>-->
                    <!--    <span class="lm-info-block-value"></span>-->
                    <!--    <span class="lm-info-block-text"></span>-->
                    <!--  </div>-->


                    <!--</div>-->
                    <!-- End of Contact Info -->

                    <!-- Contact Form -->
                    <div class="col-xs-12 col-sm-8">
                      <div id="map" class="map">
                          <div class="lmpixels-map">
                            	<iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=San%20Francisco%2C%20S601%20Townsend%20Street%2C%20California%2C%20USA&amp;amp;t=m&amp;amp;z=16&amp;amp;output=embed&amp;amp;iwloc=near&amp;output=embed"></iframe>
                            </div>
                      </div>
                      <div class="block-title">
                        <h3>How Can I <span>Help You?</span></h3>
                      </div>

                      <form id="" class="contact-form" action="{{ route('front.send-message') }}" method="post">
                        @csrf
                        <div class="messages"></div>

                        <div class="controls two-columns">
                          <div class="fields clearfix">
                            <div class="left-column">
                              <div class="form-group form-group-with-icon">
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Name is required.">
                                <label>Full Name</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_email" type="text" name="phone" class="form-control" placeholder="" required="required" data-error="Phone is required.">
                                <label>Phone</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                              
                            </div>
                            <div class="right-column">
                              <div class="form-group form-group-with-icon">
                                <textarea id="form_message" name="message" class="form-control" placeholder="" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                                <label>Message</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>

                          <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div>
      
                          <input type="submit" class="button btn-send" value="Send message">
                        </div>
                      </form>
                    </div>
                    <!-- End of Contact Form -->
                  </div>

                </div>
              </section>
              <!-- End of Contact Subpage -->
              
              <!-- Login Subpage -->
              <!--<section data-id="login" class="animated-section">-->
              <!--  <div class="page-title">-->
              <!--    <h2>Login</h2>-->
              <!--  </div>-->

              <!--  <div class="section-content">-->

              <!--    <div class="row">-->
                    <!-- Contact Info -->
                    
                    <!-- End of Contact Info -->

                    <!-- Contact Form -->
              <!--      <div class="col-xs-12 col-sm-8">-->
                      
              <!--        <form method="POST" action="{{ route('login') }}">-->
              <!--              @csrf-->
              <!--            <div class="row gy-3 overflow-hidden">-->
              <!--              <div class="col-12">-->
              <!--                <div class="form-floating mb-3">-->
              <!--                  <input type="email" class="form-control border-0 border-bottom rounded-0 @error('email') is-invalid @enderror" name="email" id="email" placeholder="name@example.com" value="{{ old('email')}}">-->
                                
              <!--                  <label for="email" class="form-label">Email</label>-->
              <!--                  @error('email')-->
              <!--                      <span class="invalid-feedback" role="alert">-->
              <!--                          <strong>{{ $message }}</strong>-->
              <!--                      </span>-->
              <!--                  @enderror-->
        
              <!--                </div>-->
              <!--              </div>-->
              <!--              <div class="col-12">-->
              <!--                <div class="form-floating mb-3">-->
              <!--                  <input type="password" class="form-control border-0 border-bottom rounded-0 @error('password') is-invalid @enderror"  name="password" id="password" value="" placeholder="Password" required>-->
              <!--                  <label for="password" class="form-label">Password</label>-->
              <!--                  @error('email')-->
              <!--                      <span class="invalid-feedback" role="alert">-->
              <!--                          <strong>{{ $message }}</strong>-->
              <!--                      </span>-->
              <!--                  @enderror-->
              <!--                </div>-->
              <!--              </div>-->
        
              <!--              <div class="col-12">-->
              <!--                <div class="d-grid">-->
              <!--                  <button class="btn btn-lg btn-dark rounded-0 fs-6" type="submit">Log in</button>-->
              <!--                </div>-->
              <!--              </div>-->
              <!--            </div>-->
              <!--          </form>-->
              <!--      </div>-->
                    <!-- End of Contact Form -->
              <!--    </div>-->

              <!--  </div>-->
              <!--</section>-->
              <!-- End of Contact Subpage -->
            </div>
            
@endsection            