<!-- ======= Mobile nav toggle button ======= -->
<button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">

        <div class="profile">
            <img src="/img/profile.jpg" alt="" class="img-fluid rounded-circle">
            <h1 class="text-light"><a href="index.html">Ramji Leo</a></h1>
            <div class="social-links mt-3 text-center">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>

        <nav class="nav-menu">
            <ul>
                <li><a href="{{ route('indexnew') }}"><i class="bx bx-home"></i> <span>Home</span></a></li>
                <li><a href="{{ route('aboutnew') }}"><i class="bx bx-user"></i> <span>About</span></a></li>
                <li><a href="#"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                <li><a href="{{ route('skillsnew') }}"><i class="bx bx-book-content"></i> Skills</a></li>
                <li><a href="{{ route('blogsnew') }}"><i class="bx bx-server"></i> Blogs</a></li>
                <li><a href="{{ route('contactnew') }}"><i class="bx bx-envelope"></i> Contact</a></li>
                @if(Auth::check())
                <li><a href="{{ route('logout') }}"><i class="bx bx-envelope"></i>Logout</a></li>
                @else
                <li><a href="{{ route('login') }}"><i class="bx bx-envelope"></i> Login/Register</a></li>
                @endif
            </ul>
        </nav><!-- .nav-menu -->
        <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
</header><!-- End Header -->