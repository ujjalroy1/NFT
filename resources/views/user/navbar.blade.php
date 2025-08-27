<header id="navbar-sticky" class="navbar">
    <div class="container">
        <nav>
            <!-- Navbar Brand Logo -->
            <a href="{{ url('/') }}" class="logo">
                <img src="{{ asset('userview/assets/images/logo.png') }}" class="h-10" alt="WebAi Logo">
            </a>

            <!-- Mobile Menu Toggle Button (Offcanvas Button) -->
            <div class="lg:hidden flex items-center ms-auto px-2.5">
                <button class="hs-collapse-toggle inline-flex items-center justify-center h-9 w-12 rounded-md border border-white/20 bg-default-100/5" 
                        type="button" 
                        id="hs-unstyled-collapse" 
                        data-hs-collapse="#mobileMenu" 
                        data-hs-type="collapse">
                    <i data-lucide="menu" class="h-5 w-5 stroke-white"></i>
                </button>
            </div>

            <!-- Navigation Menu -->
            <div id="mobileMenu" class="hs-collapse transition-all duration-300 lg:basis-auto basis-full grow hidden lg:flex items-center justify-center mx-auto mt-2 lg:mt-0">
                <ul id="navbar-navlist" class="navbar-nav">
                    <!-- Home Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>

                    <!-- Collection Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#Collection">Collection</a>
                    </li>

                    <!-- About Us Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#aboutUs">About Us</a>
                    </li>

                    <!-- FAQ Page Link -->
                    <li class="nav-item">
                        <a class="nav-link" href="#faq">Faq</a>
                    </li>
                </ul>

                <!-- Rewards Button (Mobile) -->
                <div class="lg:hidden flex items-center pt-4 mt-4 lg:pt-0 lg:mt-0 border-t border-white/10 lg:border-none">
                    <a href="{{ url('/dashboard-public') }}" 
                       class="inline-flex items-center justify-center gap-2 bg-[#46D865] hover:bg-[#18F130] text-[#000] font-semibold py-2 px-6 rounded-full transition-all duration-300 me-2 mt-2">
                       Rewards
                    </a>
                </div>
            </div>

            <!-- Rewards Button (Desktop) -->
            <div class="hidden lg:flex items-center">
                <a href="{{ url('/dashboard-public') }}" 
                   class="inline-flex items-center justify-center gap-2 bg-[#46D865] hover:bg-[#18F130] text-[#000] font-semibold py-2 px-6 rounded-full transition-all duration-300 me-2 mt-2">
                   Rewards
                </a>
            </div>
        </nav><!-- end nav -->
    </div>
</header>
