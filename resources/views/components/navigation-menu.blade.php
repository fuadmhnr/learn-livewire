<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
      <a class="navbar-brand" href="#">
        {{ config('app.name') }}
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">Home</x-nav-link> 
          <x-nav-link href="{{ route('about') }}" :active="request()->routeIs('about')">About</x-nav-link> 
          <x-nav-link href="{{ route('contact') }}" :active="request()->routeIs('contact')">Contact</x-nav-link> 
          <x-nav-link href="{{ route('posts.index') }}" :active="request()->routeIs('posts.index')">Posts</x-nav-link> 
        </ul>
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          @auth
            <form action="{{ route('logout') }}" method="post">
              @csrf
              <button type="submit" class="btn btn-primary">Logout</button>
            </form>
          @else
          <x-nav-link href="{{ route('login') }}">Login</x-nav-link> 

          @endauth
        </ul>
      </div>
    </div>
  </nav>