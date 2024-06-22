<header class="d-flex flex-wrap justify-content-end mb-auto py-3 border-0 bg-transparent fixed-top">
<ul class="nav nav-pills">
        <li class="nav-item">
            <a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }} " aria-current="page">Home</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/event') }}" class="nav-link {{ Request::is('event') ? 'active' : '' }} ">Events</a>
        </li>
        <li class="nav-item">
            <a href="{{ url('/sponsor') }}" class="nav-link {{ Request::is('sponsor') ? 'active' : '' }} ">Sponsorship</a>
        </li>
        <li class="nav-item">
            <a href="" class="nav-link text-white">About Us</a>
        </li>
    </ul>
</header>
