<nav class="navbar navbar-expand navbar-light py-3 bg-white shadow-sm fixed-top">
    <a class="navbar-brand" href="#">
        <h4 class="ml-4 text-success">{{ config('app.name', 'Laravel') }}</h4>
    </a>
    <ul class="navbar-nav ml-auto mt-lg-0">
        @yield('nav-item')
    </ul>
</nav>