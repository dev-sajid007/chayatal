<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('backend/admin/img/logo/logo2.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">RuangAdmin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin.dashboard')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <li class="nav-item {{(Request::is('admin/category*'))?'active':''}}">
        <a class="nav-link" href="{{route('admin.category.index')}}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Category</span>
        </a>
    </li>
    <li class="nav-item {{(Request::is('admin/tag*'))?'active':''}}">
        <a class="nav-link" href="{{route('admin.tag.index')}}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Tag</span>
        </a>
    </li>
    <li class="nav-item {{(Request::is('admin/executive*'))?'active':''}}">
        <a class="nav-link" href="{{route('admin.executive.index')}}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Executive</span>
        </a>
    </li>
    <li class="nav-item {{(Request::is('admin/governing_body*'))?'active':''}}">
        <a class="nav-link" href="{{route('admin.governing_body.index')}}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Governing Body</span>
        </a>
    </li>
    <li class="nav-item {{(Request::is('admin/adviser*'))?'active':''}}">
        <a class="nav-link" href="{{route('admin.adviser.index')}}">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Adviser</span>
        </a>
    </li>
    <li class="nav-item {{(Request::is('admin/website*'))?'active':''}}">
        <a class="nav-link collapsed " href="#" data-toggle="collapse" data-target="#collapseBootstrap"
            aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Website</span>
        </a>
        <div id="collapseBootstrap" class="collapse {{Request::is('admin/website*')?'show':''}}" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item {{(Request::is('admin/website/menu*'))?'active':''}}" href="{{route('admin.website.menu.index')}}">Menu </a>
                <a class="collapse-item {{(Request::is('admin/website/page*'))?'active':''}}" href="{{route('admin.website.page.index')}}">Page </a>
                <a class="collapse-item {{(Request::is('admin/website/banner*'))?'active':''}}" href="{{route('admin.website.banner.index')}}">Banner </a>
                <a class="collapse-item {{(Request::is('admin/website/gallery*'))?'active':''}}" href="{{route('admin.website.gallery.index')}}">Gallery </a>
                <a class="collapse-item {{(Request::is('admin/website/testimonial*'))?'active':''}}" href="{{route('admin.website.testimonial.index')}}">Testimonial </a>
                <a class="collapse-item {{(Request::is('admin/website/sponsor*'))?'active':''}}" href="{{route('admin.website.sponsor.index')}}">Sponsor </a>
                <a class="collapse-item {{(Request::is('admin/website/event*'))?'active':''}}" href="{{route('admin.website.event.index')}}">Event </a>
                <a class="collapse-item {{(Request::is('admin/website/news*'))?'active':''}}" href="{{route('admin.website.news.index')}}">News </a>
                <a class="collapse-item {{(Request::is('admin/website/web-info*'))?'active':''}}" href="{{route('admin.website.web-info.index')}}">Web Info </a>
            </div>
        </div>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>
