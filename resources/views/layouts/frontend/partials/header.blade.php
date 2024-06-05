<header class="main-header">
    <div class="header-upper">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <ul class="top-left">
                        <li><i class="fa fa-phone"></i>Call: +88 02 5815 2121 </li>
                        <li><i class="fa fa-envelope"></i>Email: chayatalbd@gmail.com</li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="top-right clearfix">
                        <ul class="social-link">
                            <li>Follow Us On: </li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="header-lower">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{ asset($info->logo) }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-10 col-sm-12 col-xs-12">
                    <div class="menu-bar">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">

                                    @foreach ($menus as $menu)
                                    <li class="{{count($menu->childs) > 0 ? "dropdown" : ""}}"><a href="#">{{$menu->title}}</a>
                                        @if ($menu->childs)
                                        <ul>
                                            @foreach ($menu->childs as $item)
                                                <li><a href="{{$item->url}}">{{ $item->title}}</a></li>
                                            @endforeach
                                        </ul>
                                        @endif
                                    </li>
                                    @endforeach

                                </ul>
                            </div>
                        </nav>
                        <div class="info-box">
                            <a href="{{route('donation')}}" class="donate-box-btn btn-one">donate now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Sticky Header-->
    <div class="sticky-header">
        <div class="container clearfix">
            <div class="row">
                <div class="col-md-2 col-sm-12 col-xs-12">
                    <div class="logo">
                        <a href="{{route('home')}}"><img src="{{ asset($info->logo) }}" alt=""></a>
                    </div>
                </div>
                <div class="col-md-10 col-sm-12 col-xs-12">
                    <div class="menu-bar">
                        <nav class="main-menu">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse"
                                    data-target=".navbar-collapse">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                            <div class="navbar-collapse collapse clearfix">
                                <ul class="navigation clearfix">
                                    @foreach ($menus as $menu)
                                        <li class="{{count($menu->childs) > 0 ? "dropdown" : ""}}"><a href="{{$menu->url}}">{{$menu->title}}</a>
                                            @if ($menu->childs)
                                            <ul>
                                                @foreach ($menu->childs as $item)
                                                    <li><a href="{{$item->url}}">{{ $item->title}}</a></li>
                                                @endforeach
                                            </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </nav>
                        <div class="info-box">
                            <a href="{{route('donation')}}" class="donate-box-btn btn-one">donate now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>