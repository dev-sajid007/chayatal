<footer class="main-footer-area">
    <div class="container">
        {{-- <div class="footer-top-area">
            <ul class="footer-socila">
                <li>
                    <h4>Connect With Us:</h4>
                </li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-rss"></i></a></li>
                <li><a href="#"><i class="fa fa-vimeo"></i></a></li>
            </ul>
            <div class="footer-subscribe">
                <form method="post" action="index.html">
                    <div class="form-group">
                        <input type="email" name="search" placeholder="Email Address" required>
                        <button type="submit" class="btn-one">Subscribe</button>
                    </div>
                </form>
            </div>
        </div> --}}

        <div class="main-footer">
            <div class="row">
                <div class="footer-column col-md-3 col-sm-6 col-xs-12">
                    <div class="logo-widget">
                        <div class="footer-logo">
                            <figure><a href="index.html"><img src="{{asset(@$data['footer']->logo)}}"
                                        alt=""></a></figure>
                        </div>
                        <div class="text">
                            <p>{{@$data['footer']->about}}</p>
                        </div>
                        {{-- <a href="contact.html">Contact us</a> --}}
                    </div>
                </div>
                <div class="footer-column col-md-2 col-sm-6 col-xs-12">
                    <div class="link-widget">
                        <h4>Quick Links</h4>
                        <ul class="list">
                            @foreach (@$data['menus'] as $menu)
                                <li><a href="{{$menu->url ? $menu->url : '#' }}">{{$menu->title}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
        
                <div class="footer-colmun col-md-4 col-sm-6 col-xs-12">
                    <div class="gallery-widget">
                        <h4>Our Gallery</h4>
                    
                        <ul class="img-list">
                            @foreach (@$data['galleries'] as $gallery)
                                <li>
                                    <a href="#">
                                        <figure><img style="width: 83px; hight: 83px" src="{{ asset(@$gallery->photo) }}" alt=""></figure>
                                    </a>
                                </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                <div class="footer-colmun col-md-3 col-sm-6 col-xs-12">
                    <div class="contact-widget">
                        <h4>Contact us</h4>
                        <div class="text">
                            <p>{{@$data['footer']->about}}</p>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><i class="fa fa-home" aria-hidden="true"></i></div>
                            <div class="text">{{@$data['footer']->address}}</div>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><i class="fa fa-phone"></i></div>
                            <div class="text">{{@$data['footer']->phone}}</div>
                        </div>
                        <div class="single-item">
                            <div class="icon-box"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                            <div class="mail"><a href="#">{{@$data['footer']->email}}</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <div class="text">
                <p>Copyright © copy <a href="#">Chayatal</a> {{date('Y')}}. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>