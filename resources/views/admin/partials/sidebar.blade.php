<aside class="left-sidebar" data-sidebarbg="skin6">
  <div>
    <!-- Logo -->
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="{{ route('admin.dashboard') }}" class="text-nowrap logo-img d-flex align-items-center gap-2">
        <img src="{{ asset('admintemp/assets/logo.jpg') }}" alt="logo" style="height:32px;width:32px;border-radius:8px">
        <span class="fw-semibold text-dark">Capture Media</span>
      </a>
      <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
        <i class="ti ti-x fs-8"></i>
      </div>
    </div>

    <!-- NAV -->
    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <!-- Section -->
        <li class="nav-small-cap">
          <iconify-icon icon="solar:menu-dots-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
          <span class="hide-menu">Navigation</span>
        </li>

        <!-- Dashboard -->
        <li class="sidebar-item">
          <a class="sidebar-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}"
             href="{{ route('admin.dashboard') }}" aria-expanded="false">
            <i class="ti ti-layout-dashboard"></i>
            <span class="hide-menu">Tableau de bord</span>
          </a>
        </li>

        <!-- Catégories -->
        <li class="sidebar-item">
          <a class="sidebar-link has-arrow {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}"
             href="javascript:void(0)"
             aria-expanded="{{ request()->routeIs('admin.categories.*') ? 'true' : 'false' }}">
            <i class="ti ti-category"></i>
            <span class="hide-menu">Catégories</span>
          </a>
          <ul aria-expanded="{{ request()->routeIs('admin.categories.*') ? 'true' : 'false' }}"
              class="collapse first-level {{ request()->routeIs('admin.categories.*') ? 'show' : '' }}">
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('admin.categories.create') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle-plus"></i>
                  </div>
                  <span class="hide-menu">Ajouter catégorie</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('admin.categories.index') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-list-details"></i>
                  </div>
                  <span class="hide-menu">Voir tout</span>
                </div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Posts -->
        <li class="sidebar-item">
          <a class="sidebar-link has-arrow {{ request()->routeIs('admin.posts.*') ? 'active' : '' }}"
             href="javascript:void(0)"
             aria-expanded="{{ request()->routeIs('admin.posts.*') ? 'true' : 'false' }}">
            <i class="ti ti-article"></i>
            <span class="hide-menu">Posts</span>
          </a>
          <ul aria-expanded="{{ request()->routeIs('admin.posts.*') ? 'true' : 'false' }}"
              class="collapse first-level {{ request()->routeIs('admin.posts.*') ? 'show' : '' }}">
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('admin.posts.create') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle-plus"></i>
                  </div>
                  <span class="hide-menu">Ajouter post</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('admin.posts.index') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-list-details"></i>
                  </div>
                  <span class="hide-menu">Voir tout</span>
                </div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Vidéos -->
        <li class="sidebar-item">
          <a class="sidebar-link has-arrow {{ request()->routeIs('admin.videos.*') ? 'active' : '' }}"
             href="javascript:void(0)"
             aria-expanded="{{ request()->routeIs('admin.videos.*') ? 'true' : 'false' }}">
            <i class="ti ti-player-play"></i>
            <span class="hide-menu">Vidéos</span>
          </a>
          <ul aria-expanded="{{ request()->routeIs('admin.videos.*') ? 'true' : 'false' }}"
              class="collapse first-level {{ request()->routeIs('admin.videos.*') ? 'show' : '' }}">
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('admin.videos.create') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle-plus"></i>
                  </div>
                  <span class="hide-menu">Ajouter vidéo</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('admin.videos.index') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-list-details"></i>
                  </div>
                  <span class="hide-menu">Voir tout</span>
                </div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Sponsors -->
        <li class="sidebar-item">
          <a class="sidebar-link has-arrow {{ request()->routeIs('admin.sponsors.*') ? 'active' : '' }}"
             href="javascript:void(0)"
             aria-expanded="{{ request()->routeIs('admin.sponsors.*') ? 'true' : 'false' }}">
            <i class="ti ti-building-skyscraper"></i>
            <span class="hide-menu">Sponsors</span>
          </a>
          <ul aria-expanded="{{ request()->routeIs('admin.sponsors.*') ? 'true' : 'false' }}"
              class="collapse first-level {{ request()->routeIs('admin.sponsors.*') ? 'show' : '' }}">
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('admin.sponsors.create') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle-plus"></i>
                  </div>
                  <span class="hide-menu">Ajouter sponsor</span>
                </div>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link justify-content-between" href="{{ route('admin.sponsors.index') }}">
                <div class="d-flex align-items-center gap-3">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-list-details"></i>
                  </div>
                  <span class="hide-menu">Voir tout</span>
                </div>
              </a>
            </li>
          </ul>
        </li>

        <!-- Auth -->
        <li class="nav-small-cap mt-3">
          <iconify-icon icon="solar:user-linear" class="nav-small-cap-icon fs-4"></iconify-icon>
          <span class="hide-menu">Authentification</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="#">
            <i class="ti ti-user"></i>
            <span class="hide-menu">Profil</span>
          </a>
        </li>
        <li class="sidebar-item">
          <form action="{{ route('admin.logout') }}" method="POST" class="d-inline">
            @csrf
            <button type="submit" class="sidebar-link btn btn-link p-0 text-start w-100">
              <i class="ti ti-logout"></i>
              <span class="hide-menu">Déconnexion</span>
            </button>
          </form>
        </li>
      </ul>
    </nav>
  </div>
</aside>
