<body>    
<!-- Preloader -->
<div id="preloader">
    <div class="preloader-inner">
        <div class="spinner"></div>
        <div class="loading-text">
            <span data-preloader-text="P" class="characters">P</span>
            
            <span data-preloader-text="E" class="characters">E</span>
            
            <span data-preloader-text="N" class="characters">N</span>
            
            <span data-preloader-text="C" class="characters">C</span>
            
            <span data-preloader-text="I" class="characters">I</span>

            <span data-preloader-text="L" class="characters">L</span>           
        </div>
    </div>
</div>

<header class="header">
            <!-- Top Bar -->
            <div class="header-top">
                <div class="container">
                    <div class="d-none d-xl-flex justify-content-between align-items-center flex-wrap">
                        <!-- Left Box -->
                        <div class="left-box d-flex align-items-center">
                            <!-- Social Box -->
                            <div class="social-box">
                                <ul>
                                @foreach(social_items() as $item)
                                    <li><a href="{{ $item->link }}" class="{{ $item->icon }}"></a></li>                                   
                                @endforeach
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Right Box -->
                        <div class="right-box d-flex align-items-center">

                            <ul class="info-list">
                                <li><a href="{{ getInfo('email') }}"><span class="icon bi bi-envelope-fill"></span>{{ getInfo('email') }}</a></li>
                                <li><a href="#"><span class="icon bi bi-geo-alt-fill"></span>{{ getInfo('address') }}</a></li>
                            </ul>

                            <!-- Button Box -->
                            <div class="button-box">
                                <a href="tel:+176845399" class="btn active clearfix">
                                
                                    <span><img src="{{ asset('public/frontend/assets/img/icon_chat.png') }}" alt="chat icon"></span>
                                    <span class="btn-wrap">
                                        <span class="text-first">{{ getInfo('contact') }}</span>
                                        <span class="text-second">{{ getInfo('contact') }}</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Lower Bar -->
            <div class="header-inner">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-between">
                        <!-- Left Part -->
                        <div class="header_left_part d-flex align-items-center">
                            <div class="logo">
                                <a href="{{ route('front.home') }}" class="light_logo">                                    
                                    <img src="{{ getImage('settings',getInfo('logo'))}}" alt="" class="img-fluid side_logo">
                                </a>
                            </div>
                        </div>

                        <!-- Right Part -->
                        <div class="header_right_part d-flex align-items-center">
                            <div class="mainnav d-none d-xl-block">
                                <ul class="main-menu">       
                                    <li class="menu-item"><a href="{{ route('front.home') }}">Home</a></li>                               
                                    @foreach(menu_items() as $item)
                                        <li class="menu-item"><a href="{{ route('front.page-details', [$item->page->id]) }}">{{ $item->page->title }}</a>
                                        @php 
                                           $submenu = App\Models\SubMenu::with('page')->where('parent_id', $item->page_id)->get();
                                        @endphp
                                            @if(count($submenu))
                                                <ul class="sub-menu">
                                                @foreach ($submenu as $sub_item)
                                                    <li><a href="{{ route('front.page-details', [$sub_item->page->id]) }}">{{ $sub_item->page->title }}</a></li> <!-- Display the title of the submenu -->
                                                @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                    <li class="menu-item"><a href="{{ route('front.contact_us') }}">Contact</a></li> 
                                </ul>
                            </div>

                            <div class="header_search">
                                <form class="search_form" action="https://wpthemebooster.com/demo/themeforest/html/immigway/search.php">
                                    <input type="text" name="search" class="keyword form-control" placeholder="Search..." />
                                    <button type="submit" class="form-control-submit"><i class="bi bi-search"></i></button>
                                </form>
                            </div>

                            <button class="aside_open">
                                <img src="{{ asset('public/frontend/assets/img/icon_grid.png') }}" alt="img">
                            </button>

                            <button type="button" class="mr_menu_toggle d-xl-none">
                                <i class="bi bi-list"></i>
                            </button>
                        </div>
                    </div>
                </div>
			</div>
		</header>