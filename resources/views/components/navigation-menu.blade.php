<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">{{config('app.name')}} </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <x-nav-link :active="request()->routeIs('home')" href="{{ route('home') }}"> Home </x-nav-link>
        <x-nav-link :active="request()->routeIs('contact')" href="{{route('contact')}}"> Contact </x-nav-link>
        <x-nav-link :active="request()->routeIs('about')" href="{{route('about')}}"> About </x-nav-link>
        <x-nav-link :active="request()->routeIs('posts.*')" href="{{route('posts.index')}}"> Posts </x-nav-link>
        {{-- <x-nav-link href="/"> Home </x-nav-link> --}}

      </ul>
    </div>
  </nav>
