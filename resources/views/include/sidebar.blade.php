<!-- Sidebar view to show image, name, and menu -->
<div class="border-end border-warning h-100">
    <div class="text-center">
        <img src="{{asset('images/profile.jpg')}}" alt="" class="img-fluid rounded-circle mt5">
        <h3 class="text-white mt-3 st-font">Syal</h3>
    </div>

    <!-- I have used ternery operator with Request if route name is home then active home ,,,, -->
    <nav class="nav flex-column text-center mt4">
        <a href="{{route('home')}}" class="nav-link {{ Request::routeIs('home')? 'active':'' }}">Home</a>
        <a href="{{route('services')}}" class="nav-link {{ Request::routeIs('services')? 'active':'' }}">Services</a>
        <a href="{{route('skills')}}" class="nav-link {{ Request::routeIs('skills')? 'active':'' }}">Skills</a>
        <a href="{{route('contact')}}" class="nav-link {{ Request::routeIs('contact')? 'active':'' }}">Contact</a>
    </nav>
</div>