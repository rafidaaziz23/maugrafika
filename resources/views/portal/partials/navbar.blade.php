<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="/" class="navbar-brand ms-4 ms-lg-0">
        <h2 class="m-0"><img class="me-3" width="50px" src="img/logo.png" alt="Icon">MauGrafika</h2>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link {{ $title === 'Home' ? 'active' : '' }}">Home</a>
            <a href="/aboutus" class="nav-item nav-link {{ $title === 'About Us' ? 'active' : '' }}">About Us</a>
            <a href="/storeproduk" class="nav-item nav-link {{ $title === 'Store' ? 'active' : '' }}">Store</a>
            <a href="/portofolios"
                class="nav-item nav-link {{ $title === 'Portofolio' ? 'active' : '' }}">Portofolio</a>
            <a href="/faqs" class="nav-item nav-link {{ $title === 'Faq' ? 'active' : '' }}">FAQ</a>
            <a href="/contactus" class="nav-item nav-link {{ $title === 'Contact Us' ? 'active' : '' }}">Contact
                Us</a>
        </div>
        <a href="" class="btn btn-outline-warning py-2 px-4 d-none d-lg-block">Login</a>
    </div>
</nav>
<!-- Navbar End -->
