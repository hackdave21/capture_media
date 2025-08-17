<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-radius-lg fixed-start ms-2 bg-white my-2" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand px-4 py-3 m-0" href="/admin/dashboard">
      <img src="{{ asset('admintemp/assets/logo.jpg') }}" class="navbar-brand-img" width="26" height="26" alt="main_logo">
      <span class="ms-1 text-sm text-dark">Capture Media</span>
    </a>
  </div>
  <hr class="horizontal dark mt-0 mb-2">
  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">

      <!-- Tableau de bord -->
      <li class="nav-item">
        <a class="nav-link active bg-gradient-dark text-white" href="/admin/dashboard">
          <i class="material-symbols-rounded opacity-5">dashboard</i>
          <span class="nav-link-text ms-1">Tableau de bord</span>
        </a>
      </li>

      <!-- Catégories -->
      <li class="nav-item">
        <a class="nav-link text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#categoriesMenu" aria-expanded="false" aria-controls="categoriesMenu">
          <i class="material-symbols-rounded opacity-5">category</i>
          <span class="nav-link-text ms-1">Catégories</span>
          <i class="material-symbols-rounded ms-auto">expand_more</i>
        </a>
        <div class="collapse" id="categoriesMenu">
          <ul class="nav nav-sm flex-column ms-3">
            <li class="nav-item">
              <a class="nav-link text-dark py-2" href="/admin/categories/create">
                <i class="material-symbols-rounded opacity-5 me-2" style="font-size: 16px;">add</i>
                <span class="nav-link-text">Ajouter catégorie</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark py-2" href="/admin/categories">
                <i class="material-symbols-rounded opacity-5 me-2" style="font-size: 16px;">list</i>
                <span class="nav-link-text">Voir tout</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Posts -->
      <li class="nav-item">
        <a class="nav-link text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#postsMenu" aria-expanded="false" aria-controls="postsMenu">
          <i class="material-symbols-rounded opacity-5">article</i>
          <span class="nav-link-text ms-1">Posts</span>
          <i class="material-symbols-rounded ms-auto">expand_more</i>
        </a>
        <div class="collapse" id="postsMenu">
          <ul class="nav nav-sm flex-column ms-3">
            <li class="nav-item">
              <a class="nav-link text-dark py-2" href="/admin/posts/create">
                <i class="material-symbols-rounded opacity-5 me-2" style="font-size: 16px;">add</i>
                <span class="nav-link-text">Ajouter post</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark py-2" href="/admin/posts">
                <i class="material-symbols-rounded opacity-5 me-2" style="font-size: 16px;">list</i>
                <span class="nav-link-text">Voir tout</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Sponsors -->
      <li class="nav-item">
        <a class="nav-link text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#sponsorsMenu" aria-expanded="false" aria-controls="sponsorsMenu">
          <i class="material-symbols-rounded opacity-5">business</i>
          <span class="nav-link-text ms-1">Sponsors</span>
          <i class="material-symbols-rounded ms-auto">expand_more</i>
        </a>
        <div class="collapse" id="sponsorsMenu">
          <ul class="nav nav-sm flex-column ms-3">
            <li class="nav-item">
              <a class="nav-link text-dark py-2" href="/admin/sponsors/create">
                <i class="material-symbols-rounded opacity-5 me-2" style="font-size: 16px;">add</i>
                <span class="nav-link-text">Ajouter sponsor</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark py-2" href="/admin/sponsors">
                <i class="material-symbols-rounded opacity-5 me-2" style="font-size: 16px;">list</i>
                <span class="nav-link-text">Voir tout</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <!-- Vidéos -->
      <li class="nav-item">
        <a class="nav-link text-dark" href="#" data-bs-toggle="collapse" data-bs-target="#videosMenu" aria-expanded="false" aria-controls="videosMenu">
          <i class="material-symbols-rounded opacity-5">video_library</i>
          <span class="nav-link-text ms-1">Vidéos</span>
          <i class="material-symbols-rounded ms-auto">expand_more</i>
        </a>
        <div class="collapse" id="videosMenu">
          <ul class="nav nav-sm flex-column ms-3">
            <li class="nav-item">
              <a class="nav-link text-dark py-2" href="/admin/videos/create">
                <i class="material-symbols-rounded opacity-5 me-2" style="font-size: 16px;">add</i>
                <span class="nav-link-text">Ajouter vidéo</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-dark py-2" href="/admin/videos">
                <i class="material-symbols-rounded opacity-5 me-2" style="font-size: 16px;">list</i>
                <span class="nav-link-text">Voir tout</span>
              </a>
            </li>
          </ul>
        </div>
      </li>

      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-dark font-weight-bolder opacity-5">Authentification</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link text-dark" href="/admin/profile">
          <i class="material-symbols-rounded opacity-5">person</i>
          <span class="nav-link-text ms-1">Profil</span>
        </a>
      </li>
    </ul>
  </div>
</aside>
