@php
  use App\Models\Category;
  $menuCategories = Category::where('is_active', true)->orderBy('name')->take(10)->get();
@endphp

<header id="header" class="header position-relative">
  <div class="container-fluid container-xl position-relative">

    <div class="top-row d-flex align-items-center justify-content-between">
      <a href="{{ route('home') }}" class="logo d-flex align-items-end text-decoration-none">
        <img src="{{ asset('sitetemp/assets/logo.jpg') }}" alt="">
        <h1 class="sitename ms-2 mb-0">Capture Media</h1><span>.</span>
      </a>

      <div class="d-flex align-items-center">
        <div class="social-links">
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        </div>

        <form class="search-form ms-4" action="{{ route('search') }}" method="GET">
          <input type="text" name="q" value="{{ request('q') }}" placeholder="Recherche..." class="form-control">
          <button type="submit" class="btn"><i class="bi bi-search"></i></button>
        </form>
      </div>
    </div>

  </div>

  <div class="nav-wrap">
    <div class="container d-flex justify-content-center position-relative">
      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a></li>
          <li><a href="{{ route('posts.index') }}" class="{{ request()->routeIs('posts.*') ? 'active' : '' }}">Articles</a></li>
          <li><a href="{{ route('videos.index') }}" class="{{ request()->routeIs('videos.*') ? 'active' : '' }}">Vidéos</a></li>

          {{-- Menu Catégories (dropdown) --}}
          <li class="dropdown">
            <a href="#"><span>Catégories</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              @forelse($menuCategories as $cat)
                <li><a href="{{ route('category.show', $cat->slug) }}">{{ $cat->name }}</a></li>
              @empty
                <li><a href="javascript:void(0)">Aucune catégorie</a></li>
              @endforelse
            </ul>
          </li>

          <li><a href="#footer">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </div>
</header>
