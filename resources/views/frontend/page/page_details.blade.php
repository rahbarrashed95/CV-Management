@extends('frontend.app')
@section('content')
<main class="wrapper">
            <!-- Page Header -->
            <div class="wptb-page-heading" style="background-image: url({{ asset('public/backend/page/'. $item->header_image) }});">
                <div class="container">
                    <div class="wptb-item--inner">
                        <h2 class="wptb-item--title ">{{ $item->title }}</h2>
                        <div class="wptb-breadcrumb-wrap">
                            <ul class="wptb-breadcrumb">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><span>{{ $item->title }}</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
			
			<!-- Details Content -->
			<section class="blog-details">
				<div class="container">
					<div class="row">                      
                   
                       

                        <div class="col-lg-12 col-md-7 mt-5 mt-md-0">
                            <div class="blog-details-inner">
                                <div class="post-content">
                                  
                                    {!! $item->description !!}                                    

                                   
                                </div>
                            </div>

                        </div>

                    </div>
				</div>
			</section>
			<!-- End Details Content -->
			
		</main>
@endsection        